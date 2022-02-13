<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Tag;
use Faker\Generator as Faker;

$factory->define(Tag::class, function (Faker $faker) {
    return [

        'name' => $faker->words(2, true),
        'desc' => $faker->words(20, true),
    ];
});