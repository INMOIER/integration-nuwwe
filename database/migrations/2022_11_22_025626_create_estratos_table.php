<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstratosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estratos', function (Blueprint $table) {
            $table->id();
            $table->string('cod_estrato', 3)->unique();
            $table->string('nom_estrato', 15);
            $table->string('activo', 1)->default('S');
            $table->boolean('visible')->default(true);
            $table->index('cod_estrato');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estratos');
    }
}
