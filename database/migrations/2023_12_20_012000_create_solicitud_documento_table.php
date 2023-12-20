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
        Schema::create('solicitud_documento', function (Blueprint $table) {
            $table->unsignedBigInteger('secuencia')->primary();
            $table->addColumn('si_no', 'recibido')->default('N');
            $table->timestamp('fecha_recibido');
            $table->string('ruta_archivo');
            $table->addColumn('si_no', 'is_storage')->default('S');

            // Foreign fields
            $table->unsignedBigInteger('nro_solicitud');
            $table->unsignedInteger('seq_clase_documento');

            // Constraints
            $table->foreign('nro_solicitud')->references('nro_solicitud')->on('solicitudes');
            $table->foreign('seq_clase_documento')->references('seq_clase_documento')->on('clases_documentos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('solicitud_documento');
    }
};
