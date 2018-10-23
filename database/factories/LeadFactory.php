<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Lead::class, function (Faker $faker) {
    return [
        'agent_name' => $faker->company,
        'move_in_date' => $faker->date(),
        'building_name' => $faker->buildingNumber,
        'property_address' => $faker->address,
        'apartment' => $faker->word,
        'city' => $faker->city,
        'state_id' => $faker->numberBetween(1, 60),
        'zip' => $faker->postcode,
        'prior_address' => $faker->address,
        'best_person_to_call_name' => $faker->name,
        'best_person_to_call_phone' => $faker->phoneNumber,
        'email_for_policy_info' => $faker->safeEmail,
        'payment_option' => $faker->numberBetween(1, 2),
        'notes_to_allstate' => $faker->text,
        'lessee_1_first_name' => $faker->firstName,
        'lessee_1_last_name' => $faker->lastName,
        'lessee_1_dob' => $faker->date(),
        'lessee_1_phone' => $faker->phoneNumber,
        'lessee_1_occupation' => $faker->word,
        'lessee_1_marital_status' => $faker->numberBetween(1, 2),
        'lessee_have_dog' => $faker->boolean,
        'lessee_dog_breed' => $faker->word,
        'lessee_2_first_name' => $faker->firstName,
        'lessee_2_last_name' => $faker->lastName,
        'lessee_2_dob' => $faker->date(),
        'lessee_2_phone' => $faker->phoneNumber,
        'lessee_2_occupation' => $faker->word,
        'lessee_2_marital_status' => $faker->numberBetween(1, 2),
        'gift_card_status' => $faker->numberBetween(1, 4),
        'gift_card_sent_date' => $faker->date(),
        'status' => $faker->numberBetween(1, 7),
    ];
});
