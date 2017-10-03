<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/



$factory->define(App\User::class, function (Faker $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'avatar' => $faker->imageUrl($width = 640, $height = 480), // 'http://lorempixel.com/640/480/'
        'avatar_original' => $faker->imageUrl($width = 640, $height = 480), // 'http://lorempixel.com/640/480/'
        'gender' => $faker->randomDigit,
        'token' => $faker->randomDigit,
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Compliment::class, function (Faker $faker) {
    static $password;

    return [
        'sender_id' => $faker->randomDigit,
        'receiver_id' => $faker->randomDigit,
        'body' => $faker->realText(50),
    ];
});
