<?php

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
        factory(\App\Team::class, 10)->create();
        factory(\App\Position::class, 12)->create();
        factory(\App\Player::class, 30)->create();
        factory(\App\PlayerTeam::class, 100)->create();
    }
}
