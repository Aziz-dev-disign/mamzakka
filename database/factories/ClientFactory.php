<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Client;
use Faker\Generator as Faker;

$factory->define(Client::class, function (Faker $faker) {
    return [
        'nom'               =>$faker->firstName,
        'prenom'            =>$faker->lastName,
        'date_naissance'    =>$faker->date,
        'telephone'         =>$faker->tollFreePhoneNumber,
        'numero_cnib'       =>$faker->swiftBicNumber,
        'delivre_le'        =>$faker->date,
    ];
});
