<?php

use Illuminate\Database\Seeder;
use App\Artcle;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Article', 20)->create();
    }
}
