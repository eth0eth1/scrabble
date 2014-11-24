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


// Main Route
Route::get('/', function()
{
	return View::make('hello');
});

// 
// Authentication 
// 

/* Login */
Route::get('login', function()
{
	return View::make('login');
});
Route::post('login', function()
{
	//Set the credentals variable to the name and password post parameters
	$credentials = Input::only('name','password');
	if(Auth::attempt($credentials)) {
		return Redirect::intended();
	};
	return View::make('login');
});

/* Logout */
Route::get('logout', function()
{
	Auth::logout();
	return View::make('logout');
});

/* Register */
Route::get('register', function()
{
	return View::make('register');
});
Route::post('register', function()
{
	$player = new Player;
	$player->name = Input::get('name');
	$player->contact_number = Input::get('contact_number');
	$player->bio = Input::get('bio');
	$player->password = Hash::make(Input::get('password'));
	$player->save();
	$player_name = Input::get('name');
	return View::make('thanks')->with('player_name',$player_name);
});

//
// Public content
//

// Leaderboard
Route::get('leaderboard', function()
{
	$leaders = DB::select('select * from leaderboard');
	return View::make('leaderboard', array('leaders' => $leaders));
});

// Player profile pages
Route::get('player/{thePlayer}', function($thePlayer)
{
	// Check if the player exists
	$player = DB::table('players')->where('name', $thePlayer)->first();
	if (empty($player)) {
		// If no player, take them to registration
		return View::make('register');
	} else {
		// Or display them
		return View::make('profile');
	}
});

//
// Private content
//

// Authentication required test
Route::get('secret', array(
'before' => 'auth',
function()
{
	return View::make('secret');
}));

// Game creation
Route::get('game', array('before' => 'auth', function()
{
	// Get the name and id of all platers and pass it into the game view
	// Used to build the drop down boxes
	$players = DB::table('players')->orderBy('id')->lists('name','id');
	// Add helper select option
	$players = array_add($players, '0', 'Select Player');
	return View::make('game', array('players' => $players));
}));
Route::post('game', array('before' => 'auth', function()
{
	// Take form results and create a game;
	// Requires add_game_scores migration
	$game = new Game;
	$game->location = Input::get('location');
	$game->player1_id = Input::get('player1_id');
	$game->player2_id = Input::get('player2_id');
	$game->player1_score = Input::get('player1_score');
	$game->player2_score = Input::get('player2_score');
	$game->save();

	return "Game Posted";
}));
