<div class="row">
	<div class="small-4 large-4 columns">
		<h1>Personal Information</h1>
		<div class="small-6 large-6 columns">
			<img src="" alt="profile image">
		</div>
		<div class="small-6 large-6 columns">
			<p>{{$person->FirstName}} {{$person->LastName}}</p>
			<p>{{$person->Address}}</p>
			<p>{{$person->City}}, {{$person->State}} {{$person->ZipCode}}</p>
			<p>{{$person->Country}}</p>
			<p>{{$person->EmailAddress}}</p>
			<p>{{$person->PhoneNumber}}</p>
		</div>
		<a class="button" href="{{ URL::route('people.edit', $person->id) }}">Edit</a>
	</div>
	<div class="small-8 large-8 columns">
		<h2>Recent Activity</h2>
	</div>
</div>