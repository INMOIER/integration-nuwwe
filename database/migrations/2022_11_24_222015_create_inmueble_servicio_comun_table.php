<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInmuebleServicioComunTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inmueble_servicio_comun', function (Blueprint $table) {
            $table->unsignedBigInteger('seq_inmueble_servicio_comun')->primary();
            $table->unsignedInteger('seq_servicio_comun');
            $table->unsignedBigInteger('cod_inmueble');
            $table->string('vlr_servicio_comun', 30);
            $table->string('obs_servicio_comun')->nullable();
            $table->timestamp('fecha_ult_modificacion');
            $table->foreign('seq_servicio_comun')->references('seq_servicio_comun')->on('servicios_comunes');
            $table->foreign('cod_inmueble')->references('cod_inmueble')->on('inmuebles');
            $table->unique(['seq_servicio_comun', 'cod_inmueble']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inmueble_servicio_comun');
    }
}
