<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Nice;
use Faker\Generator as Faker;

$factory->define(Nice::class, function (Faker $faker) {
    return [
        "article_id" => rand(1, 20),
        "like"=> rand(1, 50),
		"user_id" => rand(1,2),
    ];
});
