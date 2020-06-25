<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Store;
use Faker\Generator as Faker;

$factory->define(Store::class, function (Faker $faker) {
    return [
        'store_name' => $faker->name,
        //'image_path' => $faker->url,
        //'alt' => $faker->sentence(20),
        'wait_people' =>  $faker->numberBetween(1, 20), 
       // 'estemated_wait_time' => $faker->numberBetween(1, 20), 
        'introduction' => $faker->paragraph(),
      
    ];
});
