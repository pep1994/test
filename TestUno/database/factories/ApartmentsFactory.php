<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Apartment;
use Faker\Generator as Faker;

$factory->define(Apartment::class, function (Faker $faker) {
    return [
        'title' => $faker->word(),
        'description' => $faker->text(),
        'price' => $faker->randomNumber(),
        'room_number' => $faker->numberBetween($min = 1, $max = 5 ),
        'bath_number' => $faker->numberBetween($min = 1, $max = 3 ),
        'area' => $faker->numberBetween($min = 50, $max = 150 ),
        'address' => $faker->address(),
        'img' => $faker->imageUrl($width = 200, $height = 150),
        'views' => $faker->numberBetween($min = 2, $max = 4632 ),
        'latitude' => $faker->latitude(),
        'longitude' => $faker->longitude()
      ];
    });
