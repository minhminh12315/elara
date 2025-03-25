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
        Schema::create('hotel_owners', function (Blueprint $table) {
            $table->foreignId('userID')->constrained('users')->onDelete('cascade');
            $table->foreignId('hotelID')->constrained('hotels')->onDelete('cascade');
            $table->primary(['userID', 'hotelID']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hotel_owners');
    }
};
