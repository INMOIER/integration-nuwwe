<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiciosPublicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicios_publicos', function (Blueprint $table) {
            $table->increments('seq_servicio');
            $table->string('cod_servicio', 3)->unique();
            $table->string('nom_servicio', 15);
            $table->addColumn('si_no', 'activo')->default('S');
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
        Schema::dropIfExists('servicios_publicos');
    }
}
