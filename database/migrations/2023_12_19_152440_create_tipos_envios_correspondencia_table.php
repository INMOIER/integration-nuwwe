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
        Schema::create('tipos_envios_correspondencia', function (Blueprint $table) {
            $table->increments('seq_tipo_envio');
            $table->string('cod_tipo_envio', 3)->unique();
            $table->string('nom_tipo_envio', 50);
            $table->addColumn('si_no', 'activo')->default('S');
            $table->timestamp('fecha_ult_modificacion');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tipos_envios_correspondencia');
    }
};
