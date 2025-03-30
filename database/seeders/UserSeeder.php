<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Duc An',
            'email' => 'an.duc.0104@gmail.com',
            'password' => bcrypt('123123123'),
            'phoneNumber' => '0828818334',
            'role' => 'admin',
            'address' => 'Hanoi, Vietnam'
        ]);
        User::create([
            'name' => 'Quang Minh',
            'email' => 'ddqminh205@gmail.com',
            'password' => bcrypt('123123123'),
            'role' => 'admin',
            'address' => 'Hanoi, Vietnam'
        ]);
        User::create([
            'name' => 'Quang Minh',
            'email' => 'customer123@gmail.com',
            'password' => bcrypt('123123123'),
            'role' => 'customer',
            'address' => 'Hanoi, Vietnam'
        ]);
    }
}
