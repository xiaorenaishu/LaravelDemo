<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Coupon::class, function (Faker $faker) {
    return [
        'title' => $faker->title,
        'label' => $faker->title,
        'create_time' => time(),
        'operate_by' => 0,
        'operate_time' => time(),
    ];
});
