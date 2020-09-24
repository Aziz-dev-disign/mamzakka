<?php

use Illuminate\Database\Seeder;

use App\Categorie;

class CategorieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categorie = [

            [
                'id'        =>1,
                'categorie' =>'Maison',
            ],
            [
                'id'        =>2,
                'categorie' =>'Terrain',
            ]

        ];

        Categorie::insert($categorie);
    }
}
