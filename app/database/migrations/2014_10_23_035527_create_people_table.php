<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeopleTable extends Migration {

	public function up(){
		Schema::create('people', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('EmailAddress');
			$table->string('FirstName');
		    $table->string('LastName');
		    $table->string('PhoneNumber');
		    $table->string('Address');
		    $table->string('State');
		    $table->string('City');
		    $table->string('ZipCode');
		    $table->string('Country');
			$table->timestamps();
		});
	}

	public function down(){
		Schema::drop('people');
	}

}