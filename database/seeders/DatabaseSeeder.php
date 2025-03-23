<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            HotelSeeder::class,
            RoomSeeder::class,
            BookingSeeder::class,
            InvoiceSeeder::class,
            RevenueSeeder::class,
            AmenitiesSeeder::class,
            HotelAmenitiesMappingSeeder::class,
            RoomAmenitiesMappingSeeder::class,
            HotelOwnerSeeder::class,
        ]);
    }
}
