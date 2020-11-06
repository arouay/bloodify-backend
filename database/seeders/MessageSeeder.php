<?php

namespace Database\Seeders;

use App\Message;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory;

class MessageSeeder extends Seeder
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
            'datetime' => $faker->dateTime('now'),
            'content' => $faker->text(200),
            'donor_id' => 1,
            'seeker_id' => 1
        ]);
        Message::factory(30)->create();
    }
}
