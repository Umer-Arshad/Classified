<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Product extends Model
{
    use HasFactory,SoftDeletes;
    protected $table='products';
    protected $fillable=['product_name','product_image','category_id'];
    public function categories(){
        return $this->belongsTo(Category::class,'category_id','id');
    }
    public function attribute(){
        return $this->belongsToMany(Attribute::class,'product_attribute_values');
    }
    public function ads(){
        return $this->hasMany(Ad::class);
    }
//    public function discounts(){
//        return $this->hasMany(Code::class);
//    }
    public function product_reviews(){
        return $this->hasMany(ProductReview::class);
    }
    public function order(){
        return $this->hasMany(Order::class);
    }
}
