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
        Schema::create('medios_presentaciones', function (Blueprint $table) {
            $table->increments('seq_medio_presentacion');
            $table->string('cod_medio_presentacion', 3)->unique();
            $table->string('nom_medio_presentacion', 50);
            $table->addColumn('si_no', 'activo')->default('S');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medios_presentaciones');
    }
};
