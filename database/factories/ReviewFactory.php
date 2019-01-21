<?php

use Faker\Generator as Faker;

$factory->define(App\Review::class, function (Faker $faker) {
    return [
        //
        'post_id' =>\App\Post::all()->random()->id,
        'rating' =>$faker->randomFloat(2,1,5)
    ];
});
