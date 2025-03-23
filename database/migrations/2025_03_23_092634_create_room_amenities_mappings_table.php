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
        Schema::create('room_amenities_mapping', function (Blueprint $table) {
            $table->foreignId('RoomID')->constrained('rooms')->onDelete('cascade');
            $table->foreignId('AmenityID')->constrained('amenities')->onDelete('cascade');
            $table->primary(['RoomID', 'AmenityID']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('room_amenities_mappings');
    }
};
