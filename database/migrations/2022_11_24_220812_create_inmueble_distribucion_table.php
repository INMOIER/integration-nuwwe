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
            $table->unsignedBigInteger('seq_inmueble_distribucion')->primary();
            $table->unsignedInteger('seq_tipo_distribucion');
            $table->unsignedBigInteger('cod_inmueble');
            $table->string('vlr_distribucion', 30)->nullable();
            $table->string('obs_distribucion')->nullable();
            $table->timestamp('fecha_ult_modificacion');
            $table->foreign('seq_tipo_distribucion')->references('seq_tipo_distribucion')->on('tipos_distribuciones');
            $table->foreign('cod_inmueble')->references('cod_inmueble')->on('inmuebles');
            $table->unique(['seq_tipo_distribucion', 'cod_inmueble']);
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
