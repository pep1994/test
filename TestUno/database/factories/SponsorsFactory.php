<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Sponsor;
use Faker\Generator as Faker;

$factory->define(Sponsor::class, function (Faker $faker) {
    return [
      'start_sponsor' => $faker->dateTimeBetween($startDate = 'now', $endDate = 'now'),
    ];
});
