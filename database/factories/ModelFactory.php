<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'rol' => $faker->numberBetween($min = 0, $max = 2),
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});


$factory->define(App\faculty::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'detalis' => $faker->paragraph,
    ];
});

$factory->define(App\doctor::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'faclaty_id' => $faker->numberBetween($min = 1, $max = 2),
        'user_id' =>  $faker->numberBetween($min = 21, $max = 22),
    ];
});
$factory->define(App\admin::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'faclaty_id' => $faker->numberBetween($min = 1, $max = 2),
        'user_id' =>  $faker->numberBetween($min = 23, $max = 24),
    ];
});

$factory->define(App\stage::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'faclaty_id' =>  $faker->numberBetween($min = 1, $max = 2),
    ];
});

$factory->define(App\student::class, function (Faker\Generator $faker) {
    

    return [
        'faclaty_id' => $faker->numberBetween($min = 1, $max = 2),
        'user_id' =>  $faker->numberBetween($min = 25, $max = 30),
        'stage_id' =>  $faker->numberBetween($min = 1, $max = 4),
    ];

});

$factory->define(App\subject::class, function (Faker\Generator $faker) {
    

    return [
        'name' => $faker->name,
        'stage_id' =>  $faker->numberBetween($min = 1, $max = 4),
    ];

});

$factory->define(App\group::class, function (Faker\Generator $faker) {
    

    return [
        'name' => $faker->name,
        'subject_id' =>  $faker->numberBetween($min = 1, $max = 10),
    ];

});

$factory->define(App\quetion::class, function (Faker\Generator $faker) {
    

    return [
        'body' => $faker->paragraph,
        'subject_id' =>  $faker->numberBetween($min = 1, $max = 10),
        'user_id' =>  $faker->numberBetween($min = 25, $max = 30),
    ];

});

$factory->define(App\answer::class, function (Faker\Generator $faker) {
    

    return [
        'body' => $faker->paragraph,
        'quetion_id' =>  $faker->numberBetween($min = 1, $max = 10),
        'user_id' =>  $faker->numberBetween($min = 23, $max = 24),
    ];

});

$factory->define(App\matrial::class, function (Faker\Generator $faker) {
    
    $firstletter = "uploads/";
    $nseton  = $faker->numberBetween($min = 10, $max = 99);
    $fileattch = strtoupper($firstletter) . $nseton . '.'.'.zip';

    return [
        'name' => $faker->name,
        'user_id' =>  $faker->numberBetween($min = 23, $max = 24),
        'subject_id' =>  $faker->numberBetween($min = 1, $max = 10),
        'attachfile' =>  $fileattch,
    ];

});

$factory->define(App\follower::class, function (Faker\Generator $faker) {
    
    return [
        'user_id' =>  $faker->numberBetween($min = 23, $max = 24),
        'thefollower' =>  $faker->numberBetween($min = 25, $max = 30),
    ];

});

