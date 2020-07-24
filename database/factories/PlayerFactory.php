<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Player;
use App\Position;
use Faker\Generator as Faker;

$factory->define(Player::class, function (Faker $faker) {
    return [
        'name_player' => 'Player '. $faker->name,
        'position_id'=> Position::all()->random()->id,
        'goals' => $faker->numberBetween(0,100)
    ];
});
