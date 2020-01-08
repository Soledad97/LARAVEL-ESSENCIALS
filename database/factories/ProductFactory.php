<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name'=> $faker->text(100),
        'description' => $faker->text($maxNbChars = 200) ,
        'calification'=> $faker->numberBetween(1,5),
        'imagen'=>$faker->imageUrl($width = 640, $height = 480),
        'price'=> $faker->randomFloat(2,999,99999),
        
    

    ];
});
