<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Product::create([
            'product_name'=>'Accounting',
            'product_image'=>'sample.png',
            'category_id'=>1
        ]);
        Product::create([
            'product_name'=>'Content Writing',
            'product_image'=>'sample.png',
            'category_id'=>1
        ]);
        Product::create([
            'product_name'=>'Acura',
            'product_image'=>'sample.png',
            'category_id'=>2
        ]);
        Product::create([
            'product_name'=>'Sports bike',
            'product_image'=>'sample.png',
            'category_id'=>2
        ]);
        Product::create([
            'product_name'=>'Commercial for rent',
            'product_image'=>'sample.png',
            'category_id'=>3
        ]);
        Product::create([
            'product_name'=>'Rooms for rent',
            'product_image'=>'sample.png',
            'category_id'=>3
        ]);
        Product::create([
            'product_name'=>'Televisions',
            'product_image'=>'sample.png',
            'category_id'=>4
        ]);
        Product::create([
        'product_name'=>'Gadgets',
        'product_image'=>'sample.png',
        'category_id'=>4
    ]);
        Product::create([
            'product_name'=>'Pets for Free Adoption',
            'product_image'=>'sample.png',
            'category_id'=>5
        ]);
        Product::create([
            'product_name'=>'Lost and Found Pets',
            'product_image'=>'sample.png',
            'category_id'=>5
        ]);
    }
}
