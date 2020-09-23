<?php

use Illuminate\Database\Seeder;

use App\Domaine;

class DomaineTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $domaine = [
            [
                'id'       => 1,
                'nom'      => 'Gestion de projet',
                'debut'    => Null,
                'fin'      => Null,
            ],
            [
                'id'       => 2,
                'nom'      => 'Logistique',
                'debut'    => Null,
                'fin'      => Null,
            ],
            [
                'id'       => 3,
                'nom'      => 'Ressource humaine',
                'debut'    => Null,
                'fin'      => Null,
            ],
            [
                'id'       => 4,
                'nom'      => 'Gestion administratif',
                'debut'    => Null,
                'fin'      => Null,
            ],
        ];

        Domaine::insert($domaine);
        factory('App\Domaine', 20)->create();
    }
}
