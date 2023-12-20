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
        Schema::create('inmueble_propietario', function (Blueprint $table) {
            $table->unsignedBigInteger('seq_propietario')->primary();

            // Foreign fields
            $table->unsignedBigInteger('seq_cliente_propietario');
            $table->unsignedBigInteger('seq_cliente_representante');
            $table->unsignedBigInteger('cod_inmueble');

            // Constraints
            $table->foreign('seq_cliente_propietario')->references('seq_cliente')->on('clientes');
            $table->foreign('seq_cliente_representante')->references('seq_cliente')->on('clientes');
            $table->foreign('cod_inmueble')->references('cod_inmueble')->on('inmuebles');
            $table->unique(['seq_cliente_propietario', 'cod_inmueble']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inmueble_propietario');
    }
};
