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
            $table->increments('seq_tipo_inmueble');
            $table->string('cod_tipo_inmueble', 3)->unique();
            $table->string('nom_tipo_inmueble', 20);
            $table->boolean('activo')->default(true);
            $table->boolean('visible')->default(false);
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
        Schema::dropIfExists('tipos_inmuebles');
    }
}
