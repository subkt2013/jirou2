<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Store;
use Faker\Generator as Faker;

$factory->define(Store::class, function (Faker $faker) {
    return [
        'store_name' => $faker->name,
        'wait_people' =>  $faker->numberBetween(1, 20), 
        'introduction' => $faker->paragraph(),
      
    ];
});
