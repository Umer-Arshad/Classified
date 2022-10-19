<?php

namespace Database\Seeders;

use App\Models\UserRole;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        UserRole::create([
            'name'=>'Super Admin',
            'display_name'=>'Super Admin',
            'status'=>1
        ]);
        UserRole::create([
            'name'=>'Advertiser',
            'display_name'=>'Advertiser',
            'status'=>1
        ]);
        UserRole::create([
            'name'=>'Customer',
            'display_name'=>'Customer',
            'status'=>1
        ]);
        UserRole::create([
            'name'=>'Visitor',
            'display_name'=>'Visitor',
            'status'=>1
        ]);
    }
}
