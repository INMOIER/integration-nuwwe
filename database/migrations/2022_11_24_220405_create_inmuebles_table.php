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
            $table->unsignedBigInteger('cod_inmueble')->primary();
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
            $table->timestamp('fecha_ult_modificacion');

            // Campos foráneos
            $table->unsignedInteger('seq_barrio')->nullable();
            $table->unsignedInteger('seq_ciudad');
            $table->unsignedInteger('seq_destino');
            $table->unsignedInteger('seq_estado')->nullable();
            $table->unsignedInteger('seq_estado_fisico')->nullable();
            $table->unsignedInteger('seq_estrato');
            $table->unsignedInteger('seq_tipo_consignacion')->nullable();
            $table->unsignedInteger('seq_tipo_inmueble');

            // Foráneas
            $table->foreign('seq_barrio')->references('seq_barrio')->on('barrios');
            $table->foreign('seq_ciudad')->references('seq_ciudad')->on('ciudades');
            $table->foreign('seq_destino')->references('seq_destino')->on('destinos_inmuebles');
            $table->foreign('seq_estado')->references('seq_estado')->on('estados_inmuebles');
            $table->foreign('seq_estado_fisico')->references('seq_estado_fisico')->on('estados_fisicos');
            $table->foreign('seq_estrato')->references('seq_estrato')->on('estratos');
            $table->foreign('seq_tipo_consignacion')->references('seq_tipo_consignacion')->on('tipos_consignaciones');
            $table->foreign('seq_tipo_inmueble')->references('seq_tipo_inmueble')->on('tipos_inmuebles');
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
