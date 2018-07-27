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
    foreach(range(1,1000) as $index){
        DB::table('users')->insert([
            'name' => $faker->name,
            'email' => $faker->companyEmail,
            'password' => bcrypt('secret'),
            'account_type' =>   $faker->randomElement(['Rider','Business','Staff']),
            'devices' =>        $faker->randomElement(['Sport','GTX','Sport-Pro','GTX-Pro']),
            'active' =>         $faker->randomElement(['Active','Terminated','Suspended']),
            'gender' =>         $faker->randomElement(['Male','Female','NA']),
            'height' =>         $faker->numberBetween(130,200),
            'weight' =>         $faker->numberBetween(100,200),
            'publicShare' =>         $faker->numberBetween(0,1),
            'metric' =>         $faker->numberBetween(0,1),
            'odmoeter' =>         $faker->numberBetween(0,20000),
            'tier' =>           $faker->randomElement(['Standard','Bronze','Silver','Gold','Platinum']),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'user_profile_avatar' => $faker->imageUrl($width, $height, 'people', true, 'Faker', true)
        ]);
        }


        foreach (range(1,3000) as $index) {
            DB::table('ridesummary')->insert([
                'rideID' => $faker->numberBetween(1,20000),
                'city' => $faker->city,
                'avgSpeed' => $faker->numberBetween(0,20),
                'maxSpeed' => $faker->numberBetween(0,20),
                'distance' => $faker->numberBetween(0,100)


            ]);
        }


//reporting
        // foreach (range(1,140000) as $index) {
        //     DB::table('reporting')->insert([
        //         'brandID' => $faker->numberBetween(1,6000),
        //         'publisherID' => $faker->numberBetween(1,600),
        //         'assetid' => $faker->numberBetween(1,12000),
        //         'sdk_id' => $faker->numberBetween(1,5),
        //         'downloads' => $faker->numberBetween(1,4),
        //         'starttime' => Carbon::now()->format('Y-m-d H:i:s'),      
        //         'endtime' => Carbon::now(+1)->format('Y-m-d H:i:s'),  
        //         'devices' => $faker->randomElement(['Mobile','PSVR','HTC-VIVE','Oculus']),
        //         'location' => $faker->countryCode,
        //         'sessionID' => $faker->uuid,
        //         'bundle_ID' => $faker->numberBetween(1000,13000),
        //         'content_type' => $faker->randomElement(['360','VR','AR','MR','VPP','ER']),
        //         'catchall' => $faker->text(180),
        //         'clicks' => $faker->numberBetween(1,1000000),
        //         'engagement' => $faker->numberBetween(1,10000),
        //         'viewDuration' => $faker->randomFloat(2, 0, 99)

        //     ]);
        // }



        // foreach (range(1,12000) as $index) {
        //     DB::table('assets')->insert([
        //         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),      
        //         'assetname' =>'models/OtQSyG9gk0xwZ6h4dBtXeGKFFVQKB0E8phEQDsrE.fbx',  
        //         'size' => '1103084',
        //         'description' => $faker->text(180),
        //         'active' => $faker->randomElement(['1','0']),
        //         'downloaded' => $faker->numberBetween(1,10000),
        //         'order_ID' => $faker->numberBetween(1,4500)
        //     ]);
        // }


    }    
}