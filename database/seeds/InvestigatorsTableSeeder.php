<?php

use Illuminate\Database\Seeder;

class InvestigatorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Investigator::class, config('const.AMOUNT_INVESTIGATOR_FAKER'))->create(); // テスト用のモック探索者の作成
    }
}
