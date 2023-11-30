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
            $table->id();
            $table->string('seq_inmueble_serv_pub', 12)->unique()->nullable();
            $table->string('cod_servicio', 3);
            $table->string('cod_inmueble', 10);
            $table->string('obs')->nullable();
            $table->foreign('cod_servicio')->references('cod_servicio')->on('servicios_publicos');
            $table->foreign('cod_inmueble')->references('cod_inmueble')->on('inmuebles');
            $table->unique(['cod_servicio', 'cod_inmueble']);
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
