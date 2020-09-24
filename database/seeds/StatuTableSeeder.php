<?php

use Illuminate\Database\Seeder;

use App\Statu;

class StatuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $statu = [
            [
                'id'        =>1,
                'statu'     =>'vendu'
            ],
            [
                'id'        =>2,
                'statu'     =>'disponible'
            ],
            [
                'id'        =>3,
                'statu'     =>'a louer'
            ],
        ];

        Statu::insert($statu);
    }
}
