<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class ForgetPassword extends Model
{
    use HasFactory,SoftDeletes;
    protected $table='forget_passwords';
    protected $fillable=['user_id','verification_code'];
    public function users(){
        return $this->belongsTo(User::class,'user_id','id');
    }
}
