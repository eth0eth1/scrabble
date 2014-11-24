<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Leaderboard extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// Create leaderboard view for leaderboard page
		// Uses the winners_view migration
		DB::statement('
			create view leaderboard as
			select 
				winning_player_id as player_id, 
				name, 
				count(*) as wins
			from
				 winners w
			 inner join
			 	players p 
			 on 
			 	w.winning_player_id = p.id 
			 group by
			 	winning_player_id,name 
			 order by
			 	 wins desc, 
			 	 winning_player_id asc
			 limit 10
			;');
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		// Drop leaderboard view
		DB::statement('drop view leaderboard');
	}

}
