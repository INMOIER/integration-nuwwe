<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInmuebleServicioPublicoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inmueble_servicio_publico', function (Blueprint $table) {
            $table->unsignedBigInteger('seq_inmueble_serv_pub')->primary();
            $table->unsignedInteger('seq_servicio');
            $table->unsignedBigInteger('cod_inmueble');
            $table->string('obs')->nullable();
            $table->timestamp('fecha_ult_modificacion');
            $table->foreign('seq_servicio')->references('seq_servicio')->on('servicios_publicos');
            $table->foreign('cod_inmueble')->references('cod_inmueble')->on('inmuebles');
            $table->unique(['seq_servicio', 'cod_inmueble']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inmueble_servicio_publico');
    }
}
