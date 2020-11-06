<?php

namespace Database\Seeders;

use App\Center;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CenterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        DB::table('center')->insert([
            'name' => $faker->company,
            'address' => $faker->address,
            'phoneNo' => $faker->phoneNumber,
            'website' => $faker->domainName,
            'email' => $faker->companyEmail,
            'location' => $faker->streetName,
            'city' => $faker->city
        ]);
        Center::factory()->times(5)->create();
    }
}
