<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\product;
use Faker\Generator as Faker;

$factory->define(product::class, function (Faker $faker) {
    return [
        'name'=> $faker->word,
        'detail'=> $faker->paragraph,
        'price'=> $faker->numberBetween(100,1000),
        'stock'=> $faker->randomDigit,
        'discount'=> $faker->numberBetween(2,30)    
    ];
});
