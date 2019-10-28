<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Mannequin;
use Faker\Generator as Faker;

$factory->define(Mannequin::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'nick_name' => $faker->word,
        'email' => $faker->email,
        'phone' => $faker->phoneNumber,
        'city' => $faker->city,
        'instagram' => $faker->word,
        'gender' => array_rand(['female', 'male'], 1),
        'birthday' => $faker->date('Y-m-d'),
        'school' => $faker->boolean,
        'school_type' => $faker->randomElement(['elementary', 'high', 'college']),
        'height' => $faker->numberBetween(160, 200),
        'waist' => $faker->numberBetween(60, 100),
        'bust' => $faker->numberBetween(60, 100),
        'hips' => $faker->numberBetween(60, 100),
        'shoe_size' => $faker->numberBetween(39, 49),
        'eyes_color' => $faker->colorName,
        'hair_color' => $faker->colorName,
        'status' => $faker->numberBetween(1, 4),
    ];
});
