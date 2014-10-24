{{ Form::open(array('route' => array('people.activities.store', $person_id))) }}
    <h1>Create Activity</h1>

    <!-- if there are creation errors, they will show here -->
    {{ HTML::ul($errors->all()) }}
 
    {{ Form::text('Name', null, array('placeholder'=>'Name')) }}
    {{ Form::textarea('Description', null, array('placeholder'=>'Description')) }}
    {{ Form::text('Type', null, array('placeholder'=>'Type')) }}
 
    {{ Form::submit('Create New Activity', array('class'=>'button'))}}
{{ Form::close() }}