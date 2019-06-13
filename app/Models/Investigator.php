<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Investigator extends Model
{
        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [
        'id','user_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        //
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        //
    ];

    /**
     * 探索者のメイン技能・サブ技能のIDを受け取って、技能タイプ画像をHTMLタグ付きで出力する
     *
     * @var int
     * @return void
     */
    private function getWeaponIconPath(int $weapon_type_id)
    {
        $model = WeaponType::where('id', $weapon_type_id)->first();
        echo '<i class="pr-1 fas ' . $model->icon . '"></i>' . $model->name;

    }
}
