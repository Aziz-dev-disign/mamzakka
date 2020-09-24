<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CategorieTableSeeder::class,
            StatuTableSeeder::class,
            TypeTableSeeder::class,
            ClientTableSeeder::class,
            DomaineTableSeeder::class,
            ProfessionTableSeeder::class,
            EmployerTableSeeder::class,
            ProduitTableSeeder::class
        ]);
    }
}
