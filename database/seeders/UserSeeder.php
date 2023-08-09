<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            [ 
                'name' => 'user',
                'email' => 'user@gmail.com',
                'password' => bcrypt('123'),
                'role' => 1,
                'image' => 'undraw_profile.svg',
                'remember_token' => Str::random(10)
            ], 
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => '$2y$10$0DEGeRF2u1bF8i20xVaRm.rQ.PbJU/kS4PV7ryvE0s4U1GxsYZK0S', //123
                'role' => 99,
                'image' => 'undraw_profile.svg',
                'remember_token' => Str::random(10)
            ],
        ]);
    }
}
