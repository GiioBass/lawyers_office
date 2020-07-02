<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Affair;
use App\Affair_Lawyer;
use App\Lawyer;
use App\Model;
use Faker\Generator as Faker;

$factory->define(Affair_Lawyer::class, function (Faker $faker) {
    return [
        'affair_id' => Affair::all()->random()->id,
        'lawyer_id' => Lawyer::all()->random()->id
    ];
});
