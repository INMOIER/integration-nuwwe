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
            $table->unsignedInteger('seq_nomenclatura')->primary();
            $table->string('nom_nomenclatura', 50);
            $table->string('cod_nomenclatura', 10)->nullable();
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
        Schema::dropIfExists('nomenclaturas');
    }
}
