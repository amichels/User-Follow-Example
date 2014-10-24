<?php

class Person extends \Eloquent {

	public function activities(){
        return $this->hasMany('Activity');
    }
    //Person following relationship
    public function followers(){
	  return $this->belongsToMany('Person', 'person_follows', 'person_id', 'follower_id');
	}

	public static $rules = [
		'EmailAddress'=>'required|email',
		'FirstName'=>'required|alpha|min:2',
	    'LastName'=>'required|alpha|min:2',
	    'PhoneNumber'=>'required|numeric|min:10',
	    'Address'=>'required|min:2',
	    'State'=>'required|alpha|min:2',
	    'City'=>'required|min:2',
	    'ZipCode'=>'required|numeric|min:5',
	    'Country'=>'required|min:2'
	    
	];

	protected $fillable = ['EmailAddress','FirstName','LastName','PhoneNumber','Address','State','City','ZipCode','Country'];

}