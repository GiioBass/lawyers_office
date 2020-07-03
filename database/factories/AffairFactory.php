<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Affair;
use App\Model;
use App\Client;
use App\Status;
use Faker\Generator as Faker;

$factory->define(Affair::class, function (Faker $faker) {
    return [
        'id' => $faker->numberBetween($min = 100000, $max = 9999999),
        'name' => $faker->sentence($nbWords = 6, $variableNbWords = true) ,
        'cost' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = NULL),
        'start' => $faker->date(),
        'finish' => $faker->date(),
        'status_id' => Status::all()->random()->id,
        'client_id' => Client::all()->random()->id

    ];
});
