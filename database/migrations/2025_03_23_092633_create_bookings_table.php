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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('roomID')->constrained('rooms')->onDelete('cascade');
            $table->date('bookingDate');
            $table->decimal('roomPrice', 10, 2);
            $table->date('expectedCheckInDate')->nullable();
            $table->date('expectedCheckOutDate')->nullable();
            $table->date('checkInDate')->nullable();
            $table->date('checkOutDate')->nullable();
            $table->enum('status', ['pending', 'checkedIn', 'checkedOut', 'cancelled'])->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
