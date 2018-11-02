<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Car::class, function (Faker $faker) {
    return [
//        'vehicle_type'      => 'car',
        'make'              => $faker->randomElement(['Honda','Toyota','Ford']),
        'model'             => $faker->randomElement(['Civic','Accord','CRV','Camry','Lexus','4runner','Escape','Fusion','Focus']),
        'year'              => $faker->year,
    ];
});
