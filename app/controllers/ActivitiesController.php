<?php

class ActivitiesController extends BaseController {

	protected $layout = "layouts.main";

	public function create($person_id){
		$this->layout->content = View::make('activities.create')->with('person_id', $person_id);
	}

	public function store($person_id){
		$validator = Validator::make($data = Input::all(), Activity::$rules);

		if ($validator->fails()){
			return Redirect::back()->with('alert', 'The following errors occurred')->withErrors($validator)->withInput();
		}

		$activity = new Activity;
	    $activity->Name = Input::get('Name');
	    $activity->Description = Input::get('Description');
	    $activity->Type = Input::get('Type');
	    $activity->person_id = $person_id;
	    $activity->save();

		return Redirect::to('people/'.$person_id)->with('success', 'New Activity has been created');
	}


}