<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Profile;
use Faker\Generator as Faker;

$factory->define(Profile::class, function (Faker $faker) {
    $studentType = ['Current Student', 'Alumni'];
    return [
        'department' => $faker->word,
        'faculty' => $faker->word,
        'batch' => $faker->word,
        'student_id' => '16511027',
        'phone' => $faker->phoneNumber,
        'address' => $faker->address,
        'facebook' => $faker->url,
        'linkedin' => $faker->url,
        'job_type' => $faker->word,
        'job_details' => $faker->text,
        'student_type' => $faker->randomElement($studentType),
        'file' => 'profile.jpg',
        'image' => 'profile.jpg'
    ];
});
