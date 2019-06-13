<?php

use Illuminate\Database\Seeder;

class WeaponTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array_weapon_types = [
            ['戦闘', 'fa-fist-raised'], 
            ['探索', 'fa-search'], 
            ['感情', 'fa-heart'],
        ];

        foreach($array_weapon_types as $weapon_type)
        {
            DB::table('weapon_types')->insert([
                'name' => $weapon_type[0],
                'icon' => $weapon_type[1],
            ]);
        }
    }
}
