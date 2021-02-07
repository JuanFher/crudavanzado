<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use App\Product;
use App\Provider;
use App\Tax;
use Faker\Generator as Faker;


$factory->define(Product::class, function (Faker $faker) {
    return [
        'code' => $faker->word(3).$faker->numberBetween($min = 100, $max = 900), 
        'name' => $faker->sentence, 
        'image' => 'products/'.$faker->image('public/storage/products', 640, 480, null, false),
        'buy_price' => $faker->numberBetween($min = 100, $max = 900), 
        'sell_price' => $faker->numberBetween($min = 100, $max = 900), 
        'category_id' => Category::all()->random()->id,
        'provider_id' => Provider::all()->random()->id,
        
    ];
});
