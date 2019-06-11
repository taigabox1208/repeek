<?php

use Illuminate\Database\Seeder;

class StoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Story::class, config('const.AMOUNT_STORY_FAKER'))->create(); // テスト用のモックストーリーの作成
    }
}
