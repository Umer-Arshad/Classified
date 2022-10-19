<?php

namespace Database\Seeders;

use App\Models\Ad;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Ad::create([
            'title'=>'Accounting Advertising Ideas to Bring In New Clients',
            'image'=>'sample.png',
            'description'=>'In this article, we’ll talk about the steps you should take before investing in an accounting advertising strategy. We’ll also discuss the different marketing tactics you can implement to grow your business.',
            'product_id'=>1,
            'user_id'=>2,

        ]);
        Ad::create([
            'title'=>'Accounting Advertising ',
            'image'=>'sample.png',
            'description'=>'In this article, we’ll talk about the steps you should take before investing in an accounting advertising strategy. We’ll also discuss the different marketing tactics you can implement to grow your business.',
            'product_id'=>1,
            'user_id'=>2,

        ]);
        Ad::create([
            'title'=>'Acura TV Commercials',
            'image'=>'sample.png',
            'description'=>'Sign up to track 379 nationally aired TV ad campaigns for Acura, a Super Bowl advertiser. In the past 30 days, Acura has had 1,764 airings and earned an airing rank of #616 with a spend ranking of #184 as compared to all other advertisers. Competition for Acura includes Hyundai, Jeep, Lexus, Kia, Mercedes-Benz and the other brands in the Vehicles: Auto Makers industry. You can connect with Acura on Facebook, Twitter and YouTube or by phone at 855-660-4957.',
            'product_id'=>3,
            'user_id'=>2,

        ]);
        Ad::create([
            'title'=>'Room for Rent',
            'image'=>'sample.png',
            'description'=>'Splitting the rent with another person can make it easier to keep up with your expenses. But first, you need to pick the best rental websites and advertise your room to potential tenants. Ideally, look for someone who is financially reliable and fits your lifestyle. Determine what you expect from a potential roommate and then use these tips to write a rental ad that stands out.',
            'product_id'=>6,
            'user_id'=>2,
        ]);
        Ad::create([
            'title'=>'Apple ',
            'image'=>'sample.png',
            'description'=>'People all across the nation started talking after this Apple commercial aired in 1984. The ad, directed by Ridley Scott (the same guy behind Alien and Gladiator), showed a scantily clad woman fighting a brainwashing machine, inspired by George Orwell’s classic dystopian novel “1984.” The futuristic society depicted was condemning a bunch of drones to a life based on the “Unification of Thoughts.”',
            'product_id'=>7,
            'user_id'=>2,
        ]);
        Ad::create([
            'title'=>'Krka & StoryMe',
            'image'=>'sample.png',
            'description'=>'This is "Krka & StoryMe - Animation video" by StoryMe on Vimeo, the home for high quality videos and the people who love them',
            'product_id'=>9,
            'user_id'=>2,
        ]);
    }
}
