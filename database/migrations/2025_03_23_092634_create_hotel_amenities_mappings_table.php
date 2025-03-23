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
        Schema::create('hotel_amenities_mapping', function (Blueprint $table) {
            $table->foreignId('HotelID')->constrained('hotels')->onDelete('cascade');
            $table->foreignId('AmenityID')->constrained('amenities')->onDelete('cascade');
            $table->primary(['HotelID', 'AmenityID']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hotel_amenities_mappings');
    }
};
