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
                            {{ Form::label('objective', 'Objective:', ['class' => 'control-label']) }}
                            {{ Form::textarea('objective', null, array('class' => 'form-control')) }}
                        </div>
                        <div class="form-group">
                            <a href="">What is objective?</a>
                            <h3>Example: </h3><a href="">Good Example </a><a href="">Bad Example </a>
                        </div>
                        <div class="form-group">
                            {{ Form::label('present_salary', 'Present Salary:', ['class' => 'control-label']) }}
                            {{ Form::text('present_salary', null, array('class' => 'form-control', 'placeholder'=>'Amount in BDT')) }} Tk./Month
                        </div>
                        <div class="form-group">
                            {{ Form::label('expected_salary', 'Expected Salary:', ['class' => 'control-label']) }}
                            {{ Form::text('expected_salary', null, array('class' => 'form-control', 'placeholder'=>'Amount in BDT')) }} Tk./Month
                        </div>
                        <div class="form-group">
                            {{ Form::label('looking_for', 'Looking For : ', ['class' => 'control-label']) }}
                            {{ Form::radio('looking_for', 'Entry Level', true) }} Entry Level 
                            {{ Form::radio('looking_for', 'Mid Level') }} Mid Level 
                            {{ Form::radio('looking_for', 'Top Level') }} Top Level                             
                        </div>
                        <div class="form-group">
                            {{ Form::label('available_for', 'Available For : ', ['class' => 'control-label']) }}
                            {{ Form::radio('available_for', 'Full Time', true) }} Full Time 
                            {{ Form::radio('available_for', 'Part Time') }} Part Time 
                            {{ Form::radio('available_for', 'Contract') }} Contract 
                        </div>
                        <hr>



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