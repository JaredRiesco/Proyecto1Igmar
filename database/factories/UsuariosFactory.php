<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Usuarios;
use Faker\Generator as Faker;

$factory->define(Usuarios::class, function (Faker $faker) {
    return [
        'nombres'=>$faker->name,
        'apellidos'=>$faker->lastname,
        'edad'=>rand(10 , 80),
        'sexo'=>$faker->randomElement(['masculino', 'femenino'])
    ];
});
