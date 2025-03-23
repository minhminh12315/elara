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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->string('RoomType');
            $table->decimal('Price', 10, 2);
            $table->foreignId('HotelID')->constrained('hotels')->onDelete('cascade');
            $table->enum('Status', ['Available', 'Occupied', 'Maintenance'])->default('Available');
            $table->integer('Capacity');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
