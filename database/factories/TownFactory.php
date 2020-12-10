<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Town;
use Faker\Generator as Faker;

$factory->define(Town::class, function (Faker $faker) {
    return [
        'name' => $faker->state,
        'maridians' => rand(5000, 10000),
        'latitudes' =>   rand(5000, 10000),
    ];
});
