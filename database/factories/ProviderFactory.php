<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Provider;
use Faker\Generator as Faker;

$factory->define(Provider::class, function (Faker $faker) {
    return [
        'name' => $faker->name, 
        'email' => $faker->email, 
        'ruc_number' => $faker->ean8, 
        'address' => $faker->address, 
        'phone' => $faker->e164PhoneNumber, 
        'logo' => $faker->imageUrl(480, 480),
    ];
});
