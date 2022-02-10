<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [

        'title' => $faker->words(3, true),
        'text' => $faker->text(),
        'likes' => $faker->numberBetween(0, 5000),

    ];
});
