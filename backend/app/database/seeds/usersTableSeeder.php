<?php

use Illuminate\Database\Seeder;

class usersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $width=320;
    $height=240;

    $faker = Faker::create();
    
                 foreach(range(1,6000) as $index){
        DB::table('users')->insert([
            'name' => $faker->name,
            'email' => $faker->companyEmail,
            'password' => bcrypt('secret'),
            'account_type' =>   $faker->randomElement(['Brand','Agency','Publisher']),
            'devices' =>        $faker->randomElement(['Mobile','PSVR','HTC-VIVE','Oculus']),
            'sdks' =>           $faker->randomElement(['ARCore','ARkit','Unity','Unreal']),
            'content_type' =>   $faker->randomElement(['360 Video','VR','AR','MR']),
            'sdks' =>           $faker->randomElement(['ARCore','ARkit','Unity','Unreal']),
            'active' =>         $faker->randomElement(['Yes','Terminated','Suspended']),
            'tier' =>           $faker->randomElement(['Standard','Bronze','Silver','Gold','Platinum']),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'business_name' => $faker->company,
            'business_title' => $faker->jobTitle,
            'business_logo' => $faker->imageUrl($width, $height, 'business', true, 'Faker', true),
            'user_profile_avatar' => $faker->imageUrl($width, $height, 'people', true, 'Faker', true),
            'card_brand' => $faker->creditCardType
        ]);
        }
        }
    
}
