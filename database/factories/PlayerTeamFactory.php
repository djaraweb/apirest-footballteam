<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\PlayerTeam;
use App\Player;
use App\Team;
use Faker\Generator as Faker;

$factory->define(PlayerTeam::class, function (Faker $faker) {
    return [
        'player_id'=> Player::all()->random()->id,
        'team_id'=> Team::all()->random()->id,
    ];
});
