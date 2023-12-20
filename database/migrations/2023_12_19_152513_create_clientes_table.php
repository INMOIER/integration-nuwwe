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
        Schema::create('clientes', function (Blueprint $table) {
            $table->bigIncrements('seq_cliente');
            $table->string('cod_cliente', 30)->unique();
            $table->string('primer_nombre', 50);
            $table->string('segundo_nombre', 50)->nullable();
            $table->string('primer_apellido', 50);
            $table->string('segundo_apellido', 50)->nullable();
            $table->date('fecha_nacimiento');
            $table->string('email', 120)->unique();
            $table->string('nro_telefono_fijo', 20)->nullable();
            $table->string('nro_telefono_celular', 20)->nullable();
            $table->text('dir_cliente');
            $table->text('dir_envio_correspondencia');
            $table->text('dir_cliente_consulta');
            $table->text('dir_envio_corres_consulta');
            $table->string('tel_cliente_consulta', 20)->nullable();
            $table->text('obs_cliente')->nullable();
            $table->addColumn('sexo', 'sexo')->default('F');
            $table->addColumn('si_no', 'responsable_iva')->default('N');
            $table->addColumn('si_no', 'agente_retenedor')->default('N');
            $table->addColumn('si_no', 'retiene_sobre_iva')->default('N');
            $table->addColumn('si_no', 'declara_renta')->default('N');
            $table->timestamp('fecha_ult_modificacion');

            // Foreign fields
            $table->unsignedInteger('seq_ciudad_documento');
            $table->unsignedInteger('seq_barrio_cliente');
            $table->unsignedInteger('seq_barrio_correspondencia');
            $table->unsignedInteger('seq_tipo_regimen');
            $table->unsignedInteger('seq_tipo_cliente');
            $table->unsignedInteger('seq_tipo_documento');
            $table->unsignedInteger('seq_tipo_envio');

            // Constraints
            $table->foreign('seq_ciudad_documento')->references('seq_ciudad')->on('ciudades');
            $table->foreign('seq_barrio_cliente')->references('seq_barrio')->on('barrios');
            $table->foreign('seq_barrio_correspondencia')->references('seq_barrio')->on('barrios');
            $table->foreign('seq_tipo_regimen')->references('seq_tipo_regimen')->on('tipos_regimenes');
            $table->foreign('seq_tipo_cliente')->references('seq_tipo_cliente')->on('tipos_clientes');
            $table->foreign('seq_tipo_documento')->references('seq_tipo_documento')->on('tipos_documentos');
            $table->foreign('seq_tipo_envio')->references('seq_tipo_envio')->on('tipos_envios_correspondencia');

            // Indexes
            $table->index('cod_cliente');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
