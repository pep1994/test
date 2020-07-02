<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;


$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name(),
        // 'lastName' => $faker->lastName(),
        // 'dateOfBirth' => $faker->date(),
        // 'address' => $faker->address(),
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => $faker->password(),
        'remember_token' => Str::random(10),
    ];
});
