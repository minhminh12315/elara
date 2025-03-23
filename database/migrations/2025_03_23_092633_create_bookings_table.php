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
            $table->foreignId('RoomID')->constrained('rooms')->onDelete('cascade');
            $table->date('BookingDate');
            $table->decimal('RoomPrice', 10, 2);
            $table->date('ExpectedCheckInDate')->nullable();
            $table->date('ExpectedCheckOutDate')->nullable();
            $table->date('CheckInDate')->nullable();
            $table->date('CheckOutDate')->nullable();
            $table->enum('Status', ['Pending', 'CheckedIn', 'CheckedOut', 'Cancelled'])->default('Pending');
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
