<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder

{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Order::insert([
            [
                'user_id' => 1,
                'status' => 1,
                'total_amount' =>500000,
                'confirm_time' =>'2008-11-11 13:23:44',
                'payment_method' => 0,
            ],
            [
                'user_id' => 2,
                'status' => 1,
                'total_amount' =>1000000,
                'confirmation_time' =>'2008-11-11 12:02:44',
                'payment_method' =>0,
            ],
        ]);
    }
}
