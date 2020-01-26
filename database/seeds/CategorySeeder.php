<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert(
          ['name' => 'Jabones'],
          ['name' => 'Cremas'],
          ['name' => 'Aceites']);

          foreach($categories as $category)
          {
            Category::insert($category);
          }
    }
}
