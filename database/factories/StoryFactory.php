<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Story;
use Faker\Generator as Faker;

$factory->define(Story::class, function (Faker $faker) {
    return [
        'name' => $faker->word . 'というストーリー',
        'description' => $faker->text,
    ];
});
