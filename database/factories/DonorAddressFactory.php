<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\DonorAddress;
use Faker\Generator as Faker;

$factory->define(DonorAddress::class, function (Faker $faker) {
    return [
        'address' => $faker->streetPrefix.' '.$faker->name,
        'number' => rand(30, 1500),
        'complement' => $faker->secondaryAddress,
        'district' => $faker->country,
        'city' => $faker->lastName,
        'state' => $faker->state,
        'country' => 'Brasil',
        'postcode' => $faker->postcode
    ];
});
