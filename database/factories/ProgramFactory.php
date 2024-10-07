<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Program;
use Faker\Generator as Faker;

$factory->define(Program::class, function (Faker $faker) {

    $categories = ["Activity",  "Project",  "Notice"];
    return [
        'title' => $faker->sentence,
        'details' => '<b>Hello </b>' . $faker->paragraph,
        'category' => $faker->randomElement($categories),
        'image' => $faker->randomElement(['01.jpg', '02.jpg', '03.jpg', '04.jpg', '05.jpg', '06.jpg', '07.jpg']),
    ];
});
