<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Product::class, 5)->create()->each(function ($product) {
            $product->photos()->save(factory(App\ProductsPhoto)->make());
        });
    }
}


// 