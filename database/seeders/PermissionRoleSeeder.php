<?php

namespace Database\Seeders;

use App\Models\PermissionRole;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PermissionRole::create([
            'permission_id'=>1,
            'user_role_id'=>1
        ]);
        PermissionRole::create([
            'permission_id'=>2,
            'user_role_id'=>1
        ]);
        PermissionRole::create([
            'permission_id'=>3,
            'user_role_id'=>1
        ]);
        PermissionRole::create([
            'permission_id'=>4,
            'user_role_id'=>1
        ]);
        PermissionRole::create([
            'permission_id'=>5,
            'user_role_id'=>1
        ]);
        PermissionRole::create([
            'permission_id'=>6,
            'user_role_id'=>2
        ]);
        PermissionRole::create([
            'permission_id'=>7,
            'user_role_id'=>2
        ]);
        PermissionRole::create([
            'permission_id'=>8,
            'user_role_id'=>3
        ]);
        PermissionRole::create([
            'permission_id'=>9,
            'user_role_id'=>3
        ]);
        PermissionRole::create([
            'permission_id'=>10,
            'user_role_id'=>4
        ]);
        PermissionRole::create([
            'permission_id'=>11,
            'user_role_id'=>4
        ]);
    }
}
