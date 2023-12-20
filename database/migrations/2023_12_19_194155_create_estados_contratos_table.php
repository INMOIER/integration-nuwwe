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
        Schema::create('estados_contratos', function (Blueprint $table) {
            $table->increments('seq_estado_contrato');
            $table->string('cod_estado_contrato', 3)->unique();
            $table->string('nom_estado_contrato', 50);
            $table->addColumn('si_no', 'activo')->default('S');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estados_contratos');
    }
};
