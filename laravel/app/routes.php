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

Route::get('user/{theUser}', function($theUser)
{
	return "Welcome to {$theUser}'s page";
});