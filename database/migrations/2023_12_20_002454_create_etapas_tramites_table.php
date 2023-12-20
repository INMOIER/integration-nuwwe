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
        Schema::create('etapas_tramites', function (Blueprint $table) {
            $table->bigIncrements('seq_etapa');
            $table->string('cod_etapa', 3)->unique();
            $table->string('nom_etapa', 50);
            $table->text('des_etapa');
            $table->addColumn('si_no', 'mostrar_app_clientes')->default('N');
            $table->addColumn('si_no', 'envio_correspondencia')->default('N');
            $table->addColumn('si_no', 'activo')->default('S');
            $table->timestamp('fecha_ult_modificacion');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etapas_tramites');
    }
};
