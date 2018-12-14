<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Post::class, function (Faker $faker) {
    return [
        'user_id' => \App\User::paginate(10, ['id'])->random()->id,
        'title' => $faker->title,
        'content' => $faker->sentence,
        'status' => random_int(1, 4)
    ];
});
