<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserBattleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_battle', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('poke_id');
            $table->integer('level');
            $table->integer('hp');
            $table->integer('hp_max');
            $table->integer('atk');
            $table->integer('def');
            $table->boolean('finished')->default(false);
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
        Schema::dropIfExists('user_battle');
    }
}
