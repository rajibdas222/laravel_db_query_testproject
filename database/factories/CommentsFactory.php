<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comments;
use Faker\Generator as Faker;

$factory->define(Comments::class, function (Faker $faker) {
    return [
        'content' => $faker->text(500),
        'rating' => $faker->numberBetween(1,5),
        'user_id' => $faker->numberBetween(1,3),
    ];
});
