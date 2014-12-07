<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersanswersVotesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_answer_vote', function($table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('answer_id');
            $table->boolean('vote');//up or down, true or false
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
		Schema::drop('user_answer_vote');
	}

}
