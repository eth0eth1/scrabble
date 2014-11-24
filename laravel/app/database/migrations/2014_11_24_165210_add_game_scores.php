<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddGameScores extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// Add the scoring columns for the games table
		Schema::table('games', function($t)
		{
			$t->integer('player1_score')->default(0);
			$t->integer('player2_score')->default(0);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		// Drop the scoring columns for the games table
		Schema::table('games', function($t)
		{
			$t->dropColumn('player1_score');
			$t->dropColumn('player2_score');
		});
	}

}
