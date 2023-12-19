<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstadosFisicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estados_fisicos', function (Blueprint $table) {
            $table->increments('seq_estado_fisico');
            $table->string('cod_estado_fisico', 3)->unique();
            $table->string('nom_estado_fisico', 15);
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
        Schema::dropIfExists('estados_fisicos');
    }
}
