<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class AdReview extends Model
{
    use HasFactory,SoftDeletes;
    protected $table='ad_reviews';
    protected $fillable=['review','rating','user_id','ad_id'];
    public function ad(){
        return $this->belongsTo(Ad::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
