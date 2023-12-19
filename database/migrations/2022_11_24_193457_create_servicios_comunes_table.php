<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiciosComunesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicios_comunes', function (Blueprint $table) {
            $table->increments('seq_servicio_comun');
            $table->string('cod_servicio_comun', 3)->unique();
            $table->string('nom_servicio_comun', 30);
            $table->boolean('activo')->default(true);
            $table->unsignedInteger('orden')->nullable();
            $table->string('tipo', 1)->default('C');
            $table->string('rango_inicial', 7)->nullable();
            $table->string('rango_final', 7)->nullable();
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
        Schema::dropIfExists('servicios_comunes');
    }
}
