<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('states')->insert([
            // Việt Nam - Chỉ các tỉnh (Không có thành phố trực thuộc TW)
            ['name' => 'Nam Định', 'country_id' => 1],
            ['name' => 'Đồng Nai', 'country_id' => 1],
            ['name' => 'Khánh Hòa', 'country_id' => 1],
            ['name' => 'Lâm Đồng', 'country_id' => 1],
            ['name' => 'Nghệ An', 'country_id' => 1],
            ['name' => 'Thanh Hóa', 'country_id' => 1],
            ['name' => 'Bình Định', 'country_id' => 1],
            ['name' => 'Bình Thuận', 'country_id' => 1],
            ['name' => 'Đắk Lắk', 'country_id' => 1],

            // United States - Chỉ có bang
            ['name' => 'California', 'country_id' => 3],
            ['name' => 'Texas', 'country_id' => 3],
            ['name' => 'New York', 'country_id' => 3],
            ['name' => 'Florida', 'country_id' => 3],

            // Japan - Chỉ có tỉnh/bang
            ['name' => 'Hokkaido', 'country_id' => 4],
            ['name' => 'Osaka Prefecture', 'country_id' => 4],

            // France - Chỉ có vùng
            ['name' => 'Île-de-France', 'country_id' => 5],
            ['name' => 'Provence-Alpes-Côte d\'Azur', 'country_id' => 5],

            // Thailand - Chỉ có tỉnh
            ['name' => 'Chiang Mai', 'country_id' => 2],
        ]);
    }
}
