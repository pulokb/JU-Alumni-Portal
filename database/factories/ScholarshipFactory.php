<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Scholarship;
use Faker\Generator as Faker;

$factory->define(Scholarship::class, function (Faker $faker) {

    return [
        'title' => $faker->sentence,
        'details' => $faker->text,
        'status' => 1,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
