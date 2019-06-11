<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $hashed_password = Hash::make('password'); // ハッシュ化されたパスワード

        $test_users = ['admin', 'test_kp', 'test_pl']; //テスト用のユニークユーザーデータを定義する

        foreach($test_users as $user)
        {
            DB::table('users')->insert([
                'name' => $user,
                'email' => $user . '@email.org',
                'email_verified_at' => now(),
                'password' => $hashed_password,
                'remember_token' => Str::random(10),
            ]);
        }

        factory(\App\Models\User::class, config('const.AMOUNT_USER_FAKER'))->create(); // テスト用のモックユーザーの作成
    }
}
