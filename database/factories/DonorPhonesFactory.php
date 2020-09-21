<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\DonorPhone;
use Faker\Generator as Faker;

$factory->define(DonorPhone::class, function (Faker $faker) {
    return [
        'country_code' => 55,
        'code' => $faker->areaCode,
        'number' => $faker->cellphone
    ];
});
