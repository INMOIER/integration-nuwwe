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
        Schema::create('tipos_solicitudes_motivos', function (Blueprint $table) {
            $table->unsignedInteger('seq_motivo')->primary();
            $table->string('nom_motivo', 50);
            $table->unsignedSmallInteger('dias_maximo_solucion')->default(0);
            $table->unsignedBigInteger('seq_tipo_solicitud');
            $table->addColumn('si_no', 'activo')->default('S');
            $table->foreign('seq_tipo_solicitud')->references('seq_tipo_solicitud')->on('tipos_solicitudes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tipos_solicitudes_motivos');
    }
};
