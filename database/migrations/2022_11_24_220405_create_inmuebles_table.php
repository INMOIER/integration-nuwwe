<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInmueblesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inmuebles', function (Blueprint $table) {
            $table->id();
            $table->string('cod_inmueble', 10)->unique()->nullable();
            $table->integer('vlr_administracion')->nullable();
            $table->integer('vlr_canon')->nullable();
            $table->integer('vlr_fianza')->nullable();
            $table->integer('vlr_publicidad')->nullable();
            $table->unsignedBigInteger('precio_venta')->nullable();
            $table->string('dir_inmueble_consulta');
            $table->string('cod_cliente_promotor', 20)->nullable();
            $table->string('nom_unidad')->nullable();
            $table->text('obs_inmueble')->nullable();
            $table->string('longitud', 15)->nullable();
            $table->string('latitud', 15)->nullable();
            $table->date('fecha_consignacion')->nullable();
            $table->date('fecha_reconsignacion')->nullable();
            $table->date('fecha_retiro')->nullable();
            $table->longText('dir_inmueble')->nullable();
            $table->integer('vlr_canon_2022')->nullable();
            $table->unsignedBigInteger('precio_venta_2022')->nullable();

            // Campos foráneos
            $table->string('cod_barrio', 6)->nullable();
            $table->string('cod_ciudad', 6);
            $table->string('cod_destino', 3);
            $table->string('cod_estado', 3)->nullable();
            $table->string('cod_estado_fisico', 3)->nullable();
            $table->string('cod_estrato', 3);
            $table->string('cod_tipo_consignacion', 3)->nullable();
            $table->string('cod_tipo_inmueble', 3);

            // Foráneas
            $table->foreign('cod_barrio')->references('cod_barrio')->on('barrios');
            $table->foreign('cod_ciudad')->references('cod_ciudad')->on('ciudades');
            $table->foreign('cod_destino')->references('cod_destino')->on('destinos_inmuebles');
            $table->foreign('cod_estado')->references('cod_estado')->on('estados_inmuebles');
            $table->foreign('cod_estado_fisico')->references('cod_estado_fisico')->on('estados_fisicos');
            $table->foreign('cod_estrato')->references('cod_estrato')->on('estratos');
            $table->foreign('cod_tipo_consignacion')->references('cod_tipo_consignacion')->on('tipos_consignaciones');
            $table->foreign('cod_tipo_inmueble')->references('cod_tipo_inmueble')->on('tipos_inmuebles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inmuebles');
    }
}
