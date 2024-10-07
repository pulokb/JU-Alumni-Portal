<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Seminar;
use Faker\Generator as Faker;

$factory->define(Seminar::class, function (Faker $faker) {



    $eventTitles = [
        "Alumni Homecoming: Celebrating Memories and Connections",
        "Career Networking Night: Connecting Alumni for Professional Growth",
        "Alumni Panel Discussion: Insights and Success Stories",
        "Alumni Mentorship Program Launch: Igniting Success Through Guidance",
        "Alumni Sports Tournament: Friendly Competition and Team Spirit",
        "Alumni Art Exhibition: Showcasing Creative Talents",
        "Alumni Entrepreneurship Summit: Inspiring Innovation and Startups",
        "Alumni Family Fun Day: Creating Lasting Memories for All Generations",
        "Alumni Charity Gala: Giving Back to the Community Together",
        "Alumni Webinar Series: Lifelong Learning and Expert Insights"
    ];


    return [
        'title' => $faker->randomElement($eventTitles),
        'details' => $faker->paragraph,
        'seminar_date' => $faker->date,
        'seminar_time' => $faker->time,
        'place' => $faker->word,
        'image' => $faker->randomElement(['01.jpg', '02.jpg', '03.jpg', '04.jpg', '05.jpg', '06.jpg', '07.jpg']),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
