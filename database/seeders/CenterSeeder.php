<?php

namespace Database\Seeders;


use Faker\Provider\Address;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CenterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('center')->insert([
            //Temporary comment: Need Faker to insert fake data will be done ...
            'name' => '',
            'address' => '',
            'phoneNo' => '',
            'website' => '',
            'email' => '',
            'location' => '',
            'city' => ''
        ]);
    }
}
