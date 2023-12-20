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
        Schema::create('tipo_solicitud_etapa', function (Blueprint $table) {
            $table->unsignedBigInteger('seq_tipo_solicitud_etapa')->primary();
            $table->timestamp('fecha_ult_modificacion');

            // Foreign fields
            $table->unsignedBigInteger('seq_tipo_solicitud');
            $table->unsignedBigInteger('seq_etapa');
            $table->unsignedBigInteger('seq_estado_solicitud');

            // Constraints
            $table->foreign('seq_tipo_solicitud')->references('seq_tipo_solicitud')->on('tipos_solicitudes');
            $table->foreign('seq_etapa')->references('seq_etapa')->on('etapas_tramites');
            $table->foreign('seq_estado_solicitud')->references('seq_estado_solicitud')->on('estados_solicitudes');
            $table->unique(['seq_tipo_solicitud', 'seq_etapa']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tipo_solicitud_etapa');
    }
};
