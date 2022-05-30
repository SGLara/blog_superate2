<?php

namespace Database\Factories;

use Faker\Factory as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = Faker::create();
        return [
            'title' => $faker->sentence(4),
            'content' => $faker->text(5000),
            'image_url' => $faker->imageUrl(640, 480),
            'created_by' => $faker->numberBetween(1, 2),
        ];
    }
}
