<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Blog;
use Faker\Generator as Faker;

$factory->define(Blog::class, function (Faker $faker) {
    $blogTitles = [
        "Celebrating Success: Alumni Spotlight Stories that Inspire",
        "From Campus to Career: Alumni Journeys and Lessons Learned",
        "Building Connections: How Alumni Networks Shape Professional Growth",
        "Navigating the Post-Graduation World: Insights from Successful Alumni",
        "Unforgettable Memories: Alumni Tales from the University Years",
        "Life Beyond Graduation: Alumni Perspectives on Work-Life Balance",
        "Alumni Giving Back: How Our Graduates Make a Difference",
        "Mastering the Transition: Alumni Advice for College Freshmen",
        "Alumni Reunions: Celebrating the Bond that Endures",
        "Alumni Entrepreneurs: Success Stories of Graduates Turned Business Owners"
    ];

    return [
        'title' => $faker->randomElement($blogTitles),
        'details' => $faker->paragraph,
        'image' => $faker->randomElement(['01.jpg', '02.jpg', '03.jpg', '04.jpg', '05.jpg', '06.jpg', '07.jpg']),
        'tags' => $faker->word,
        'posted_by' => $faker->name,
    ];
});
