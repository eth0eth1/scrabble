<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArt extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
	Schema::create('art2', function($newtable)
	{
		$newtable->increments('id');
		$newtable->string('artist');
		$newtable->string('title');
		$newtable->text('description');
		$newtable->date('created');
		$newtable->date('exhibition');
		$newtable->timestamps();
	});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
	Schema::drop('art2');
	}

}