<?php

namespace Database\Seeders;

use App\Donor;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory;

class DonorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        DB::table('donor')->insert([
            'cin' => $faker->randomLetter.$faker->randomLetter.$faker->numberBetween(111111,999999),
            'firstname' => $faker->firstName,
            'lastname' => $faker->lastName,
            'bloodgroup' => $faker->randomElement(['A+','O+','A-','O-','B+','B-']),
            'location' => $faker->streetName,
            'city' => $faker->city
        ]);
        Donor::factory(10)->create();
    }
}
