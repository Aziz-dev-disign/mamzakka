<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Produit;
use Faker\Generator as Faker;

$factory->define(Produit::class, function (Faker $faker) {
    return [        
        'client_id'     => factory('App\Client')->create(),
        'type_id'       => factory('App\Type')->create(),
        'prix'          =>'10.000.000',
        'numero_article'=>10,
        'superficie'    =>'280m2',
        'date'          =>$faker->date,
        'numero_recu'   =>1,
    ];
});
