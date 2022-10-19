<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Attribute extends Model
{
    protected $table='attributes';
    protected $fillable=['attribute_name','status'];
    use HasFactory,SoftDeletes;
    public function product(){
        return $this->belongsToMany(Product::class,'product_attribute_values');
    }
    public function category(){
        return $this->belongsToMany(Category::class,'attribute_categories');
    }
}
