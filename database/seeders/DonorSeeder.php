<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DonorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('donor')->insert([
            //Temporary comment: Need Faker to insert fake data will be done ...
            'cin' => '',
            'firstname' => '',
            'lastname' => '',
            'bloodgroup' => '',
            'location' => '',
            'city' => ''
        ]);
    }
}
