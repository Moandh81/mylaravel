<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'titre' => $faker->firstNameMale,
        'auteur' => $faker->lastName,
        'description' => $faker->realText($maxNbChars = 200, $indexSize = 2)
    ];
});
