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
		Schema::create('games', function($theGame)
		{
			$theGame->increments('id');
			$theGame->string('location');
			$theGame->integer('player1_id')->unsigned();
			$theGame->foreign('player1_id')->references('id')->on('players');
			$theGame->integer('player2_id')->unsigned();
			$theGame->foreign('player2_id')->references('id')->on('players');
			$theGame->timestamps();
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
