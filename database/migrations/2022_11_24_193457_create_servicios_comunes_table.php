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
            $table->id();
            $table->string('cod_servicio_comun', 3)->unique();
            $table->string('nom_servicio_comun', 30);
            $table->string('activo', 1)->default('S');
            $table->string('orden', 2)->default('0');
            $table->string('tipo', 1)->default('C');
            $table->string('rango_inicial', 7)->nullable();
            $table->string('rango_final', 7)->nullable();
            $table->boolean('visible')->default(false);
            $table->index('cod_servicio_comun');
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
