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
            $table->boolean('contactar')->default(false);
            $table->boolean('politica')->default(false);
            $table->boolean('ier')->default(true);
            $table->boolean('exitoso')->default(true);
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
        Schema::dropIfExists('avaluos');
    }
}
