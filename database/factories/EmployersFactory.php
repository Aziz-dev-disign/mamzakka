<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Employer;
use Faker\Generator as Faker;

$factory->define(Employer::class, function (Faker $faker) {
    return [
        'matricule' => $faker->unique()->ean8,
        'nom' => $faker->firstName,
        'prenom' => $faker->lastName,
        'email' => $faker->safeEmail,
        'date_naissance' => $faker->date,
        'genre' => $faker->title,
        'contact' => $faker->tollFreePhoneNumber,
        'situation_m' => $faker->title,
        'adresse_physique' => $faker->address,
        'fichier' => $faker->slug,        
        'photo' => $faker->imageUrl($widh = 640, $height = 480),
        'domaine_id' => factory('App\Domaine')->create(),
        'profession_id' => factory('App\Profession')->create(),
    ];
});
