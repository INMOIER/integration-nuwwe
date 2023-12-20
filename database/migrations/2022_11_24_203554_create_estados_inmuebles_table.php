<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstadosInmueblesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estados_inmuebles', function (Blueprint $table) {
            $table->increments('seq_estado');
            $table->string('cod_estado', 3)->unique();
            $table->string('nom_estado', 15);
            $table->string('color_estado', 7)->nullable();
            $table->addColumn('si_no', 'activo')->default('S');
            $table->boolean('visible')->default(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estados_inmuebles');
    }
}
