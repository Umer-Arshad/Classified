<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class AttributeCategory extends Model
{
    protected $table='attribute_categories';
    protected $fillable=['category_id','attribute_id'];
    use HasFactory,SoftDeletes;
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function attribute(){
        return $this->belongsTo(Attribute::class);
    }
}
