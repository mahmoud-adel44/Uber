<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Driver;
use Faker\Generator as Faker;

$factory->define(Driver::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'number' => $faker->phoneNumber,
        'car' => $faker->randomElement(['Maruti Suzuki MG Motor', 'Hyundai Honda', 'Toyota Mahindra', 'Tata Kia', 'Jeep Volkswagen', 'BMW Audi', 'Mercedes Benz Skoda']),
        'is_busy' => $faker->randomElement([0, 1]),
    ];
});
