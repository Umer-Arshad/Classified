<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class ContactUs extends Model
{
    protected $table='contact_us';
    protected $fillable=['name','phone_no','email','subject','description'];
    use HasFactory,SoftDeletes;
}
