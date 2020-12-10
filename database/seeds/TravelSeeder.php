<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Generator as Faker;

class TravelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 1; $i <= 50; $i++) {
            DB::table('travel')->insert([
                'driver_id' => rand(1, 50),
                'passenger' => $faker->name,
                'from' => rand(1, 10),
                'to' => rand(1, 10),
                'cost' => random_int(30, 150),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
