<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {

     static $nameIntervals = -1;
     static $emailIntervals = -1;
     $name = ["Sk Abir","Sifat Istiak","Touhed Ratul"];
     $email = ["sk@skoder.co","istiak@skoder.co","ratul@skoder.co"];
    return  [
            'name' => $name[++$nameIntervals],
            // 'details' => $faker->paragraph,
            'email' => $email[++$emailIntervals],
            // 'phone' => $faker->numberBetween(1000000000, 2000000000),
            // 'address' => $faker->address,
            // 'image' => "15791434845e1fd13c9cf18.jpg",
            'status' => 1,
            'email_verified_at' => now(),
            'password' => bcrypt('12345678'), // 12345678
            'remember_token' => Str::random(10),
        ];

    // return [
    //     'name' => $faker->name,
    //     // 'about' => $faker->paragraph,
    //     'email' => $faker->unique()->safeEmail,
    //     // 'phone' => $faker->phoneNumber,
    //     // 'address' => $faker->address,
    //     // 'image' => "15956534045f1bbd1ca2f7b.jpg",
    //     'email_verified_at' => now(),
    //     'password' => bcrypt('12345678'), // 12345678
    //     'remember_token' => Str::random(10),
    // ];
});
