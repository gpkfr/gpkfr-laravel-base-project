<?php

//Alias route to Sessions Controller
Route::get('login', 'SessionsController@create');

Route::get('logout', 'SessionsController@destroy');

Route::resource('sessions','SessionsController');

Route::get('/', function()
{
	return 'Main Page... Not yet Ready.';
})->before('auth');

Route::get('/profile', function ()
{
	return "Profile page. Not yet implemented.";
})->before('auth');