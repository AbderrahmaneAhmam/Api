<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\product;
use App\Model\review;
use Faker\Generator as Faker;

$factory->define(review::class, function (Faker $faker) {
    return [
        'id_product' => function(){
            return product::all()->random();
        },
        'customer' => $faker->name,      
        'review' => $faker->paragraph,       
        'star' => $faker->numberBetween(0,5)         
    ];
});
