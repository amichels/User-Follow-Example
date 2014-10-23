<?php

class PersonsController extends BaseController {

	protected $layout = "layouts.main";

	public function index(){
		$this->layout->content = View::make('persons.index');
	}

	public function create(){
		$this->layout->content = View::make('persons.create');
	}

	public function show($id){
		$this->layout->content = View::make('persons.dashboard');
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
	    $person->save();

		return Redirect::to('persons/')->with('success', 'New person has been created');
	}

}