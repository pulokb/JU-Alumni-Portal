<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Gallery;
use Faker\Generator as Faker;

$factory->define(Gallery::class, function (Faker $faker) {

    $categories = ["Slider", "Gallery"];
    return [
        'category' => $faker->randomElement($categories),
        'image' => $faker->randomElement(['01.jpg', '02.jpg', '03.jpg', '04.jpg', '05.jpg', '06.jpg', '07.jpg']),
    ];
});
