<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Advertiser extends Model
{
    protected $table='advertisers';
    protected $fillable=['user_id','company_name','company_email','position'];
    use HasFactory,SoftDeletes;
}
