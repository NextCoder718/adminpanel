<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Agent::class, function (Faker $faker) {
    return [
        'name' => $faker->company,
        'email' => $faker->companyEmail
    ];
});
