<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayers extends Migration {

	/**
	 * Run the migrations.
	 * Create the players, giving them a name and contact number and bio
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('players', function($thePlayer)
		{
			$thePlayer->increments('id');
			$thePlayer->string('name', 100)->unique();
			$thePlayer->string('password', 100);
			$thePlayer->string('remember_token', 100)->nullable;
			$thePlayer->string('contact_number')->nullable();
			$thePlayer->text('bio')->nullable();
			$thePlayer->timestamps();
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
		Schema::drop('players');
	}

}
