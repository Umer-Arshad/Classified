<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'firstname'=>'Super',
            'lastname'=>'Admin',
            'email'=>'superadmin@gmail.com',
            'password' => Hash::make('12345678'),//(12345678)
            'gender'=>'Male',
            'phone_no'=>'03009878654',
            'profile_image'=>'sample.png',
            'user_role_id'=>1,
            'status'=>1,
            'address1'=>'Block 32 Street 1 Lahore',
            'address2'=>'Block 2 Street 1 Lahore',
           'city'=>'Lahore',
           'state'=>'punjab',
           'zip'=>'90876',
           'country'=>'Pakistan',
           'updated_by'=>1
        ]);
        User::create([
            'firstname'=>'Advertiser',
            'lastname'=>'Ali',
            'email'=>'advertiser@gmail.com',
            'password' => Hash::make('12345678'),
            'gender'=>'Male',
            'phone_no'=>'03009878609',
            'profile_image'=>'sample.png',
            'user_role_id'=>2,
            'status'=>1,
            'address1'=>'Block 9 Street 7 karachi',
            'address2'=>'Block 7 Street 4 Lahore',
            'city'=>'Karachi',
            'state'=>'Sindh',
            'zip'=>'56098',
            'country'=>'Pakistan',
            'updated_by'=>2
        ]);
        User::create([
            'firstname'=>'Customer',
            'lastname'=>'Ahmad',
            'email'=>'customer@gmail.com',
            'password' => Hash::make('12345678'),
            'gender'=>'Male',
            'phone_no'=>'03009877654',
            'profile_image'=>'sample.png',
            'user_role_id'=>3,
            'status'=>1,
            'address1'=>'Block W Street 9 Multan',
            'address2'=>'Block J Street 5 Lahore',
            'city'=>'Multan',
            'state'=>'Punjab',
            'zip'=>'90876',
            'country'=>'Pakistan',
            'updated_by'=>1

        ]);
        User::create([
            'firstname'=>'Visitor',
            'lastname'=>'Afroz',
            'email'=>'visitor@gmail.com',
            'password' => Hash::make('12345678'),
            'gender'=>'Male',
            'phone_no'=>'03009873423',
            'profile_image'=>'sample.png',
            'user_role_id'=>4,
            'status'=>1,
            'address1'=>'Block 6 Street 3 Multan',
            'address2'=>'Block R Street 9 Lahore',
            'city'=>'Multan',
            'state'=>'Punjab',
            'zip'=>'90876',
            'country'=>'Pakistan',
            'updated_by'=>2
        ]);
        User::create([
            'firstname'=>'Visitor',
            'lastname'=>'Afridi',
            'email'=>'visitor2@gmail.com',
            'password' => Hash::make('12345678'),
            'gender'=>'Male',
            'phone_no'=>'03009873456',
            'profile_image'=>'sample.png',
            'user_role_id'=>4,
            'status'=>1,
            'address1'=>'Block 3 Street 3 Multan',
            'address2'=>'Block Q Street 9 Lahore',
            'city'=>'Multan',
            'state'=>'Punjab',
            'zip'=>'90876',
            'country'=>'Pakistan',
            'updated_by'=>2
        ]);
        User::create([
            'firstname'=>'Advertiser',
            'lastname'=>'Amjad',
            'email'=>'advertiser2@gmail.com',
            'password' => Hash::make('12345678'),
            'gender'=>'Male',
            'phone_no'=>'03009878608',
            'profile_image'=>'sample.png',
            'user_role_id'=>2,
            'status'=>1,
            'address1'=>'Block 9 Street 7 karachi',
            'address2'=>'Block 7 Street 4 Lahore',
            'city'=>'Karachi',
            'state'=>'Sindh',
            'zip'=>'56098',
            'country'=>'Pakistan',
            'updated_by'=>2
        ]);
        User::create([
            'firstname'=>'Advertiser',
            'lastname'=>'Amjad',
            'email'=>'advertiser2@gmail.com',
            'password' => Hash::make('12345678'),
            'gender'=>'Male',
            'phone_no'=>'03009878608',
            'profile_image'=>'sample.png',
            'user_role_id'=>2,
            'status'=>1,
            'address1'=>'Block 9 Street 7 karachi',
            'address2'=>'Block 7 Street 4 Lahore',
            'city'=>'Karachi',
            'state'=>'Sindh',
            'zip'=>'56098',
            'country'=>'Pakistan',
            'updated_by'=>2
        ]);
        User::create([
            'firstname'=>'Advertiser',
            'lastname'=>'Amjad',
            'email'=>'advertiser2@gmail.com',
            'password' => Hash::make('12345678'),
            'gender'=>'Male',
            'phone_no'=>'03009878608',
            'profile_image'=>'sample.png',
            'user_role_id'=>2,
            'status'=>1,
            'address1'=>'Block 9 Street 7 karachi',
            'address2'=>'Block 7 Street 4 Lahore',
            'city'=>'Karachi',
            'state'=>'Sindh',
            'zip'=>'56098',
            'country'=>'Pakistan',
            'updated_by'=>2
        ]);
        User::create([
            'firstname'=>'Advertiser',
            'lastname'=>'Amjad',
            'email'=>'advertiser2@gmail.com',
            'password' => Hash::make('12345678'),
            'gender'=>'Male',
            'phone_no'=>'03009878608',
            'profile_image'=>'sample.png',
            'user_role_id'=>2,
            'status'=>1,
            'address1'=>'Block 9 Street 7 karachi',
            'address2'=>'Block 7 Street 4 Lahore',
            'city'=>'Karachi',
            'state'=>'Sindh',
            'zip'=>'56098',
            'country'=>'Pakistan',
            'updated_by'=>2
        ]);
        User::create([
            'firstname'=>'Advertiser',
            'lastname'=>'Amjad',
            'email'=>'advertiser2@gmail.com',
            'password' => Hash::make('12345678'),
            'gender'=>'Male',
            'phone_no'=>'03009878608',
            'profile_image'=>'sample.png',
            'user_role_id'=>2,
            'status'=>1,
            'address1'=>'Block 9 Street 7 karachi',
            'address2'=>'Block 7 Street 4 Lahore',
            'city'=>'Karachi',
            'state'=>'Sindh',
            'zip'=>'56098',
            'country'=>'Pakistan',
            'updated_by'=>2
        ]);
        User::create([
            'firstname'=>'Advertiser',
            'lastname'=>'Amjad',
            'email'=>'advertiser2@gmail.com',
            'password' => Hash::make('12345678'),
            'gender'=>'Male',
            'phone_no'=>'03009878608',
            'profile_image'=>'sample.png',
            'user_role_id'=>2,
            'status'=>1,
            'address1'=>'Block 9 Street 7 karachi',
            'address2'=>'Block 7 Street 4 Lahore',
            'city'=>'Karachi',
            'state'=>'Sindh',
            'zip'=>'56098',
            'country'=>'Pakistan',
            'updated_by'=>2
        ]);
        User::create([
            'firstname'=>'Advertiser',
            'lastname'=>'Amjad',
            'email'=>'advertiser2@gmail.com',
            'password' => Hash::make('12345678'),
            'gender'=>'Male',
            'phone_no'=>'03009878608',
            'profile_image'=>'sample.png',
            'user_role_id'=>2,
            'status'=>1,
            'address1'=>'Block 9 Street 7 karachi',
            'address2'=>'Block 7 Street 4 Lahore',
            'city'=>'Karachi',
            'state'=>'Sindh',
            'zip'=>'56098',
            'country'=>'Pakistan',
            'updated_by'=>2
        ]);
        User::create([
            'firstname'=>'Advertiser',
            'lastname'=>'Amjad',
            'email'=>'advertiser2@gmail.com',
            'password' => Hash::make('12345678'),
            'gender'=>'Male',
            'phone_no'=>'03009878608',
            'profile_image'=>'sample.png',
            'user_role_id'=>2,
            'status'=>1,
            'address1'=>'Block 9 Street 7 karachi',
            'address2'=>'Block 7 Street 4 Lahore',
            'city'=>'Karachi',
            'state'=>'Sindh',
            'zip'=>'56098',
            'country'=>'Pakistan',
            'updated_by'=>2
        ]);
        User::create([
            'firstname'=>'Advertiser',
            'lastname'=>'Amjad',
            'email'=>'advertiser2@gmail.com',
            'password' => Hash::make('12345678'),
            'gender'=>'Male',
            'phone_no'=>'03009878608',
            'profile_image'=>'sample.png',
            'user_role_id'=>2,
            'status'=>1,
            'address1'=>'Block 9 Street 7 karachi',
            'address2'=>'Block 7 Street 4 Lahore',
            'city'=>'Karachi',
            'state'=>'Sindh',
            'zip'=>'56098',
            'country'=>'Pakistan',
            'updated_by'=>2
        ]);
        User::create([
            'firstname'=>'Advertiser',
            'lastname'=>'Amjad',
            'email'=>'advertiser2@gmail.com',
            'password' => Hash::make('12345678'),
            'gender'=>'Male',
            'phone_no'=>'03009878608',
            'profile_image'=>'sample.png',
            'user_role_id'=>2,
            'status'=>1,
            'address1'=>'Block 9 Street 7 karachi',
            'address2'=>'Block 7 Street 4 Lahore',
            'city'=>'Karachi',
            'state'=>'Sindh',
            'zip'=>'56098',
            'country'=>'Pakistan',
            'updated_by'=>2
        ]);
        User::create([
            'firstname'=>'Advertiser',
            'lastname'=>'Amjad',
            'email'=>'advertiser2@gmail.com',
            'password' => Hash::make('12345678'),
            'gender'=>'Male',
            'phone_no'=>'03009878608',
            'profile_image'=>'sample.png',
            'user_role_id'=>2,
            'status'=>1,
            'address1'=>'Block 9 Street 7 karachi',
            'address2'=>'Block 7 Street 4 Lahore',
            'city'=>'Karachi',
            'state'=>'Sindh',
            'zip'=>'56098',
            'country'=>'Pakistan',
            'updated_by'=>2
        ]);

    }
}
