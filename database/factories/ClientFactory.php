<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Client;
use Faker\Generator as Faker;

$factory->define(Client::class, function (Faker $faker) {
    return [
        'name' => $faker->name, 
        'document'=> $faker->ean8, 
        'address' => $faker->address, 
        'phone' => $faker->e164PhoneNumber, 
        'email' => $faker->email, 
    ];
});
