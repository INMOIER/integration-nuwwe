<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNomenclaturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nomenclaturas', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('seq_nomenclatura')->unique();
            $table->string('nom_nomenclatura', 50);
            $table->string('cod_nomenclatura', 10)->nullable();
            $table->string('activo', 1)->default('S');
            $table->boolean('visible')->default(false);
            $table->index('seq_nomenclatura');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nomenclaturas');
    }
}
