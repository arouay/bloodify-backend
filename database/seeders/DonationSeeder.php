<?php

namespace Database\Seeders;

use App\Donation;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DonationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        DB::table('message')->insert([
            'date' => $faker->date('Y-m-d','now'),
            'Quanity' => $faker->numberBetween(50,100),
            'center_id' =>1,
            'donor_id' => 1,
            'seeker_id' => null
        ]);
        Donation::factory(1)->create();
    }
}
