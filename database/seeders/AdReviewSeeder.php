<?php

namespace Database\Seeders;

use App\Models\AdReview;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        AdReview::create([

            'review'=>'Accounting is very knowledgeable field. Want to learn it with full understanding',
            'rating'=>'★★★',
            'ad_id'=>1,
            'user_id'=>1
        ]);
        AdReview::create([

            'review'=>'Accounting is my favourite subject. This ads give very best knowledge',
            'rating'=>'★★★★★',
            'ad_id'=>1,
            'user_id'=>1
        ]);
        AdReview::create([

            'review'=>'Acura is one the best car. Its very comfortable for move anywhere',
            'rating'=>'★★★★★★',
            'ad_id'=>3,
           'user_id'=>2
        ]);
        AdReview::create([

            'review'=>'I need a room for rent . This ad give me the relief so I can find it',
            'rating'=>'★★★★',
            'ad_id'=>4,
            'user_id'=>2
        ]);
        AdReview::create([

            'review'=>'Apple is best type of Television . Now a days also laptop of Apple is best',
            'rating'=>'★★★★★★',
            'ad_id'=>5,
            'user_id'=>3
        ]);
        AdReview::create([

            'review'=>'Pet is amazing . At home it is like a member',
            'rating'=>'★★★★★',
            'ad_id'=>6,
            'user_id'=>4
        ]);
    }
}
