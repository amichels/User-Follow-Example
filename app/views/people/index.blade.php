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
                    <a class="button tiny" href="{{ URL::route('people.show', $value->id) }}">View</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>