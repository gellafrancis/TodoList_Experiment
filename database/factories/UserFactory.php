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

$factory->define(App\User::class, function (Faker\Generator $faker)  {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => $password ?: $password = bcrypt('secret'), // secret
        'remember_token' => str_random(10),
    ];
});

//kailangan to pag gagawa ng faker, define
$factory->define(App\Todo::class, function (Faker $faker)  { //ingat sa path dito tsaka sa mga spacing 
    return [
        'todo'=> $faker->sentence(10)  // 10 words and  todo field
    ];
});

//seeder need create artisan 