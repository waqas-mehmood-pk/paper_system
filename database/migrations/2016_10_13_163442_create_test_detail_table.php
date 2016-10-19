<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
         Schema::create('testDetail', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->integer('test_master_id')->index();
            $table->integer('answer_marked_by_student');
            $table->integer('mcqs_id')->index();
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
        Schema::drop('testDetail');
    }
}
   
