<?php

namespace Database\Seeders;

use App\Models\ProductAttributeValue;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AttributeValueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        ProductAttributeValue::create([
            'attribute_id'=>1,
            'value'=>'Built-in-Soft',
            'product_id'=>1
        ]);
        ProductAttributeValue::create([
            'attribute_id'=>2,
            'value'=>'Full-Time',
            'product_id'=>1
        ]);
        ProductAttributeValue::create([
            'attribute_id'=>3,
            'value'=>'30000',
            'product_id'=>1
        ]);
        ProductAttributeValue::create([
            'attribute_id'=>4,
            'value'=>'2022-10-08',
            'product_id'=>1
        ]);
        ProductAttributeValue::create([
            'attribute_id'=>5,
            'value'=>'12:20:42',
            'product_id'=>1
        ]);
        ProductAttributeValue::create([
            'attribute_id'=>6,
            'value'=>'2 Years',
            'product_id'=>1
        ]);
        ProductAttributeValue::create([
            'attribute_id'=>7,
            'value'=>'user@test.com',
            'product_id'=>1
        ]);
        ProductAttributeValue::create([
            'attribute_id'=>8,
            'value'=>'Lahore',
            'product_id'=>1
        ]);
        ProductAttributeValue::create([
            'attribute_id'=>9,
            'value'=>'Audi is best car. Its very comfortable for travelling',
            'product_id'=>3
        ]);
        ProductAttributeValue::create([
            'attribute_id'=>10,
            'value'=>'22km',
            'product_id'=>3
        ]);
        ProductAttributeValue::create([
            'attribute_id'=>11,
            'value'=>'6 month',
            'product_id'=>3
        ]);
        ProductAttributeValue::create([
            'attribute_id'=>12,
            'value'=>'Blue',
            'product_id'=>3
        ]);
        ProductAttributeValue::create([
            'attribute_id'=>13,
            'value'=>'2022',
            'product_id'=>3
        ]);
        ProductAttributeValue::create([
            'attribute_id'=>14,
            'value'=>'6 Beds',
            'product_id'=>5
        ]);
        ProductAttributeValue::create([
            'attribute_id'=>15,
            'value'=>'2 Baths',
            'product_id'=>5
        ]);
        ProductAttributeValue::create([
            'attribute_id'=>16,
            'value'=>'147 SqFt',
            'product_id'=>5
        ]);
        ProductAttributeValue::create([
            'attribute_id'=>17,
            'value'=>'2 Years',
            'product_id'=>7
        ]);
        ProductAttributeValue::create([
            'attribute_id'=>18,
            'value'=>'Toshiba',
            'product_id'=>7
        ]);
        ProductAttributeValue::create([
            'attribute_id'=>19,
            'value'=>'Good',
            'product_id'=>7
        ]);
        ProductAttributeValue::create([
            'attribute_id'=>20,
            'value'=>'No Damage',
            'product_id'=>7
        ]);
        ProductAttributeValue::create([
            'attribute_id'=>21,
            'value'=>'Cat',
            'product_id'=>9
        ]);
        ProductAttributeValue::create([
            'attribute_id'=>22,
            'value'=>'Yes',
            'product_id'=>9
        ]);
        ProductAttributeValue::create([
            'attribute_id'=>23,
            'value'=>'40000',
            'product_id'=>9
        ]);
    }
}
