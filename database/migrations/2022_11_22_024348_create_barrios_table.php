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
            $table->increments('seq_barrio');
            $table->string('cod_barrio', 6)->unique();
            $table->string('nom_barrio', 40);
            $table->unsignedInteger('seq_ciudad');
            $table->boolean('activo')->default(true);
            $table->index('cod_barrio');
            $table->foreign('seq_ciudad')->references('seq_ciudad')->on('ciudades');
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
