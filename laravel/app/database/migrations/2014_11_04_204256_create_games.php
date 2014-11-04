<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGames extends Migration {

	/**
	 * Run the migrations.
	 * Creates the games migration, with each of the
	 * players in the game linked to the players table
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('games', function($table)
		{
			$table->increments('id');
			$table->string('location');
			$table->integer('player1_id')->unsigned();
			$table->foreign('player1_id')->references('id')->on('players');
			$table->integer('player2_id')->unsigned();
			$table->foreign('player2_id')->references('id')->on('players');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 * Drop the table
	 * 
	 * @return void
	 */
	public function down()
	{
		Schema::drop('games');
	}

}
