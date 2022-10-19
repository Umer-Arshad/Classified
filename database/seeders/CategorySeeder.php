<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         Category::create([
             'category_name'=>'Jobs',
             'category_image'=>'sample.png'
         ]);
        Category::create([
            'category_name'=>'Cars&Autombiles',
            'category_image'=>'sample.png'
        ]);
        Category::create([
            'category_name'=>'RealEstate',
            'category_image'=>'sample.png'
        ]);
        Category::create([
            'category_name'=>'Electronics&Appliances',
            'category_image'=>'sample.png'
        ]);
        Category::create([
            'category_name'=>'Animals/Pets',
            'category_image'=>'sample.png'
        ]);
    }
}
