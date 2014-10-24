<?php

class Activity extends \Eloquent {

	public function people(){
	  return $this->belongsTo('Person');
	}

	public static $rules = [
		'Name'=>'required|min:2',
		'Description'=>'required|min:10',
	    'Type'=>'required|min:2'
	];

	protected $fillable = ['Name','Description','Type'];

}