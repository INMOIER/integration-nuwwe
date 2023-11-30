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
            $table->id();
            $table->string('seq_inmueble_servicio_comun', 12)->unique()->nullable();
            $table->string('cod_servicio_comun', 3);
            $table->string('cod_inmueble', 10);
            $table->string('vlr_servicio_comun', 30);
            $table->string('obs_servicio_comun')->nullable();
            $table->foreign('cod_servicio_comun')->references('cod_servicio_comun')->on('servicios_comunes');
            $table->foreign('cod_inmueble')->references('cod_inmueble')->on('inmuebles');
            $table->unique(['cod_servicio_comun', 'cod_inmueble']);
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
