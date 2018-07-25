<?php
use Carbon\Carbon;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
/**
* Run the database seeds.
*
* @return void
*/
public function run()
{


    // $this->call([
    //     ordersTableSeeder::class,
    //     reportingTableSeeder::class,
    //     userTableSeeder::class,
    //     asstsTableSeeder::class,

    // ]);

    $width=320;
    $height=240;

    $faker = Faker::create();
//usercreation
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


        foreach (range(1,12000) as $index) {
            DB::table('orders')->insert([
                'todays_date' => Carbon::now()->format('Y-m-d H:i:s'),
                'accountID' => $faker->numberBetween(1,1000),
                'contact_title' => $faker->text(7),
                'ad_start_date' => Carbon::now()->format('Y-m-d H:i:s'),      
                'ad_end_date' => Carbon::now(+4)->format('Y-m-d H:i:s'),  
                'device' => $faker->randomElement(['Mobile','PSVR','HTC-VIVE','Oculus']),
                'agency_name' => $faker->company,
                'contact_name' => $faker->name,
                'ad_descritpion' => $faker->text(180),
                'ad_format' => $faker->randomElement(['360','VR','AR','MR','VPP','ER']),
                'ad_duration' => $faker->numberBetween(1,5),
                'os' => $faker->randomElement(['iOS','Android','PS','Windows','Mac']),
                'interest' => $faker->numberBetween(1,5),
                'ad_offer_payout' => $faker->randomFloat(2, 0, 99),
                'total_budget' => $faker->randomFloat(2, 0, 100000),
                'bid_type' => $faker->randomElement(['CPC','CPM','CPI','CPV','CPA','VPP']),
                'whitelist'=>$faker->text(5),
                'blacklist'=>$faker->text(5),
                'country'=>$faker->country,
                'pegi'=>$faker->numberBetween(1,4),
                'payment'=>$faker->numberBetween(1,5),
                'signature_digital'=>$faker->name(1,5),
                'signature_digital'=> Carbon::now(+1)->format('Y-m-d H:i:s'),
                'payment_t_and_c'=>$faker->text(180)

            ]);
        }


//reporting
        foreach (range(1,140000) as $index) {
            DB::table('reporting')->insert([
                'brandID' => $faker->numberBetween(1,6000),
                'publisherID' => $faker->numberBetween(1,600),
                'assetid' => $faker->numberBetween(1,12000),
                'sdk_id' => $faker->numberBetween(1,5),
                'downloads' => $faker->numberBetween(1,4),
                'starttime' => Carbon::now()->format('Y-m-d H:i:s'),      
                'endtime' => Carbon::now(+1)->format('Y-m-d H:i:s'),  
                'devices' => $faker->randomElement(['Mobile','PSVR','HTC-VIVE','Oculus']),
                'location' => $faker->countryCode,
                'sessionID' => $faker->uuid,
                'bundle_ID' => $faker->numberBetween(1000,13000),
                'content_type' => $faker->randomElement(['360','VR','AR','MR','VPP','ER']),
                'catchall' => $faker->text(180),
                'clicks' => $faker->numberBetween(1,1000000),
                'engagement' => $faker->numberBetween(1,10000),
                'viewDuration' => $faker->randomFloat(2, 0, 99)

            ]);
        }



        foreach (range(1,12000) as $index) {
            DB::table('assets')->insert([
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),      
                'assetname' =>'models/OtQSyG9gk0xwZ6h4dBtXeGKFFVQKB0E8phEQDsrE.fbx',  
                'size' => '1103084',
                'description' => $faker->text(180),
                'active' => $faker->randomElement(['1','0']),
                'downloaded' => $faker->numberBetween(1,10000),
                'order_ID' => $faker->numberBetween(1,4500)
            ]);
        }


    }    
}