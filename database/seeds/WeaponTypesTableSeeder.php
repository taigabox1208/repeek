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
        $array_weapon_types = ['戦闘', '探索', '感情'];

        foreach($array_weapon_types as $weapon_type)
        {
            DB::table('weapon_types')->insert([
                'name' => $weapon_type,
            ]);
        }
    }
}
