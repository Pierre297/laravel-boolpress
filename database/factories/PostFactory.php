<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'username' => $faker->unique()->word(2, true),
        'place' => $faker->words(3, true),
        'picture' => $faker->Str::random(10),
        'like' => $faker->numberBetween(0, 500),
        'description' => $faker->words(),
        'date' => $faker->date(),
        'comment' => $faker->words(),
    ];
});
