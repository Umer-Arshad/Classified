<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class UserRole extends Model
{
    use HasFactory,SoftDeletes;
    protected $table='user_roles';
    protected $fillable=['permission_id','user_role_id'];
    public function permission(){
        return $this->belongsToMany(Permission::class,'permission_role');
    }
    public function users(){
        return $this->hasMany(User::class);
    }
}
