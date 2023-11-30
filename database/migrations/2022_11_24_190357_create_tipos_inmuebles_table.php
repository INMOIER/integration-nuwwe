<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTiposInmueblesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipos_inmuebles', function (Blueprint $table) {
            $table->id();
            $table->string('cod_tipo_inmueble', 3)->unique();
            $table->string('nom_tipo_inmueble', 20);
            $table->string('activo', 1)->default('S');
            $table->boolean('visible')->default(false);
            $table->index('cod_tipo_inmueble');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipos_inmuebles');
    }
}
