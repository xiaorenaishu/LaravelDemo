<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Habit::class, function (Faker $faker) {
    return [
        'label' => $faker->name,
        'level' => $faker->name,
    ];
});
