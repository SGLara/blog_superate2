<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\SuperateCenter;
use Faker\Generator as Faker;

$factory->define(SuperateCenter::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(6),
        'year' => $faker->year
    ];
});
