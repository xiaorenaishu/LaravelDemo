<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Activity::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'remark' => $faker->sentence,
    ];
});
