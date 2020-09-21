<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Donor;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

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


$factory->define(Donor::class, function (Faker $faker) {

    return [
        'donation_interval_id' => rand(1, 4), 
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'document' => $faker->cpf,
        'birth_date' => $faker->dateTimeThisCentury->format('Y-m-d') 
    ];
});
