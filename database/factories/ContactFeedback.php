<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use App\Models\ContactFeedback;
use Faker\Generator as Faker;

$factory->define(ContactFeedback::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'phone' => $faker->phoneNumber,
        'message' => $faker->sentence,
        'feedback' => $faker->numberBetween(1,5),
    ];
});
