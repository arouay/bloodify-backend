<?php

namespace Database\Seeders;

use App\Center;
use App\Donation;
use App\Message;
use App\Seeker;
use App\Donor;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Center::factory()->times(5)->create();
        Donor::factory()->times(10)->create();
        Seeker::factory()->times(25)->create();
        Message::factory()->times(30)->create();
        Donation::factory()->times(1)->create();
    }
}
