<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence,
        'description' => $faker->paragraph,
        'calification' => $faker->randomDigit,
        'price' => $faker->numberBetween(1000, 500000),
        'imagen' => 'products/crema-producto.jpg',
        'stock' => $faker->default,
        'quantity'=> 10,
        'category_id' => function () 
            {
                return factory(App\Products::class)->create()->id;
            }        
        ];
});
