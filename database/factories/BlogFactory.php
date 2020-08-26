<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Blog;
use Faker\Generator as Faker;

$factory->define(Blog::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(4),
        'content' => $faker->text(200),
        'created_by' => $faker->numberBetween(1, 10)
    ];
});
