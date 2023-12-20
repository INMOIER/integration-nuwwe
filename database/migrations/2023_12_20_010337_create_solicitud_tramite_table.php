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
        Schema::create('solicitud_tramite', function (Blueprint $table) {
            $table->unsignedBigInteger('seq_tramite')->primary();
            $table->timestamp('fecha_tramite');
            $table->longText('obs_tramite')->nullable();

            // Foreign fields
            $table->unsignedBigInteger('nro_solicitud');
            $table->unsignedBigInteger('user_id');
            $table->unsignedInteger('seq_estado_solicitud');

            // Constraints
            $table->foreign('nro_solicitud')->references('nro_solicitud')->on('solicitudes');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('seq_estado_solicitud')->references('seq_estado_solicitud')->on('estados_solicitudes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('solicitud_tramite');
    }
};
