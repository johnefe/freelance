<?php

use Faker\Generator as Faker;

$factory->define(App\Invitado::class, function (Faker $faker) {
    return [
        //
        'user_id'=>null,
        'title' =>$faker->jobTitle,
    ];
});
