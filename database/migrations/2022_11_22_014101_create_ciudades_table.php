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
            $table->increments('seq_ciudad');
            $table->string('cod_ciudad', 6)->unique();
            $table->string('nom_ciudad', 40);
            $table->unsignedInteger('seq_departamento');
            $table->boolean('activo')->default(true);
            $table->index('cod_ciudad');
            $table->foreign('seq_departamento')->references('seq_departamento')->on('departamentos');
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
