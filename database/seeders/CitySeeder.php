<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cities')->insert([
            // Thành phố trực thuộc trung ương (state_id = null)
            ['name' => 'Hà Nội', 'state_id' => null, 'country_id' => 1], 
            ['name' => 'TP Hồ Chí Minh', 'state_id' => null, 'country_id' => 1],
            ['name' => 'Đà Nẵng', 'state_id' => null, 'country_id' => 1],
            ['name' => 'Hải Phòng', 'state_id' => null, 'country_id' => 1],
            ['name' => 'Cần Thơ', 'state_id' => null, 'country_id' => 1],

            // Thành phố thuộc tỉnh
            ['name' => 'Nam Định', 'state_id' => 1, 'country_id' => 1],
            ['name' => 'Biên Hòa', 'state_id' => 2, 'country_id' => 1],
            ['name' => 'Nha Trang', 'state_id' => 3, 'country_id' => 1],
            ['name' => 'Vũng Tàu', 'state_id' => 4, 'country_id' => 1],
            ['name' => 'Buôn Ma Thuột', 'state_id' => 9, 'country_id' => 1],
            ['name' => 'Vinh', 'state_id' => 5, 'country_id' => 1],
            ['name' => 'Thanh Hóa', 'state_id' => 6, 'country_id' => 1],
            ['name' => 'Quy Nhơn', 'state_id' => 7, 'country_id' => 1],
            ['name' => 'Phan Thiết', 'state_id' => 8, 'country_id' => 1],

            // Thành phố thuộc bang - United States
            ['name' => 'Los Angeles', 'state_id' => 10, 'country_id' => 3],
            ['name' => 'San Francisco', 'state_id' => 10, 'country_id' => 3],
            ['name' => 'Dallas', 'state_id' => 11, 'country_id' => 3],
            ['name' => 'New York City', 'state_id' => 12, 'country_id' => 3],

            // Thành phố thuộc Nhật Bản
            ['name' => 'Tokyo', 'state_id' => null, 'country_id' => 4], 
            ['name' => 'Osaka City', 'state_id' => 14, 'country_id' => 4],
            ['name' => 'Sapporo', 'state_id' => 13, 'country_id' => 4],

            // Thành phố thuộc Pháp
            ['name' => 'Paris', 'state_id' => 15, 'country_id' => 5],
            ['name' => 'Marseille', 'state_id' => 16, 'country_id' => 5],

            // Thành phố thuộc Thái Lan
            ['name' => 'Bangkok', 'state_id' => null, 'country_id' => 2], 
            ['name' => 'Chiang Rai', 'state_id' => 17, 'country_id' => 2],
        ]);
    }
}
