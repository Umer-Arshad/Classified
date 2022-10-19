<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//        DB::table('users')->insert([
//            'username' => 'admin',
//            'firstname' => 'Admin',
//            'lastname' => 'Admin',
//            'email' => 'admin@argon.com',
//            'password' => bcrypt('secret')
//        ]);

        $this->call(UserRoleSeeder::class);
        $this->call(PermissionSeeder::class);
        $this->call(PermissionRoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(ForgetPasswordSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(AttributeSeeder::class);

        $this->call(AdSeeder::class);
        $this->call(AdReviewSeeder::class);
        $this->call(CouponCodeSeeder::class);
        $this->call(ProductReviewSeeder::class);
        $this->call(OrderSeeder::class);
        $this->call(AttributeCategorySeeder::class);
        $this->call(AttributeValueSeeder::class);
        $this->call(AdvertiserSeeder::class);


    }
}
