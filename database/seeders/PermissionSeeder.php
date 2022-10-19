<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Permission::create([
            'name'=>'Add Customer',
            'display_name'=>'Add Customer',
            'description'=>'Super Admin add customer'
        ]);
        Permission::create([
            'name'=>'Edit Customer',
            'display_name'=>'Edit Customer',
            'description'=>'Super Admin edit customer'
        ]);
        Permission::create([
            'name'=>'Delete Customer',
            'display_name'=>'Delete Customer',
            'description'=>'Super Admin delete customer'
        ]);
        Permission::create([
            'name'=>'Add Advertiser',
            'display_name'=>'Add Advertiser',
            'description'=>'Super Admin add advertiser'
        ]);
        Permission::create([
            'name'=>'Add Customer',
            'display_name'=>'Add Customer',
            'description'=>'Super Admin add customer'
        ]);
        Permission::create([
            'name'=>'Check Pages',
            'display_name'=>'Check Pages',
            'description'=>'Advertiser can  check page'
        ]);
        Permission::create([
            'name'=>'Add Ad',
            'display_name'=>'Add Ad',
            'description'=>'Advertiser can  add ad'
        ]);
        Permission::create([
            'name'=>'Check Pages',
            'display_name'=>'Check Pages',
            'description'=>'Customer can  check page'
        ]);
        Permission::create([
            'name'=>'Search Category',
            'display_name'=>'Search Category',
            'description'=>'Customer can  search category'
        ]);
        Permission::create([
            'name'=>'Check Pages',
            'display_name'=>'Check Pages',
            'description'=>'Visitor can  check pages'
        ]);
        Permission::create([
            'name'=>'Send Inquiry',
            'display_name'=>'Send Inquiry',
            'description'=>'Visitor can  send inquiry'
        ]);
    }

}
