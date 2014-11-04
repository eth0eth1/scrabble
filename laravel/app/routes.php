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
	$player = new Player;
	$player->name = 'Test User';
	$player->contact_number = '0999';
	$player->save();

/*
	$painting = new Painting;
	$painting->title = 'Do No Wrong';
	$painting->artist = 'D . DoWright';
	$painting->year = 2014;
	$painting->save();

	$painting = Painting::find(1);
	$painting->title = 'Do No Wrong - Do Extra Wrong';
	$painting->save();
	return $painting->title;
*/
	return View::make('hello');

});

Route::get('about', function()
{
	return 'About content goes here';
});

Route::get('about/directions', function()
{
	return 'Directions';
});

Route::get('player/{thePlayer}', function($thePlayer)
{
	// Check if the player exists
	$player = DB::table('players')->where('name', $thePlayer)->first();
	if (empty($player)) {
		// If not, create them
		$player = new Player;
		$player->name = $thePlayer;
		$player->contact_number = '0999';
		$player->save();
		return "Creating {$thePlayer}'s page";
	} else {
		// Or display them
		return var_dump($player->name);
	}
});