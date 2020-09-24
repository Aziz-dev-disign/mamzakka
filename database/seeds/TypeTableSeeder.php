<?php

use Illuminate\Database\Seeder;

use App\Type;

class TypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $type = [
            [
                'id'        =>1,
                'nom'       =>'Terrain vide',
            ],
            [
                'id'        =>2,
                'nom'       =>'Maison R+1',
            ],
            [
                'id'        =>3,
                'nom'       =>'Maison F3',
            ],
            [
                'id'        =>4,
                'nom'       =>'Maison R+1 meublée',
            ],
            [
                'id'        =>5,
                'nom'       =>'Maison F2',
            ],
            [
                'id'        =>6,
                'nom'       =>'Maison F4 meublée',
            ],
            [
                'id'        =>7,
                'nom'       =>'Maison F2',
            ],
            [
                'id'        =>8,
                'nom'       =>'Magasin',
            ],
        ];

        Type::insert($type);
        
        factory('App\Type', 5)->create();
    }
}
