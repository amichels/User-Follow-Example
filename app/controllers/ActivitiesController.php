<?php

class ActivitiesController extends BaseController {

	protected $layout = "layouts.main";

	/*public function index(){
		$activities = Activity::all();

		$this->layout->content = View::make('activities.index', compact('activities'))->with('activities', $activities);
	}*/

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

	/*public function show($id){
		
		$person = Person::findOrFail($id);

		$this->layout->content = View::make('people.dashboard')->with('person', $person);
	}

	public function edit($id){
		$person = Person::find($id);
		$this->layout->content = View::make('people.edit', compact('person'))->with('person', $person);
	}

	public function update($id){
		$person = Person::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Person::$rules);

		if ($validator->fails()){
			return Redirect::back()->with('alert', 'The following errors occurred')->withErrors($validator)->withInput();
		}

		$person->update($data);

		return Redirect::route('people.show', $person->id)->with('success', 'The Person has been updated');
	}

	public function destroy($id){
		$person = Person::find($id);
		$person->delete();

		return Redirect::to('people/')->with('success', 'The person has been deleted');
	}*/


}