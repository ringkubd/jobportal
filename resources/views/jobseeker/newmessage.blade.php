@extends('employer.ample.index')
@section('title')
Employer Inbox
@endsection
@section('style')
{{-- {!!Html::style('css/managejobs.css')!!}  --}}
@endsection
@section('script')
{!!Html::script('js/managejob.js')!!}
{!!Html::script('js/messageControll.js')!!}
@endsection
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">

<div class="panel panel-primary">
	<div class="panel-heading">
		<div class="row">
			<div class="col-sm-4 col-sm-offset-4 text-center">
				Create a New Message
			</div>
		</div>
	</div>
	<div class="panel-body">
		<div class="row">
			<div class="col-sm-12">
				 {!! Form::open(array('url' =>'/employer/sendmessage', 'name' => '', 'method' => 'get', 'id' =>'emp_send_msg')) !!}
				 {{ csrf_field() }}

					{{ Form::label('sender_id', 'Jobs::', ['class' => 'control-label']) }}
					<div class="input-group form-group">				
						<span class="input-group-addon" id="basic-addon0">Select Job</span>
                        {{ Form::select('sender_id',$jobLists,NULL, array('class' => 'form-control','id'=>'sender_id','aria-describedby'=>"basic-addon0")) }}
					</div>


					{{ Form::label('recepent_id', 'To::', ['class' => 'control-label']) }}
					<div class="input-group form-group">				
						<span class="input-group-addon" id="basic-addon1">Select Applicants</span>
                        {{ Form::select('recepent_id',['-1'=>'Select Job First'],NULL, array('class' => 'form-control','id'=>'recepent_id','aria-describedby'=>"basic-addon1")) }}
					</div>

					{{ Form::label('subject', 'Subject::', ['class' => 'control-label']) }}

					<div class="input-group form-group">				
						<span class="input-group-addon" id="basic-addon3">Subject</span>
                        {{ Form::text('subject',Null, array('class' => 'form-control','id'=>'subject','aria-describedby'=>"basic-addon3")) }}
					</div>




					<label for="message" class="input-addon">Message::</label>
					<div class="form-group">
						{{ Form::textarea('message', null, array('class' => 'form-control','id'=>"message")) }}
					</div>

					<div class="button-group">
						{{ Form::submit('Send', array('class' => 'btn btn-primary btn-block')) }}
					</div>
					
				{!! Form::close() !!}
			</div>
		</div>
				

	</div>
	<div class="panel-footer">
		footer
	</div>
</div>

@endsection
