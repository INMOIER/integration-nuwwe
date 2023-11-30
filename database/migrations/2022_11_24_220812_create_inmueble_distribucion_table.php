<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInmuebleDistribucionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inmueble_distribucion', function (Blueprint $table) {
            $table->id();
            $table->string('seq_inmueble_distribucion', 12)->unique()->nullable();
            $table->string('cod_tipo_distribucion', 3);
            $table->string('cod_inmueble', 10);
            $table->string('vlr_distribucion', 30)->nullable();
            $table->string('obs_distribucion')->nullable();
            $table->foreign('cod_tipo_distribucion')->references('cod_tipo_distribucion')->on('tipos_distribuciones');
            $table->foreign('cod_inmueble')->references('cod_inmueble')->on('inmuebles');
            $table->unique(['cod_tipo_distribucion', 'cod_inmueble']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inmueble_distribucion');
    }
}
