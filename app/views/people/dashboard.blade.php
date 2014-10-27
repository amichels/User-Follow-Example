<div class="row">
	<div class="small-4 large-4 columns">
		<h1 class="dashboard-header">Personal Information</h1>
		<div class="small-6 large-6 columns">
			{{ HTML::image('images/prof-img.png', $alt="profile image", $attributes = array()) }}
		</div>
		<div class="prof-info small-6 large-6 columns">
			<p class="prof-info-item">{{$person->FirstName}} {{$person->LastName}}</p>
			<p class="prof-info-item">{{$person->Address}}</p>
			<p class="prof-info-item">{{$person->City}}, {{$person->State}} {{$person->ZipCode}}</p>
			<p class="prof-info-item">{{$person->Country}}</p>
			<p class="prof-info-item">{{$person->EmailAddress}}</p>
			<p class="prof-info-item">{{$person->PhoneNumber}}</p>
		</div>
		<a class="prof-edit-bt button" href="{{ URL::route('people.edit', $person->id) }}">Edit</a>
	</div>
	<div class="small-8 large-8 columns">
		<h2 class="dashboard-header">Recent Activity</h2>
		<table>
		    <thead>
		        <tr>
		            <td>Name</td>
		            <td>Description</td>
		            <td>Date</td>
		        </tr>
		    </thead>
		    <tbody>
		        @foreach($activities as $key => $value)
		            <tr>
		                <td>{{ $value->Name }}</td>
		                <td>{{ $value->Description }}</td>
		                <td>{{ $value->created_at }}</td>
		            </tr>
		        @endforeach
		    </tbody>
		</table>

		<a class="prof-activity-bt button" href="{{ URL::route('people.activities.create',$person->id) }}">New</a>

		<h2 class="dashboard-header">Followers</h2>
		<table>
		    <thead>
		        <tr>
		            <td>Name</td>
		            <td>Action</td>
		        </tr>
		    </thead>
		    <tbody>
		        @foreach($person->followers as $value)
		            <tr>
		                <td>{{ $value->FirstName }} {{ $value->LastName }}</td>
		                <td>
							<a class="button tiny" href="{{ URL::route('people.show', $value->id) }}">View</a>
		                </td>
		            </tr>
		        @endforeach
		    </tbody>
		</table>

	</div>
</div>