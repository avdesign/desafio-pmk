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
        'payment_day' => rand(1, 31),
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'document' => $faker->cpf,
        'address' => $faker->streetPrefix.' '.$faker->name,
        'number' => rand(30, 1500),
        'complement' => $faker->secondaryAddress,
        'district' => $faker->country,
        'city' => $faker->lastName,
        'state' => $faker->state,
        'country' => 'Brasil',
        'postcode' => $faker->postcode,
        'birth_date' => $faker->dateTimeThisCentury->format('Y-m-d'),
    ];
});
