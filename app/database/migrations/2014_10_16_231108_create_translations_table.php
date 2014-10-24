<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTranslationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('translations', function($table) {
		$table->increments('id');
		$table->integer('user_id')->unsigned();
        $table->foreign('user_id')->references('id')->on('users');		
        $table->integer('document_id')->unsigned();
        $table->foreign('document_id')->references('id')->on('documents');
		$table->integer('language_id');
		$table->text('content');
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
		Schema::drop('translations');
	}

}
