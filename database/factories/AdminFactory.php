<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Models\Admin::class, function (Faker $faker) {
    static $nameIntervals = -1;
    static $emailIntervals = -1;
    $name = ["Super Admin", "Secret Admin"];
    $email = ["admin@admin.com", "admin@admin.secret"];
    return  [
        'name' => $name[++$nameIntervals],
        'email' => $email[++$emailIntervals],
        'super_admin' => 1,
        'password' => bcrypt(456456456),
        'remember_token' => Str::random(10),
    ];
});
