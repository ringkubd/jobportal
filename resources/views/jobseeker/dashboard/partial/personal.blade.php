{{-- preferred area modal content start --}}
<style>
	.alink{
		cursor:pointer;
	}
</style>

 <!-- Modal -->
  <div class="modal fade" id="jobarea"  role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Preferred Area</h4>
        </div>
        <div class="modal-body">
          

	<div class="row">
		<div class="col-md-12">
		{!! Form::open(array('url' =>'/jobseeker/infoupdate', 'name' => '', 'method' => 'post', 'id' => '','class'=>'pinfoupdate')) !!}
                    {{ Form::text('action', 'painfoupdate', array('class' => 'form-control hidden',)) }}
                    <meta name="csrf-token" content="{{ csrf_token() }}">


			<div class="well well-sm text-center">
				{{-- <h3>Preferred Areas</h3> --}}
			</div>
			<h3>Preferred Job Categories</h3>
			<p class='text-success'><i>Preferred Job Category represents your desired sector(s) to work. (You can select maximum 2 Job Categories.)</i></p>
			<div class="well border">
				<div class="form-group sweet">
					{{ Form::checkbox('A/F','', null, ['class' => '','id'=>'ac']) }}
					{!! Form::label('A/F','Accounting/Finance')!!}
				</div>
				
				<div class="form-group">
					{{ Form::checkbox('A', 1, null, ['class' => '','id'=>'ag']) }}
					{!! Form::label('A','Agro (Plant/Animal/Fisheries)')!!}
				</div>
				
				<div class="form-group">
					{{ Form::checkbox('b', 1, null, ['class' => '','id'=>'ba']) }}
					{!! Form::label('b','Bank/Non-Bank Fin. Institution')!!}
				</div>
			</div>
			<h4><i>Selected Job Categories</i></h4>
			<div class="well">
				<strong class='acs' ><span class='bg-success '> Acconting/Finance </span><span class="glyphicon glyphicon-remove alink"></span></strong>
				<strong class="ags" ><span class='bg-success '> Agro (Plant/Animal/Fisheries) </span><span class="glyphicon glyphicon-remove alink"></span></strong>
				<strong class="bas"><span class='bg-success '> Bank/Non-Bank Fin. Institution </span><span class="glyphicon glyphicon-remove alink"></span></strong>
			</div>
			<hr>
			<h3>Preferred Job Location</h3>
			<p class='text-success'><i>Preferred Job Location defines the geographical place where you prefer to work.</i></p>
			<p><b>Inside Bangladesh:</b> (You can add maximum 15 Districts.)</p>
			{{ Form::radio('bd', 1, true, ['class' => '']) }}
			{!! Form::label('bd','Anywhere in Bangladesh')!!}

			{{ Form::radio('bd', 1, null, ['class' => '','id'=>'add-district']) }}
			{!! Form::label('bd','Add districts')!!}

			<div class="input-group">
			 {{--  <input type="text" class="form-control" placeholder="Recipient's username" aria-describedby="basic-addon2"> --}}
			  {{Form::text('jlocation',null,['class'=>'form-control'])}}
			  {{-- <span class="input-group-addon" id="basic-addon2">Add</span> --}}
			  {{ Form::label('addon','Add',['class'=>'input-group-addon'])}}
			  </div>
			  
			  
			  <div id="add-district-box">
			  <h3>Added locations</h3>
			  <p><b>Inside Bangladesh:</b> (You can add maximum 15 Districts.)</p>
			  <div class="input-group">
			 {{--  <input type="text" class="form-control" placeholder="Recipient's username" aria-describedby="basic-addon2"> --}}
			  {{Form::text('jlocation',null,['class'=>'form-control'])}}
			  {{-- <span class="input-group-addon" id="basic-addon2">Add</span> --}}
			  {{ Form::label('addon','Add',['class'=>'input-group-addon'])}}
			  </div>
			  </div>
			  
			<br>
			<div class="form-group">
			 {{-- {{ Form::button('<span class="glyphicon glyphicon-remove">Close</span>', array('class' => 'btn  btn-danger pull-right btn-md ','type'=>'submit','id'=>'close')) }} --}}
                {{ Form::button('<span class="glyphicon glyphicon-retweet"> Update information</span>', array('class' => 'btn btn-success pull-right btn-md ','type'=>'submit','id'=>'')) }} 
                
            </div>
			{!! Form::close() !!}
		</div>
	</div>






</div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>


{{-- preferred area modal content End --}}









	


