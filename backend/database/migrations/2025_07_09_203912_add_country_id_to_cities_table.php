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
        Schema::table('cities', function (Blueprint $table) {
            // Añadir la columna country_id como clave foránea
            $table->unsignedBigInteger('country_id')->after('population');

            // Definir la relación de la clave foránea
            $table->foreign('country_id')
                ->references('id')
                ->on('countries')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('cities', function (Blueprint $table) {
            // Eliminar la clave foránea
            $table->dropForeig(['country_id']);
            $table->dropColumn('country_id');
            //
        });
    }
};
