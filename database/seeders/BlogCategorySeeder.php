<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\BlogCategory;

class BlogCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BlogCategory::insert([
            [
                'image' => '',	
                'name' => 'Đời sống',	
                'status' => 1,	
                'description' => 'Abc'
            ],
            [
                'image' => '',	
                'name' => 'Sức khỏe',	
                'status' => 1,	
                'description' => 'Xyz'
            ]
        ]);
    }
}
