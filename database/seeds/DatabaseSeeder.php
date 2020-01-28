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
       //$this->call(RolesTableSeeder::class);
       //$this->call(PaymentsTableSeeder::class);
       //$this->call(CategoriesTableSeeder::class);
       factory(\App\Payment::Class, 5)->create();

    }
}
