<div class="row">
    <div class="small-12 large-12 columns">
        <h1>All People</h1>
        <table>
            <thead>
                <tr>
                    <td>First Name</td>
                    <td>Last Name</td>
                    <td>Actions</td>
                </tr>
            </thead>
            <tbody>
                @foreach($people as $key => $value)
                    <tr>
                        <td>{{ $value->FirstName }}</td>
                        <td>{{ $value->LastName }}</td>
                        <td>
                            <a class="list-bt button tiny" href="{{ URL::route('people.show', $value->id) }}">View</a>
                            {{ Form::open(array('url' => 'people/' . $value->id)) }}
                                {{ Form::hidden('_method', 'DELETE') }}
                                {{ Form::submit('Delete', array('class' => 'list-bt button tiny alert')) }}
                            {{ Form::close() }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <a class="button" href="{{ URL::route('people.create') }}">Create New Person</a>
    </div>
</div>