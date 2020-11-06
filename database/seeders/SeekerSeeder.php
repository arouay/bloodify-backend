<?php

namespace Database\Seeders;

use App\Seeker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory;

class SeekerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        DB::table('seeker')->insert([
            'cin' => $faker->randomLetter.$faker->randomLetter.$faker->numberBetween(111111,999999),
            'firstname' => $faker->firstName,
            'lastname' => $faker->lastName,
            'bloodgroup' => $faker->randomElement(['A+','O+','A-','O-','B+','B-']),
            'birthdate' => $faker->date('Y-m-d','now'),
            'address' => $faker->address,
            'phoneNo' => $faker->phoneNumber,
            'gender' => $faker->randomElement(['H','F'])
        ]);
        Seeker::factory(25)->create();
    }
}
