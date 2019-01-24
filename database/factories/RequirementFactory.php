<?php

use Faker\Generator as Faker;

$factory->define(App\Requirement::class, function (Faker $faker) {
    return [
        //
        'post_id' => \App\Post::all()->random()->id,
        'requiriment' => $faker->sentence
    ];
});
