<?php

namespace Database\Seeders;

use App\Models\ProductReview;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        ProductReview::create([
            'product_id'=>1,
            'user_id'=>1,
            'rating'=>'★★★★',
            'review'=>'Accounting recieves best applications to move on top'
        ]);
        ProductReview::create([
            'product_id'=>3,
            'user_id'=>1,
            'rating'=>'★★★',
            'review'=>'Accura is brand new car with comfortable journey '
        ]);
        ProductReview::create([
            'product_id'=>3,
            'user_id'=>1,
            'rating'=>'★★★★★★',
            'review'=>'Accura is my new car . I am feeling very comfort after purchasing it'
        ]);
        ProductReview::create([
            'product_id'=>4,
            'user_id'=>1,
            'rating'=>'★★★★',
            'review'=>'Sports bike is my new bike.I am feeling very comfort after purchasing it'
        ]);
        ProductReview::create([
            'product_id'=>1,
            'user_id'=>3,
            'rating'=>'★★★★',
            'review'=>'This Rooms is awesome . I want it on rent'
        ]);
        ProductReview::create([
            'product_id'=>7,
            'user_id'=>3,
            'rating'=>'★★★★',
            'review'=>'On television I can see msany movies . This is best'
        ]);
    }
}
