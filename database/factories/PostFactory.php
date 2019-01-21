<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    $name = $faker->sentence;
    $status = $faker->randomElement([\App\Post:: PUBLISHED, \App\Post::PENDING, \App\Post::REJECTED]);
    return[
        'freelance_id'=>\App\Freelance::all()->random()->id,
        'category_id'=>\App\Category::all()->random()->id,
        'level_id'=>\App\Level::all()->random()->id,
        'name' =>$name,
        'slug'=>str_slug($name,'-'),
        'description'=>$faker->paragraph,
        'picture'=> \Faker\Provider\Image::image(storage_path().'/app/public/posts', 600, 350, false),
        'picture' => \Faker\Provider\Image::image(storage_path().'/app/public/users', 200,200,'people', false),
        'status'=>$status,
        'previous_approved' =>$status !== \App\Post::PUBLISHED ? false : true,
        'previous_rejected' =>$status !== \App\Post::REJECTED ? true : false,
    ];
});
