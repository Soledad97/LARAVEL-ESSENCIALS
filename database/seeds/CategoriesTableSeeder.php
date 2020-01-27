<?php

use Illuminate\Database\Seeder;
use App\Category;
class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = array(
            ['name' => 'Jabones'], 
            ['name' => 'Cremas'],
            ['name' => 'Aceites']);
        foreach($categories as $category)
        {
            Category::insert($category);
        }
    }
}

