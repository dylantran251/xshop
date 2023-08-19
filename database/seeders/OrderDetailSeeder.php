<?php

namespace Database\Seeders;

use App\Models\OrderDetails;
use Illuminate\Database\Seeder;

class OrderDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OrderDetails::insert([
            'order_id' => 1,
            'product_id' => 12,
            'quantity' => 2,
            'sub_total' => 1234.56,
        ]);
    }
}
