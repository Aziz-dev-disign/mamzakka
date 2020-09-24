<?php

use Illuminate\Database\Seeder;

use App\Client;

class ClientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {        
        factory('App\Client', 10)->create();
    }
}
