<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonsTable extends Migration {

	public function up()
	{
		Schema::create('persons', function(Blueprint $table)
		{
			$table->increments('PersonId');
			$table->string('EmailAddress');
			$table->string('FirstName');
		    $table->string('LastName');
		    $table->string('PhoneNumber');
		    $table->string('Address');
		    $table->string('State');
		    $table->string('City');
		    $table->string('ZipCode');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('persons');
	}

}