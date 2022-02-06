<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [

        'username' => $faker->words(3, true),
        'place' => $faker->words(3, true),
        'content' => $faker->words(25, true),
        'comment' => $faker->words(4, true),
        'date' => $faker->date(),
        'like' => $faker->numberBetween(1, 100),

    ];
});
