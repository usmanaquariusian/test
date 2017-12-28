<?php

use Faker\Generator as Faker;

$factory->define(App\testable::class, function (Faker $faker) {
    return [
        'name'=>$faker->name()
    ];
});
