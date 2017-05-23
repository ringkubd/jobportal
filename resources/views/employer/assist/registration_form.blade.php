@extends('employer.ample.index')
<!-- START BODY TABLE CONTENT-->
@section('page_title')
  Company Profile
@endsection
@section('script')
{{--asset('js/managejob.js')--}}
{!!Html::script('js/managejob.js')!!}
@endsection
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">

<div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
<div class="panel panel-default">
	<div class="panel-heading">
    		<h3 class="panel-title">Register your assistant</h3>
 			</div>
 			<div class="panel-body">
    		<form role="form" action="{{url('employer/registerassis/create')}}" method="post">
            {{csrf_field()}}
    			
				<div class="form-group">
					<input type="text" name="assists_name" id="name" class="form-control input-sm" placeholder="Last Name">
				</div>
    				

    			<div class="form-group">
    				<input type="email" name="assists_email" id="email" class="form-control input-sm" placeholder="Email Address">
    			</div>

    			<div class="row">
    				<div class="col-xs-6 col-sm-6 col-md-6">
    					<div class="form-group">
    						<input type="password" name="assists_password" id="password" class="form-control input-sm" placeholder="Password">
    					</div>
    				</div>
    				<div class="col-xs-6 col-sm-6 col-md-6">
    					<div class="form-group">
    						<input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-sm" placeholder="Confirm Password">
    					</div>
    				</div>
    			</div>
    			
    			<input type="submit" value="Register" class="btn btn-info btn-block">
    		
    		</form>
    	</div>
	</div>
</div>
    


@endsection