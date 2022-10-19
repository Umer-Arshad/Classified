<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class ProductAttributeValue extends Model
{
    use HasFactory,SoftDeletes;
    protected $table='product_attribute_values';
    protected $fillable=['attribute_id','product_id','value'];
    public function product(){
        return $this->belongsTo(Product::class);
    }
    public function attribute(){
        return $this->belongsTo(Attribute::class);
    }
}
