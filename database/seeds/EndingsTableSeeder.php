<?php

use Illuminate\Database\Seeder;

class EndingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Ending::class, config('const.AMOUNT_ENDING_FAKER'))->create(); // テスト用のモックエンディングの作成
    }
}
