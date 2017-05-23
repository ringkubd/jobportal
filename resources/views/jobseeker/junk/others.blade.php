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
                    <h3 class="text-center">Other Relevent Informations</h3>
                    <p class="text-center">Your Personal Informations</p>
                    {!! Form::open(array('url' =>'', 'name' => '', 'method' => '', 'id' => '')) !!}
                        <div class="form-group">
                            {{ Form::label('career_summary', 'Career Summary:', ['class' => 'control-label']) }}
                            {{ Form::textarea('career_summary', null, array('class' => 'form-control')) }}
                        </div>
                        <div class="form-group">
                            <a href="">What is Career?</a>
                            <h3>Example: </h3><a href="">Good Example </a><a href="">Bad Example </a>
                        </div>
                        <div class="form-group">
                            {{ Form::label('special_qualification', 'Special Qualification:', ['class' => 'control-label']) }}
                            {{ Form::textarea('special_qualification', null, array('class' => 'form-control')) }}
                        </div>
                        <div class="form-group">
                            <a href="">What is Special Qualification?</a>
                            <h3>Example: </h3><a href="">Good Example </a><a href="">Bad Example </a>
                        </div>
                        <div class="form-group">
                            {{ Form::label('keyowrds', 'Keywords:', ['class' => 'control-label']) }}
                            {{ Form::text('keyowrds', null, array('class' => 'form-control')) }}
                        </div>
                        <div class="form-group">
                            <a href="">What is Keywords?</a>
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
