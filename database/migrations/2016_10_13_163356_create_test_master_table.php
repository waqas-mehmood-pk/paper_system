<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestMasterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testMaster', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->integer('users_id')->index();
            $table->integer('test_cate_id')->index();
            $table->timestamps('date_time');
            $table->rememberToken();
            });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('testMaster');
    }//
}