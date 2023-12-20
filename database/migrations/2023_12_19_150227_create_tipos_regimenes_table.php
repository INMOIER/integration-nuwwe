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
        Schema::create('tipos_regimenes', function (Blueprint $table) {
            $table->increments('seq_tipo_regimen', true);
            $table->string('nom_tipo_regimen', 50);
            $table->string('cod_tipo_regimen', 10)->nullable();
            $table->addColumn('si_no', 'activo')->default('S');
            $table->timestamp('fecha_ult_modificacion');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tipos_regimenes');
    }
};
