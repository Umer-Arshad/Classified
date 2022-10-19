<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class CouponCode extends Model
{
    protected $table='coupon_codes';
    protected $fillable=['coupon_name','type','status','condition'];
    use HasFactory,SoftDeletes;
//    public function user(){
//        return $this->belongsTo(User::class);
//    }
//    public function product(){
//        return $this->belongsTo(Product::class);
//    }
}
