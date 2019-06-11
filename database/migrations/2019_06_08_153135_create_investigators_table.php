<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvestigatorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investigators', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 255)->unique();
            $table->string('user_id', 255);
            $table->string('profile_image', 255)->nullable();
            $table->string('main_weapon_key', 255);
            $table->integer('main_weapon_type_id');
            $table->unsignedSmallInteger('main_weapon_value');
            $table->string('main_weapon_description', 255)->nullable();
            $table->string('sub_weapon_key', 255);
            $table->integer('sub_weapon_type_id');
            $table->unsignedSmallInteger('sub_weapon_value');
            $table->string('sub_weapon_description', 255)->nullable();
            $table->string('notes', 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('investigators');
    }
}
