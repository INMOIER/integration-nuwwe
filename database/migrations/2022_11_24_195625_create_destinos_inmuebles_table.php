<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDestinosInmueblesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('destinos_inmuebles', function (Blueprint $table) {
            $table->increments('seq_destino');
            $table->string('cod_destino', 3)->unique();
            $table->string('nom_destino', 15);
            $table->boolean('activo')->default(true);
            $table->boolean('visible')->default(true);
            $table->timestamp('fecha_ult_modificacion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('destinos_inmuebles');
    }
}
