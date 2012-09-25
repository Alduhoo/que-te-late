<?php

class Create_Questions_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		// Create questions table
		Schema::create('questions', function($table) {
			// auto incremental id (PK)
			$table->increments('id');

			// data
			$table->string('question');
			$table->string('answer1');
			$table->string('answer2');
			$table->string('answer3');
			$table->integer('count1');
			$table->integer('count2');
			$table->integer('count3');

			// timestamps
			$table->timestamps();
		});			
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('questions');
	}

}