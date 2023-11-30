<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarriosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barrios', function (Blueprint $table) {
            $table->id();
            $table->string('cod_barrio', 6)->unique();
            $table->string('nom_barrio', 40);
            $table->string('cod_ciudad', 6);
            $table->string('activo', 1)->default('S');
            $table->index('cod_barrio');
            $table->foreign('cod_ciudad')->references('cod_ciudad')->on('ciudades');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barrios');
    }
}
