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
        Schema::create('tipos_solicitudes', function (Blueprint $table) {
            $table->bigIncrements('seq_tipo_solicitud');
            $table->string('cod_tipo_solicitud', 3)->unique();
            $table->string('nom_tipo_solicitud', 50);
            $table->unsignedSmallInteger('dias_maximo_solucion')->default(0);
            $table->addColumn('si_no', 'activo')->default('S');
            $table->timestamp('fecha_ult_modificacion');
            $table->unsignedInteger('seq_dep_empresa');
            $table->foreign('seq_dep_empresa')->references('seq_dep_empresa')->on('departamentos_empresa');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tipos_solicitudes');
    }
};
