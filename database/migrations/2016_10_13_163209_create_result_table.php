<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResultTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('result', function (Blueprint $table) {
            $table->increments('result_id')->unique();
            $table->integer('users_id')->index();
            $table->integer('obtain_marks');
            $table->integer('max_marks');
            $table->integer('right_questions');
            $table->integer('wrong_questions');
            $table->integer('unattempt_question');
            $table->rememberToken();
            $table->timestamps('date_time');
            });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('result');
    }
}

