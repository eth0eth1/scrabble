<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayers extends Migration {

	/**
	 * Run the migrations.
	 * Create the players, giving them a name and contact number
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('players', function($newtable)
		{
			$newtable->increments('id');
			$newtable->string('name');
			$newtable->string('contact_number');
			$newtable->timestamps();
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
