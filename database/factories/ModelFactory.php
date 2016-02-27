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

$factory->define(SchoolApp\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(SchoolApp\Student::class, function (Faker\Generator $faker) {
    return [
        'nombre' => $faker->firstName,
        'apellidos' => $faker->lastName,
        'genero' => $faker->randomElement(['Masculino','Femenino']),
        'fecha_nacimiento' => $faker->date('Y-m-d','2010-01-01'),
        'numero_celular' => $faker->phoneNumber,
        'status' => $faker->randomElement(['Activo','Baja Temporal','Baja Definitiva']),
    ];
});