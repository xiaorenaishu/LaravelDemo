<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Demo::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'remark' => $faker->name,
        'create_time' => time(),
        'update_time' => time(),
    ];
});
