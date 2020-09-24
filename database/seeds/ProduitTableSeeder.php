<?php

use Illuminate\Database\Seeder;

use App\Produit;

class ProduitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {        
        factory('App\Produit', 20)->create();
    }
}
