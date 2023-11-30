<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAvaluosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avaluos', function (Blueprint $table) {
            $table->id();
            $table->string('nom_barrio', 40);
            $table->unsignedInteger('via_principal');
            $table->string('eje_vial_1', 30);
            $table->string('eje_vial_2', 5);
            $table->string('eje_vial_3', 5);
            $table->string('complemento', 30)->nullable();
            $table->boolean('admon')->default(false);
            $table->unsignedSmallInteger('id_antiguedad');
            $table->boolean('servicios_independientes')->default(true);
            $table->string('usuario_nombre', 60);
            $table->string('usuario_telefono', 60);
            $table->string('usuario_correo', 60);
            $table->string('usuario_ip', 40);
            $table->boolean('contactar')->default(false);
            $table->boolean('politica')->default(false);
            $table->boolean('ier')->default(true);
            $table->boolean('exitoso')->default(true);
            $table->unsignedBigInteger('promedio_arriendo');
            $table->unsignedBigInteger('promedio_venta');
            $table->unsignedBigInteger('id_inmueble')->nullable();
            $table->timestamps();
            $table->foreign('id_antiguedad')->references('id')->on('antiguedades');
            $table->foreign('id_inmueble')->references('id')->on('inmuebles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('avaluos');
    }
}
