<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ad extends Model
{
    protected $table='ads';
    protected $fillable=['title','image','description','product_id','user_id'];

    use HasFactory,SoftDeletes;
    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }
    public function product(){
        return $this->belongsTo(Product::class);
    }
    public function ad_reviews(){
        return $this->hasMany(AdReview::class);
    }
}
