<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Permission extends Model
{
    use HasFactory,SoftDeletes;

    protected $table='permissions';
    protected $fillable=['name','display_name','description'];
    public function role(){
        return $this->belongsToMany(UserRole::class,'permission_role');
    }
}
