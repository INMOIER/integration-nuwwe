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
        DB::unprepared("DROP TYPE IF EXISTS si_no CASCADE;");
        DB::unprepared("DROP TYPE IF EXISTS sexo CASCADE;");

        // PostgreSQL custom enum types
        DB::unprepared("CREATE TYPE si_no AS ENUM ('S', 'N');");
        DB::unprepared("CREATE TYPE sexo AS ENUM ('F', 'M');");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::unprepared("DROP TYPE IF EXISTS si_no CASCADE;");
        DB::unprepared("DROP TYPE IF EXISTS sexo CASCADE;");
    }
};
