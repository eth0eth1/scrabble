<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	$theLandmarks = array('Museam','Wood Green','Kitiah','Dog','Cat');
	return View::make('hello', array('theLocation' => 'LDN', 'theWeather' => false, 'theLandmarks' => $theLandmarks));
});

Route::get('player/{thePlayer}', function($thePlayer)
{
	// Check if the player exists
	$playe = DB::table('players')->where('name', $thePlayer)->first();
	if (empty($player)) {
		// If not, create them
		$newplayer = new Player;
		$newplayer->name = $thePlayer;
		$newplayer->contact_number = '0999';
		$newplayer->save();
		return "Creating {$thePlayer}'s page";
	} else {
		// Or display them
		return var_dump($player->name);
	}
});

Route::get('signup', function()
{
	return View::make('signup');
});