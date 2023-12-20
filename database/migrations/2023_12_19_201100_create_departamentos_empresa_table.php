<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('departamentos_empresa', function (Blueprint $table) {
            $table->increments('seq_dep_empresa');
            $table->string('cod_dep_empresa', 3)->unique();
            $table->string('nom_dep_empresa', 50);
            $table->addColumn('si_no', 'activo')->default('S');
            $table->timestamp('fecha_ult_modificacion');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('departamentos_empresa');
    }
};
