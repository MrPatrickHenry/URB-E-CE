<?php

use Illuminate\Database\Seeder;

class ordersTableSeeder extends Seeder
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
               foreach (range(1,12000) as $index) {
            DB::table('orders')->insert([
                'todays_date' => Carbon::now()->format('Y-m-d H:i:s'),
                'accountID' => $faker->numberBetween(1,1000),
                'contact_title' => $faker->text(7),
                'ad_start_date' => Carbon::now()->format('Y-m-d H:i:s'),      
                'ad_end_date' => Carbon::now(+4)->format('Y-m-d H:i:s'),  
                'device' => $faker->numberBetween(1,5),
                'agency_name' => $faker->text(5),
                'contact_name' => $faker->text(5),
                'ad_descritpion' => $faker->text(180),
                'ad_format' => $faker->numberBetween(1,5),
                'ad_duration' => $faker->numberBetween(1,5),
                'os' => $faker->numberBetween(1,5),
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
        }
    }
}
