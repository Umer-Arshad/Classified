<?php

namespace Database\Seeders;

use App\Models\Advertiser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdvertiserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Advertiser::create([
            'user_id'=>2,
            'company_name'=>'SEO Sharks Official',
            'company_email'=>'seosharks@gmail.com',
            'position'=>'Digital Marketer'
        ]);
    }
}
