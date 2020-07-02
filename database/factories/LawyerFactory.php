<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Document_type;
use App\Lawyer;
use Faker\Generator as Faker;

$factory->define(Lawyer::class, function (Faker $faker) {
    return [
        'id' => $faker->numberBetween($min = 100000, $max = 9999999),
        'names' => $faker->firstName,
        'last_name' => $faker->lastName,
        'document_type_id' => Document_type::all()->random()->id
    ];
});
