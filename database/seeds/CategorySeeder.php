<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            ['name' => 'cremas'],
            [ 'name' => 'tonicos'],
            [ 'name' => 'jabones']
        ];
        foreach ($categories as $category) {
            DB::table('categories')->insert($category);
        }

    }
}
