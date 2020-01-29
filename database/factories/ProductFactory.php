<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name'=> $faker->text(100),
        'description' => $faker->text(200) ,
        'calification'=> $faker->numberBetween(1,5),
        'photo' => 'public/image/producto1.jpg',
        'price'=> $faker->randomFloat(2,100,10000),
        'stock'=> $faker->numberBetween(0,500),
        'category_id'=> 1,
    ];
});
