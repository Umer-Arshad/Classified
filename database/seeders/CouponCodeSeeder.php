<?php

namespace Database\Seeders;

use App\Models\Code;
use App\Models\CouponCode;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CouponCodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
       CouponCode::create([
            'coupon_name'=>'SPOOKY15',
            'type'=>1,
            'status'=>1,
            'condition'=>1,
       ]);
        CouponCode::create([

            'coupon_name'=>'TAKEITALL',
            'type'=>2,
            'status'=>1,
            'condition'=>2,
        ]);
        CouponCode::create([
            'coupon_name'=>'WELCOME10',
            'type'=>1,
            'status'=>1,
            'condition'=>3,
        ]);
        CouponCode::create([
            'coupon_name'=>'ALLABOARD',
            'type'=>2,
            'status'=>1,
            'condition'=>4,
        ]);
        CouponCode::create([
            'coupon_name'=>'SHIPITFREE',
            'type'=>1,
            'status'=>1,
            'condition'=>5,
        ]);

    }
}
