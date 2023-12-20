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
        Schema::create('responsables_solicitudes', function (Blueprint $table) {
            $table->increments('seq_responsable_solicitud');
            $table->string('cod_responsable_solicitud', 3)->unique();
            $table->string('nom_responsable_solicitud', 50);
            $table->addColumn('si_no', 'activo')->default('S');
            $table->timestamp('fecha_ult_modificacion');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('responsables_solicitudes');
    }
};
