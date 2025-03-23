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
            $table->foreignId('BookingID')->constrained('bookings')->onDelete('cascade');
            $table->date('IssueDate');
            $table->decimal('TotalAmount', 15, 2);
            $table->enum('PaymentMethod', ['Cash', 'Card', 'EWallet']);
            $table->enum('Status', ['Unpaid', 'Paid'])->default('Unpaid');
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
