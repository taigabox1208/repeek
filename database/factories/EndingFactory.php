<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Ending;
use Faker\Generator as Faker;

$factory->define(Ending::class, function (Faker $faker) {
    return [
        'name' => $faker->word . 'という終わり',
        'description' => $faker->text,
    ];
});
