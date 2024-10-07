<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Club;
use Faker\Generator as Faker;

$factory->define(Club::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'details' => $faker->paragraph(),
        'designation' => $faker->word,
        'member_since' => $faker->date,
    ];
});
