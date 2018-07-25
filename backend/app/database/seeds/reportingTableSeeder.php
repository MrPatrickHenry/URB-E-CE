<?php

use Illuminate\Database\Seeder;

class reportingTableSeeder extends Seeder
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
    
                foreach (range(1,2000) as $index) {
            DB::table('reporting')->insert([
                'brandID' => $faker->numberBetween(1,100),
                'publisherID' => $faker->numberBetween(1,1000),
                'assetid' => $faker->numberBetween(10,100),
                'sdk_id' => $faker->numberBetween(1,5),
                'downloads' => $faker->numberBetween(1,4),
                'starttime' => Carbon::now()->format('Y-m-d H:i:s'),      
                'endtime' => Carbon::now(+1)->format('Y-m-d H:i:s'),  
                'devices' => $faker->randomElement(['Mobile','PSVR','HTC-VIVE','Oculus']),
                'location' => $faker->country,
                'sessionID' => $faker->uuid,
                'bundle_ID' => $faker->numberBetween(1000,13000),
                'content_type' => $faker->text(7),
                'catchall' => $faker->text(180),
                'clicks' => $faker->numberBetween(1,10),
                'engagement' => $faker->numberBetween(1,4),
                'viewDuration' => $faker->randomFloat(2, 0, 99)

            ]);
        }
    }
}
