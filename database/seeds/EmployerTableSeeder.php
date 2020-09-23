<?php

use Illuminate\Database\Seeder;
use App\Employer;

class EmployerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $employer = [
        //     [
        //        'id'               => 1,
        //        'matricule'        => '2020/06/001',
        //        'nom'              => 'Tall',
        //        'prenom'           =>  'Amadou',
        //        'genre'           =>  'Homme',
        //        'date_naissance'   => Null,
        //        'contact'          => 70180874,
        //        'situation_m'      => 'marié',
        //        'adresse_physique' => 'Hamdalye, Rue 10.74',
        //        'fichier'          => 'test',
        //        'photo'            => 'test2',
        //        'domaine_id'       => 1,
        //        'profession_id'    => 1,
        //     ],
        //     [
        //         'id'               => 2,
        //         'matricule'        => '2020/06/001',
        //         'nom'              => 'Dicko',
        //         'prenom'           => 'Fatoumata',                
        //         'genre'           =>  'Femme',
        //         'date_naissance'   => Null,
        //         'contact'          => 70180874,
        //         'situation_m'      => 'marié',
        //         'adresse_physique' => 'Hamdalye, Rue 10.74',
        //         'fichier'          => 'test',
        //         'photo'            => 'test2',
        //         'domaine_id'       => 3,
        //         'profession_id'    => 1,
        //      ],
        //      [
        //         'id'               => 3,
        //         'matricule'        => '2020/06/001',
        //         'nom'              => 'Boly',
        //         'prenom'           => 'Ousmane',
        //         'genre'           =>  'Homme',
        //         'date_naissance'   => Null,
        //         'contact'          => 70180874,
        //         'situation_m'      => 'marié',
        //         'adresse_physique' => 'Hamdalye, Rue 10.74',
        //         'fichier'          => 'test',
        //         'photo'            => 'test2',
        //         'domaine_id'       => 2,
        //         'profession_id'    => 1,
        //      ],
        //      [
        //         'id'               => 3,
        //         'matricule'        => '2020/06/001',
        //         'nom'              => 'Cissé',
        //         'prenom'           => 'Fatou',
        //         'genre'           =>  'Femme',
        //         'date_naissance'   => Null,
        //         'contact'          => 70180874,
        //         'situation_m'      => 'marié',
        //         'adresse_physique' => 'Hamdalye, Rue 10.74',
        //         'fichier'          => 'test',
        //         'photo'            => 'test2',
        //         'domaine_id'       => 4,
        //         'profession_id'    => 1,
        //      ],
             
        // ];

        // Employer::insert($employer);

        factory('App\Employer', 30)->create();
    }
}
