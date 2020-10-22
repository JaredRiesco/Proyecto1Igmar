<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Publicaciones;
use Faker\Generator as Faker;

$factory->define(Publicaciones::class, function (Faker $faker) {
    return [
        'Titulo'=>$faker->text(20),
        'Cuerpo'=>$faker->text(60),
        'usuario_id'=>$faker->numberbetween(1,10),
    ];
});
