<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class WinnersView extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// Create database view showing winner of each game
		DB::statement('create view winners as
		select 
			id as game_id, 
			case 
				when player1_score > player2_score then player1_id 
				when player1_score < player2_score then player2_id 
				else null 
			end as winning_player_id from games
		;');
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		// Drop winners view
		DB::statement('drop view winners');
	}

}
