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
        //DB::table('categories')->truncate();
        //DB::table('products')->truncate();

        $this->call(CategorySeeder::class);
        $this->call(ProductSeeder::class);
    }
}
