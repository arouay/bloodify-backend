<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DonationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('message')->insert([
            //Temporary comment: Need Faker to insert fake data will be done ...
            'date' => '',
            'Quanity' => '',
            'center_id' =>1,
            'donor_id' => 1,
            'seeker_id' => null
        ]);
    }
}