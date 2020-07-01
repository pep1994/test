<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Apartment;
use Faker\Generator as Faker;

$factory->define(Apartment::class, function (Faker $faker) {
    return [
        'description' => $faker->sentence(),
        'room_number' => $faker->numberBetween($min = 1, $max = 5 ),
        'bath_number' => $faker->numberBetween($min = 1, $max = 3 ),
        'area' => $faker->numberBetween($min = 50, $max = 150 ),
        'address' => $faker->address(),
        'img' => $faker->word(),
        'wi_fi' => $faker->boolean($chanceOfGettingTrue = 90),
        'box_auto' => $faker->boolean($chanceOfGettingTrue = 30),
        'pool' => $faker->boolean($chanceOfGettingTrue = 25),
        'security' => $faker->boolean($chanceOfGettingTrue = 50),
        'sauna' => $faker->boolean($chanceOfGettingTrue = 10),
        'sea_view' => $faker->boolean($chanceOfGettingTrue = 50),
    ];
});
