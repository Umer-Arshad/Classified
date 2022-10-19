<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable,SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $table='users';
    protected $fillable = [

        'firstname',
        'lastname',
        'email',
        'password',
        'gender',
        'phone_no',
        'profile_img',
        'user_role_id',
        'status',
        'address1',
        'address2',
        'city',
        'state',
        'zip',
        'country',
        'updated_by ',
        'deleted_at'
    ];
    public function role()
    {
        return $this->belongsTo(UserRole::class,'user_role_id','id');
    }
    public function forget_password(){
        return $this->hasOne(ForgetPassword::class);
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
    public function ad_reviews(){
        return $this->hasMany(AdReview::class);
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Always encrypt the password when it is updated.
     *
     * @param $value
    * @return string
    */
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }
}
