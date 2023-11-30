<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAvaluoInmuebleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avaluo_inmueble', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_avaluo');
            $table->string('cod_inmueble', 10);
            $table->integer('vlr_canon')->nullable();
            $table->unsignedBigInteger('precio_venta')->nullable();
            $table->foreign('id_avaluo')->references('id')->on('avaluos');
            $table->foreign('cod_inmueble')->references('cod_inmueble')->on('inmuebles');
            $table->unique(['id_avaluo', 'cod_inmueble']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('avaluo_inmueble');
    }
}
