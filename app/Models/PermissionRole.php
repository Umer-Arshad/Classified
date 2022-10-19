<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class PermissionRole extends Model
{
    use HasFactory,SoftDeletes;
    protected $table='permission_role';
    protected $fillable=['permission_id','user_role_id'];

    public function role(){
        return $this->belongsTo(UserRole::class,'user_role_id','id');
    }
    public function permission(){
        return $this->belongsTo(Permission::class);
    }
}
