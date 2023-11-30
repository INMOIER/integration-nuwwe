<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstadosInmueblesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estados_inmuebles', function (Blueprint $table) {
            $table->id();
            $table->string('cod_estado', 3)->unique();
            $table->string('nom_estado', 15);
            $table->string('color_estado', 7)->nullable();
            $table->string('activo', 1)->default('S');
            $table->boolean('visible')->default(true);
            $table->index('cod_estado');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estados_inmuebles');
    }
}
