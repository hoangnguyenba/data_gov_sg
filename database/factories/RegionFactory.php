<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Region::class, function (Faker $faker) {
    return [
        'code' => $faker->name,
        'name' => $faker->name,
        'latitude' => $faker->latitude,
        'longitude' => $faker->longitude,
    ];
});
