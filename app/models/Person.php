<?php

class Person extends \Eloquent {

	public static $rules = [
		'EmailAddress'=>'required|email|unique:persons',
		'FirstName'=>'required|alpha|min:2',
	    'LastName'=>'required|alpha|min:2',
	    'PhoneNumber'=>'required|numeric|min:10',
	    'Address'=>'required|alpha_num|min:2',
	    'State'=>'required|alpha|min:2',
	    'City'=>'required|alpha|min:2',
	    'ZipCode'=>'required|numeric|min:5'
	    
	];

	protected $fillable = ['title','description'];

}