<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Training;
use Faker\Generator as Faker;

$factory->define(Training::class, function (Faker $faker) {
    return [
        'institute' => $faker->sentence,
        'subject' => $faker->sentence,
        'details' => $faker->paragraph,
        'from' => $faker->date,
        'to' => $faker->date,
    ];
});
