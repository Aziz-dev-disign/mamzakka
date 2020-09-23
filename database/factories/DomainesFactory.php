<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Domaine;
use Faker\Generator as Faker;

$factory->define(Domaine::class, function (Faker $faker) {
    return [
        'nom'   => $faker->company,
        'debut' => $faker->date,
        'fin'   => $faker->date,
    ];
});
