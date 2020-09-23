<?php

use Illuminate\Database\Seeder;
use App\Profession;

class ProfessionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $profession = [
            [
                'id'       => 1,
                'profession'      => 'PDG',
            ],
            [
                'id'       => 2,
                'profession'      => 'Chef de service architecture',
            ],
            [
                'id'       => 3,
                'profession'      => 'Chef de service logistique',
            ],
            [
                'id'       => 4,
                'profession'      => 'Architect',
            ],
            [
                'id'       => 5,
                'profession'      => 'Agent 1',
            ],
            [
                'id'       => 6,
                'profession'      => 'Agent 2',
            ],
        ];

        Profession::insert($profession);
        factory('App\Profession', 10)->create();
    }
}
