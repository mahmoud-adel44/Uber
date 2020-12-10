<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Travel;
use Faker\Generator as Faker;

$factory->define(Travel::class, function (Faker $faker) {
    return [

        'driver_id' => $faker->numberBetween(1, 50),
        'passenger' => $faker->name,
        'from' => $faker->numberBetween(1, 10),
        'to' => $faker->numberBetween(1, 10),
        'cost' => $faker->randomFloat(15, 500),
        'status' => $faker->randomElement(['pending', 'runing', 'Finished']),
    ];
});
