<?php

//Lesson routes
Route::resource('persons', 'PersonsController');

Route::get('/', function()
{
	return View::make('hello');
});
