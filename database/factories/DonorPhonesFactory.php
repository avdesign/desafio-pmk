<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\DonorPhone;
use Faker\Generator as Faker;

$factory->define(DonorPhone::class, function (Faker $faker) {
    return [
        'number' => $faker->cellphoneNumber
    ];
});
