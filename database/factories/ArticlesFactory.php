<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [        
        'categorie_id' => factory('App\Categorie')->create(),
        'type_id' => factory('App\Type')->create(),
        'statu_id' => factory('App\Statu')->create(),
        'partenaire_id' => factory('App\Partenaire')->create(),
        'numero_article' =>$faker->randomDigitNotNull,
        'nom'=>$faker->lastName,
        'slug'=>$faker->text($maxNbChars = 50),        
        'description'=>$faker->text($maxNbChars = 150),
        'localisation'=>$faker->streetAddress,
        'superficie'=>'300m2',
        'image'=>$faker->image($dir = '/tmp', $width = 640, $height = 480),
        'date'=>$faker->date,
    ];
});
