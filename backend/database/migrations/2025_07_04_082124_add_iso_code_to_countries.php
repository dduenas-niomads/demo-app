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
        Schema::table('countries', function (Blueprint $table) {
            //
            $table->string('iso_code')->nullable();
            $table->string('flag')->nullable();
            $table->text('description')->nullable(); // <-- Agregado
            $table->unsignedBigInteger('population')->nullable(); // <-- Agregado
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('countries', function (Blueprint $table) {
            //
        });
    }
};
