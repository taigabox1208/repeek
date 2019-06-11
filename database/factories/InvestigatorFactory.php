<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Investigator;
use Faker\Generator as Faker;

$factory->define(Investigator::class, function (Faker $faker) {

         $main_weapon_value = rand(2,3);
         $sub_weapon_value = config('const.WEAPON_MAX_LEVEL') - $main_weapon_value;

    return 
    [
        'name' => $faker->unique()->name,
        'user_id' => $faker->numberBetween(4, config('const.AMOUNT_USER_FAKER')),
        'main_weapon_key' => $faker->word,
        'main_weapon_type_id' => rand(1,3),
        'main_weapon_value' => $main_weapon_value,
        'main_weapon_description' => $faker->text,
        'sub_weapon_key' => $faker->word,
        'sub_weapon_type_id' => rand(1,3),
        'sub_weapon_value' => $sub_weapon_value,
        'sub_weapon_description' => $faker->text,
        'notes' => $faker->text,
    ];
});
