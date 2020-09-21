<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Donation;
use Faker\Generator as Faker;

$factory->define(Donation::class, function (Faker $faker) {
    return [
        'form_payment_id' => rand(1,2),
        'value' => $faker->numberBetween(100, 200)
    ];
});
