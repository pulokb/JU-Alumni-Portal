<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\JobDetails;
use Faker\Generator as Faker;

$factory->define(JobDetails::class, function (Faker $faker) {

    $jobTitles = [
        "Marketing Coordinator: Join Our Team and Drive Brand Success",
        "Software Engineer: Exciting Opportunity to Build Innovative Solutions",
        "Sales Representative: Help Us Expand Our Customer Base",
        "Graphic Designer: Bring Creativity to Life with Stunning Visuals",
        "Customer Support Specialist: Provide Exceptional Service and Delight Customers",
        "Data Analyst: Uncover Insights and Drive Data-Driven Decisions",
        "Project Manager: Lead Cross-Functional Teams and Deliver Successful Projects",
        "Content Writer: Craft Compelling Stories and Engaging Content",
        "Financial Analyst: Analyze Numbers and Drive Business Performance",
        "Human Resources Manager: Shape the Culture and Nurture Our Talent"
    ];

    return [
        'title' => $faker->randomElement($jobTitles),
        'details' => $faker->text,
        'image' => 'job.png',
        'file' => 'job.png',
        'status' => 'Open',
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
