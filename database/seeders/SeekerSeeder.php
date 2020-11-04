<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SeekerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('seeker')->insert([
            //Temporary comment: Need Faker to insert fake data will be done ...
            'cin' => '',
            'firstname' => '',
            'lastname' => '',
            'bloodgroup' => '',
            'birthdate' => '',
            'address' => '',
            'phoneNo' => '',
            'gender' => ''
        ]);
    }
}
