<?php

class PeopleController extends BaseController {

	protected $layout = "layouts.main";

	public function index(){
		$people = Person::all();

		$this->layout->content = View::make('people.index', compact('people'))->with('people', $people);
	}

	public function create(){
		$this->layout->content = View::make('people.create');
	}

	public function store(){
		$validator = Validator::make($data = Input::all(), Person::$rules);

		if ($validator->fails()){
			return Redirect::back()->with('alert', 'The following errors occurred')->withErrors($validator)->withInput();
		}

		$person = new Person;
	    $person->EmailAddress = Input::get('EmailAddress');
	    $person->FirstName = Input::get('FirstName');
	    $person->LastName = Input::get('LastName');
	    $person->PhoneNumber = Input::get('PhoneNumber');
	    $person->Address = Input::get('Address');
	    $person->State = Input::get('State');
	    $person->City = Input::get('City');
	    $person->ZipCode = Input::get('ZipCode');
	    $person->Country = Input::get('Country');
	    $person->save();

		return Redirect::to('people/')->with('success', 'New person has been created');
	}

	public function show($id){
		
		$person = Person::findOrFail($id);
		$activities = Activity::where('person_id','=', $id)->get();

		$this->layout->content = View::make('people.dashboard')->with('person', $person)->with('activities', $activities);
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
	}


}