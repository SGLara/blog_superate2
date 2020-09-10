<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Blog;
use Faker\Generator as Faker;

$factory->define(Blog::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(4),
        'content' => $faker->text(5000),
        'image_url'=> '164610_1599599611.jpg',
        'created_by' => $faker->numberBetween(1,2),
    ];
});
