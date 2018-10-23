<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Producer::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'status' => $faker->boolean
    ];
});
