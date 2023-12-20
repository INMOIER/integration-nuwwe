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
        Schema::create('estados_solicitudes', function (Blueprint $table) {
            $table->bigIncrements('seq_estado_solicitud');
            $table->string('cod_estado_solicitud', 3)->unique();
            $table->string('nom_estado_solicitud', 50);
            $table->string('color_estado', 7)->nullable();
            $table->addColumn('si_no', 'activo')->default('S');
            $table->timestamp('fecha_ult_modificacion');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estados_solicitudes');
    }
};
