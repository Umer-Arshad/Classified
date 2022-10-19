<?php

namespace Database\Seeders;

use App\Models\Attribute;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AttributeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Attribute::create([
            'attribute_name'=>'Company Name',
            'status'=>1

        ]);
        Attribute::create([
            'attribute_name'=>'Employement Type',
            'status'=>1
        ]);
        Attribute::create([
            'attribute_name'=>'Monthly Salary',
            'status'=>1
        ]);
        Attribute::create([
            'attribute_name'=>'Date',
            'status'=>1
        ]);
        Attribute::create([
            'attribute_name'=>'Time',
            'status'=>1
        ]);
        Attribute::create([
            'attribute_name'=>'Contact',
            'status'=>1
        ]);
        Attribute::create([
            'attribute_name'=>'Email',
            'status'=>1
        ]);
        Attribute::create([
            'attribute_name'=>'Location',
            'status'=>1
        ]);
        Attribute::create([
            'attribute_name'=>'History Check',
            'status'=>1
        ]);
        Attribute::create([
            'attribute_name'=>'Kilometers',
            'status'=>1
        ]);
        Attribute::create([
            'attribute_name'=>'Warranty',
            'status'=>1
        ]);
        Attribute::create([
            'attribute_name'=>'Color',
            'status'=>1
        ]);
        Attribute::create([
            'attribute_name'=>'Year',
            'status'=>1
        ]);
        Attribute::create([
            'attribute_name'=>'Beds',
            'status'=>1
        ]);
        Attribute::create([
            'attribute_name'=>'Baths',
            'status'=>1
        ]);
        Attribute::create([
            'attribute_name'=>'SqFt',
            'status'=>1
        ]);
        Attribute::create([
            'attribute_name'=>'Age',
            'status'=>1
        ]);
        Attribute::create([
            'attribute_name'=>'Model',
            'status'=>1
        ]);
        Attribute::create([
            'attribute_name'=>'Condition',
            'status'=>1
        ]);
        Attribute::create([
            'attribute_name'=>'Damages',
            'status'=>1
        ]);
        Attribute::create([
            'attribute_name'=>'Pet Type',
            'status'=>1
        ]);
        Attribute::create([
            'attribute_name'=>'Breed',
            'status'=>1
        ]);
        Attribute::create([
            'attribute_name'=>'Price',
            'status'=>1
        ]);






    }
}
