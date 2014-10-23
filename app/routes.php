<?php

//Lesson routes
Route::resource('people', 'PeopleController');

Route::get('/', function()
{
	return View::make('hello');
});
