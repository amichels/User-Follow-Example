<?php

//Person routes
Route::resource('people', 'PeopleController');

//Activity routes
Route::resource('people.activities', 'ActivitiesController');

Route::get('/', function()
{
	return View::make('hello');
});
