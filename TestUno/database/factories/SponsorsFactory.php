<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Sponsor;
use Faker\Generator as Faker;

$factory->define(Sponsor::class, function (Faker $faker) {
    return [
      'timer' => $faker->dateTimeInInterval($startDate = 'now', $interval = '+ 5 days', $timezone = null),
      'cost' => $faker->numberBetween($min = 2 , $max = 10),
      'type' => $faker->randomElement($array = array ('basic','premium','pro')) ,
    ];
});
