<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComparablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comparables', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_avaluo');
            $table->string('tiempodeconstruido');
            $table->decimal('estrato', 3, 1);
            $table->decimal('areaconstruida', 5, 2);
            $table->string('latitud', 14);
            $table->string('longitud', 14);
            $table->unsignedBigInteger('valorarriendo')->nullable();
            $table->unsignedBigInteger('valorventa')->nullable();
            $table->string('url');
            $table->string('fuente', 5);
            $table->string('valormt2');
            $table->timestamps();
            $table->foreign('id_avaluo')->references('id')->on('avaluos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comparables');
    }
}
