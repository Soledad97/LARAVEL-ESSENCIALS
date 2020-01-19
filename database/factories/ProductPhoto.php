<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [     
        'image'=> $faker->imageUrl($width = 640, $height = 480), // 'http://lorempixel.com/640/480/'
        'category_id'=> 1,
    ];
});
