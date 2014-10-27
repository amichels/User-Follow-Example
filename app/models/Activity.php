<?php

class Activity extends \Eloquent {

	// format created_at
	public function getCreatedAtAttribute($date){
	    return Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('m/d/Y');
	}

	public function getUpdatedAtAttribute($date){
	    return Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('m/d/Y');
	}

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