<?php

use Faker\Generator as Faker;

//namespace \App\Post;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'user_id' => function(){
            return factory(App\User::class)->create()->id;
        },
        'title' => $faker->sentence,
        'body' => $faker->paragraph,
        'description' => $faker->paragraph,
        'image_path' => '/images/March26.png'
    ];
});
