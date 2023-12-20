<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstratosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estratos', function (Blueprint $table) {
            $table->increments('seq_estrato');
            $table->string('cod_estrato', 3)->unique();
            $table->string('nom_estrato', 15);
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
        Schema::dropIfExists('estratos');
    }
}
