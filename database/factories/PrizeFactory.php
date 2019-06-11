<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Prize;
use App\Models\WeaponType;
use Faker\Generator as Faker;

$factory->define(Prize::class, function (Faker $faker) {

    return [
        'name' => $faker->unique()->word . 'の秘宝',
        'target_weapon_type_id' => rand(1,3),
        'target_value' => 1,
        'transferable' => rand(0, 1),
        'notes' => $faker->text,
    ];
});
