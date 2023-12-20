<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTiposDistribucionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipos_distribuciones', function (Blueprint $table) {
            $table->increments('seq_tipo_distribucion');
            $table->string('cod_tipo_distribucion', 3)->unique();
            $table->string('nom_tipo_distribucion', 30);
            $table->addColumn('si_no', 'activo')->default('S');
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
        Schema::dropIfExists('tipos_distribuciones');
    }
}
