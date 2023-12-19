<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTiposConsignacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipos_consignaciones', function (Blueprint $table) {
            $table->increments('seq_tipo_consignacion');
            $table->string('cod_tipo_consignacion', 3)->unique();
            $table->string('nom_tipo_consignacion', 50);
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
        Schema::dropIfExists('tipos_consignaciones');
    }
}
