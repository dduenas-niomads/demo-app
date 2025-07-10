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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_id')->constrained('clients')->onDelete('cascade'); // Clave foránea a la tabla clients
            $table->string('invoice_number')->unique(); // Número de factura único
            $table->date('issue_date');
            $table->date('due_date');
            $table->decimal('total_amount', 10, 2); // Monto total con 2 decimales
            $table->string('status')->default('pending'); // Estado de la factura (pending, paid, cancelled)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};

