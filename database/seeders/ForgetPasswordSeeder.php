<?php

namespace Database\Seeders;

use App\Models\ForgetPassword;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ForgetPasswordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        ForgetPassword::create([
            'user_id'=>1,
            'verification_code'=>12345
        ]);
        ForgetPassword::create([
            'user_id'=>2,
            'verification_code'=>98769
        ]);
    }
}
