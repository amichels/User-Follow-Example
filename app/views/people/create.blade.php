<div class="row">
    <div class="small-12 large-12 columns">
        {{ Form::open(array('url'=>'people')) }}
            <h1>Create Person</h1>

            <!-- if there are creation errors, they will show here -->
            {{ HTML::ul($errors->all()) }}
         
            {{ Form::text('EmailAddress', null, array('placeholder'=>'Email Address')) }}
            {{ Form::text('FirstName', null, array('placeholder'=>'First Name')) }}
            {{ Form::text('LastName', null, array('placeholder'=>'Last Name')) }}
            {{ Form::text('PhoneNumber', null, array('placeholder'=>'Phone Number')) }}
            {{ Form::text('Address', null, array('placeholder'=>'Address')) }}
            {{ Form::text('State', null, array('placeholder'=>'State')) }}
            {{ Form::text('City', null, array('placeholder'=>'City')) }}
            {{ Form::text('Country', null, array('placeholder'=>'Country')) }}
            {{ Form::text('ZipCode', null, array('placeholder'=>'Zip')) }}
         
            {{ Form::submit('Create', array('class'=>'button'))}}
        {{ Form::close() }}
    </div>
</div>