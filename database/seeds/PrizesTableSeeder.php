<?php

use Illuminate\Database\Seeder;

class PrizesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Prize::class, config('const.AMOUNT_PRIZE_FAKER'))->create(); // テスト用のモックプライズの作成
    }
}
