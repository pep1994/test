<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Reservation;
use Faker\Generator as Faker;

$factory->define(Reservation::class, function (Faker $faker) {
    return [
      'start_reservation' => $faker->dateTime(),
      'end_reservation' => $faker->dateTime(),
      'number_of_guests' => $faker->numberBetween($min = 1, $max = 5 ),
    ];
});
