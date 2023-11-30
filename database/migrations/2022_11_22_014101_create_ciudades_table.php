<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCiudadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ciudades', function (Blueprint $table) {
            $table->id();
            $table->string('cod_ciudad', 6)->unique();
            $table->string('nom_ciudad', 40);
            $table->string('cod_departamento', 3);
            $table->string('activo', 1)->default('S');
            $table->index('cod_ciudad');
            $table->foreign('cod_departamento')->references('cod_departamento')->on('departamentos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ciudades');
    }
}
