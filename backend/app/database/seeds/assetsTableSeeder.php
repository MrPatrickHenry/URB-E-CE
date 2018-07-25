<?php

use Illuminate\Database\Seeder;

class assetsTableSeeder extends Seeder
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
    
                   foreach (range(1,8000) as $index) {
            DB::table('assets')->insert([
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),      
                'assetname' =>'models/OtQSyG9gk0xwZ6h4dBtXeGKFFVQKB0E8phEQDsrE.fbx',  
                'size' => '1103084',
                'description' => $faker->text(180),
                'active' => $faker->randomElement(['1','0']),
                'downloaded' => '1',
                'order_ID' => $faker->numberBetween(3000,4500)

            ]);
        }
    }
}
