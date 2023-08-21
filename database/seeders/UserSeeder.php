<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::insert([
            [ 
                'name' => 'user',
                'email' => 'user@gmail.com',
                'password' => bcrypt('123'),
                'roles' => 1,
                'remember_token' => Str::random(10)
            ], 
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('123'),
                'roles' => 99,
                'remember_token' => Str::random(10)
            ],
        ]);
    }
}
