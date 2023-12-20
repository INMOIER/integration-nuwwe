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
        Schema::create('solicitudes', function (Blueprint $table) {
            $table->unsignedBigInteger('nro_solicitud')->primary();
            $table->date('fecha_solicitud');
            $table->timestamp('fecha_ult_modificacion');
            $table->longText('des_solicitud');

            // Foreign fields
            $table->unsignedBigInteger('seq_tipo_solicitud');
            $table->unsignedInteger('seq_estado_solicitud');
            $table->unsignedBigInteger('cod_inmueble');
            $table->unsignedBigInteger('seq_contrato');
            $table->unsignedInteger('seq_motivo');
            $table->unsignedInteger('seq_medio_presentacion');

            // Constraints
            $table->foreign('seq_tipo_solicitud')->references('seq_tipo_solicitud')->on('tipos_solicitudes');
            $table->foreign('seq_estado_solicitud')->references('seq_estado_solicitud')->on('estados_solicitudes');
            $table->foreign('cod_inmueble')->references('cod_inmueble')->on('inmuebles');
            $table->foreign('seq_contrato')->references('seq_contrato')->on('contratos');
            $table->foreign('seq_motivo')->references('seq_motivo')->on('tipos_solicitudes_motivos');
            $table->foreign('seq_medio_presentacion')->references('seq_medio_presentacion')->on('medios_presentaciones');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('solicitudes');
    }
};
