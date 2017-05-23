<!DOCTYPE html>
<html lang="en">
<head>
    <!--<meta http-equiv="X-UA-Compatible" content="IE=edge">-->
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <meta charset="utf-8"/>
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Bootstrap Jquery -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    
</head>

<body>
    <div class="container">
    	<div class="row">
    		<div class="col-md-12">
                <div class="well">
                    <h3>Personal Details</h3>
                    <p class="pull-right"><span style="color:red; font-size: 14px; ">*</span>Required Fields <span style="color:green; font-size: 14px;">*</span>Special Instructions</p> 
                    {!! Form::open(array('url' =>'', 'name' => '', 'method' => '', 'id' => '')) !!}
                        <div class="form-group">
                            {{ Form::label('first_name', 'First Name:', ['class' => 'control-label']) }}
                            {{ Form::text('first_name', null, array('class' => 'form-control')) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('last_name', 'Last Name:', ['class' => 'control-label']) }}
                            {{ Form::text('last_name', null, array('class' => 'form-control')) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('father_name', 'Father\'s Name:', ['class' => 'control-label']) }}
                            {{ Form::text('father_name', null, array('class' => 'form-control')) }}
                        </div>
                        
                        <div class="form-group">
                            {{ Form::label('mother_name', 'Mother\'s Name:', ['class' => 'control-label']) }}
                            {{ Form::text('mother_name', null, array('class' => 'form-control')) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('dob', 'Date of Birth:', ['class' => 'control-label']) }}
                            {{ Form::text('dob', null, array('class' => 'form-control')) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('gender', 'Gender:', ['class' => 'control-label']) }}
                            {{ Form::select('gender',array(''=>'Select', 'male'=>'Male','female'=>'Female'),null, array('class' => 'form-control')) }}
                        </div>
                         <div class="form-group">
                            {{ Form::label('marital_status', 'Marital Status:', ['class' => 'control-label']) }}
                            {{ Form::select('marital_status',array(''=>'Select', 'married'=>'Married','unmarried'=>'Unmarried', 'single'=>'Single'),null, array('class' => 'form-control')) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('nationality', 'Nationality:', ['class' => 'control-label']) }}
                            {{ Form::checkbox('nationality', 'Bangladeshi', true ) }} Bangladeshi
                            {{ Form::text('nationality', null, array('class' => 'form-control', 'placeholder'=>'For Other Country Please Type')) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('national_id', 'National Id:', ['class' => 'control-label']) }}
                            {{ Form::text('national_id', null, array('class' => 'form-control')) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('religion', 'Religion:', ['class' => 'control-label']) }}
                            {{ Form::text('religion', null, array('class' => 'form-control')) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('present_address', 'Present Address:', ['class' => 'control-label']) }}
                            {{ Form::textarea('present_address', null, array('class' => 'form-control')) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('permanent_address', 'Permanent Address:', ['class' => 'control-label']) }}
                            {{ Form::textarea('permanent_address', null, array('class' => 'form-control')) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('current_location', 'current_location : ', ['class' => 'control-label']) }}
                            {{ Form::checkbox('current_location', 'Inside Bangladesh', true ) }} Inside Bangladesh
                            {{ Form::checkbox('current_location', 'Outside Bangladesh') }} Outside Bangladesh
                            {{ Form::select('area',array(''=>'Select', 'dhaka'=>'Dhaka','khulna'=>'Khulna', 'bagerhat'=>'Bagerhat'),null, array('class' => 'form-control')) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('mobile1', 'Mobile-1:', ['class' => 'control-label']) }}
                            {{ Form::text('mobile1', null, array('class' => 'form-control', 'placeholder' => 'Personal')) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('mobile2', 'Mobile-2:', ['class' => 'control-label']) }}
                            {{ Form::text('mobile2', null, array('class' => 'form-control', 'placeholder' => 'Home')) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('mobile3', 'Mobile-3:', ['class' => 'control-label']) }}
                            {{ Form::text('mobile3', null, array('class' => 'form-control', 'placeholder' => 'Office')) }}
                        </div>
                        <p>[*Do not enter/provide more than one e-mail address in either of the fields]</p>
                        <div class="form-group">
                            {{ Form::label('email', 'Email:', ['class' => 'control-label']) }}
                            {{ Form::text('email', null, array('class' => 'form-control', 'placeholder' => 'Email Address')) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('alter_email', 'Alternative Email:', ['class' => 'control-label']) }}
                            {{ Form::text('alter_email', null, array('class' => 'form-control', 'placeholder' => 'Alternative Email Address')) }}
                        </div>


                        <div class="form-group">
                            {{ Form::submit('Update Information', array('class' => 'btn btn-success pull-right btn-lg')) }}
                        </div>


                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</body>
</html>