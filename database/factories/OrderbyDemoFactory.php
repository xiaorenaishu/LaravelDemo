<?php

use Faker\Generator as Faker;

$factory->define(App\Models\OrderbyDemo::class, function (Faker $faker) {
    return [
        'city' => $faker->city,
        'name' => $faker->name
    ];
});
