@extends('index')
@section('title')
@section('style')
@section('content')
	<div class="row">
		<div class="col-md-8">
			<div class="well well-sm text-center">
				<h3>Preferred Areas</h3>
			</div>
			<h3>Preferred Job Categories</h3>
			<p class='text-success'><i>Preferred Job Category represents your desired sector(s) to work. (You can select maximum 2 Job Categories.)</i></p>
			<div class="well border">
				{{ Form::checkbox('A/F', 1, null, ['class' => '']) }}
				{!! Form::label('A/F','Accounting/Finance')!!}
				<br>
				{{ Form::checkbox('A', 1, null, ['class' => '']) }}
				{!! Form::label('A','Agro (Plant/Animal/Fisheries)')!!}
				<br>
				{{ Form::checkbox('b', 1, null, ['class' => '']) }}
				{!! Form::label('b','Bank/Non-Bank Fin. Institution')!!}

			</div>
			<h4><i>Selected Job Categories</i></h4>
			<div class="broder" style="border:1px solid gray; border-radius:5px;min-height:15px;">
				
			</div>
			<hr>
			<h3>Preferred Job Location</h3>
			<p class='text-success'><i>Preferred Job Location defines the geographical place where you prefer to work.</i></p>
			<p><b>Inside Bangladesh:</b> (You can add maximum 15 Districts.)</p>
			{{ Form::radio('bd', 1, null, ['class' => '']) }}
			{!! Form::label('bd','Anywhere in Bangladesh')!!}

			{{ Form::radio('bd', 1, null, ['class' => '']) }}
			{!! Form::label('bd','Add districts')!!}

			<div class="input-group">
			 {{--  <input type="text" class="form-control" placeholder="Recipient's username" aria-describedby="basic-addon2"> --}}
			  {{Form::text('jlocation',null,['class'=>'form-control'])}}
			  {{-- <span class="input-group-addon" id="basic-addon2">Add</span> --}}
			  {{ Form::label('addon','Add',['class'=>'input-group-addon'])}}
			  </div>
			  <h3>Added locations</h3>
			  <hr>
			  <p><b>Inside Bangladesh:</b> (You can add maximum 15 Districts.)</p>
			  <div class="input-group">
			 {{--  <input type="text" class="form-control" placeholder="Recipient's username" aria-describedby="basic-addon2"> --}}
			  {{Form::text('jlocation',null,['class'=>'form-control'])}}
			  {{-- <span class="input-group-addon" id="basic-addon2">Add</span> --}}
			  {{ Form::label('addon','Add',['class'=>'input-group-addon'])}}
			  </div>
			  <hr>
			  <h3>Preferred Organization Type</h3>
			  <p>(You can add maximum 12 organizations.)</p>
			  <div class="input-group">
			 {{--  <input type="text" class="form-control" placeholder="Recipient's username" aria-describedby="basic-addon2"> --}}
			  {{Form::text('jlocation',null,['class'=>'form-control'])}}
			  {{-- <span class="input-group-addon" id="basic-addon2">Add</span> --}}
			  {{ Form::label('addon','Add',['class'=>'input-group-addon'])}}
			  </div>
			  <h4><i>Added organizations</i></h4>
			<div class="broder" style="border:1px solid gray; border-radius:5px;min-height:15px;">
				
			</div>
			<hr>
			.
			{{-- {{ Form::button('up','update',['class'=>'btn btn-success btn-lg glyphicon glyphicon-retweet'])}}
			{{ Form::button('close','close',['class'=>'btn btn-default btn-md'])}}
 --}}
		</div>
	</div>
@endsection

