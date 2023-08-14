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
                // 'note' => 'EM không thích ăn chân gà cay cay'
            ],
            // [
            //     'user_id' => 2,
            //     'status' => 1,
            //     'total_amount' =>'1.000.000',
            //     'confirmation_time' =>'14/7/2023, 12:00PM',
            //     'payment_method' =>' Qua ATM',
            //     'note' => 'Nhớ giao đúng giúp em'
            // ],
            // [
            //     'user_id' => 3,
            //     'status' => 1,
            //     'total_amount' =>'200.000',
            //     'confirmation_time' =>'08/7/2023, 13:00PM',
            //     'payment_method' =>' Qua ATM',
            //     'note' => 'Nhớ giao hàng đúng giờ giúp em'
            // ],
            // [
            //     'user_id' => 4,
            //     'status' => 1,
            //     'total_amount' =>'200.000',
            //     'confirmation_time' =>'01/7/2023, 13:00PM',
            //     'payment_method' =>'Tiền mặt',
            //     'note' => 'Đồ dễ vỡ'
            // ],
        ]);
    }
}
