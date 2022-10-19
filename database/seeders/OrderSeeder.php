<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Order::create([

            'user_id'=>1,
            'product_id'=>1,
            'order_status'=>1,
            'order_description'=>'Order is in range',
          'quantity'=>2,
          'date'=>'2022-10-16',
          'tracking_no'=>'us102',
          'total_price'=>1500.0

        ]);
        Order::create([

            'user_id'=>1,
            'product_id'=>2,
            'order_status'=>1,
            'order_description'=>'Order is delivered',
            'quantity'=>1,
            'date'=>'2022-10-16',
            'tracking_no'=>'us103',
            'total_price'=>1000.0
        ]);
        Order::create([

            'user_id'=>2,
            'product_id'=>2,
            'order_status'=>1,
            'order_description'=>'Order is in process',
            'quantity'=>2,
            'date'=>'2022-10-10',
            'tracking_no'=>'us105',
            'total_price'=>180.0
        ]);
        Order::create([

            'user_id'=>3,
            'product_id'=>5,
            'order_status'=>1,
            'order_description'=>'Order is delivered',
            'quantity'=>5,
            'date'=>'2022-10-09',
            'tracking_no'=>'us908',
            'total_price'=>700.0
        ]);
        Order::create([

            'user_id'=>4,
            'product_id'=>4,
            'order_status'=>1,
            'order_description'=>'Order is in range',
            'quantity'=>4,
            'date'=>'2022-10-08',
            'tracking_no'=>'us560',
            'total_price'=>800.0
        ]);
    }
}
