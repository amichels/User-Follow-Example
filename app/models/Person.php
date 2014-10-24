<?php

class Person extends \Eloquent {

	public function lessons(){
        return $this->hasMany('Activity');
    }

	public static $rules = [
		'EmailAddress'=>'required|email',
		'FirstName'=>'required|alpha|min:2',
	    'LastName'=>'required|alpha|min:2',
	    'PhoneNumber'=>'required|numeric|min:10',
	    'Address'=>'required|min:2',
	    'State'=>'required|alpha|min:2',
	    'City'=>'required|alpha|min:2',
	    'ZipCode'=>'required|numeric|min:5',
	    'Country'=>'required|min:2'
	    
	];

	protected $fillable = ['EmailAddress','FirstName','LastName','PhoneNumber','Address','State','City','ZipCode','Country'];

}