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
        Schema::create('contratos', function (Blueprint $table) {
            $table->unsignedBigInteger('seq_contrato')->primary();
            $table->decimal('porc_reajuste');
            $table->decimal('porc_reajuste_adicional')->default(0);
            $table->integer('vlr_canon');
            $table->date('fecha_liquidacion');
            $table->date('fecha_contrato');
            $table->date('fecha_vencimiento');
            $table->timestamp('fecha_ult_modificacion');

            // Foreign fields
            $table->unsignedInteger('seq_estado_contrato');
            $table->unsignedInteger('seq_cliente_arrendatario1');
            $table->unsignedBigInteger('cod_inmueble');

            // Constraints
            $table->foreign('seq_estado_contrato')->references('seq_estado_contrato')->on('estados_contratos');
            $table->foreign('seq_cliente_arrendatario1')->references('seq_cliente')->on('clientes');
            $table->foreign('cod_inmueble')->references('cod_inmueble')->on('inmuebles');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contratos');
    }
};
