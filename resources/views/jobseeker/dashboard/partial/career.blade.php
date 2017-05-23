<div class="modal fade common-modal" id="carapp" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Carrer and Application Information</h4>
        </div>
        <div class="modal-body">

	









		<div class='row'>
		<div class="col-md-12">
		<div class='well'>
                    <p class="pull-right"><span style="color:red; font-size: 14px; ">*</span>Required Fields <span style="color:green; font-size: 14px;">*</span>Special Instructions</p> 
                    {!! Form::open(array('url' =>'/jobseeker/infoupdate', 'name' => '', 'method' => 'post', 'id' => '','class'=>'careerupdate')) !!}
                    {{ Form::text('action', 'cinfoupdate', array('class' => 'form-control hidden',)) }}
                    <meta name="csrf-token" content="{{ csrf_token() }}">



                  <div class="form-group">
                    {{ Form::label('objective', 'Objective:', ['class' => 'control-label']) }}
                    {{ Form::textarea('objective',count($items)>1?$items[0]->career_objective:NULL, array('class' => 'form-control objective')) }}
                  </div>
                    {{Form::hidden('id',count($items)>1?$items[0]->id:NULL,['id'=>'id'])}}
                    {{Form::hidden('jobseeker_id',Auth::guard("jobseeker")->user()->id,['id'=>'id'])}}
                <div class="form-group">
                {{ Form::label('career_summary', 'Career Summary:', ['class' => 'control-label']) }}
                {{Form::text('career_summary',count($items)>1?$items[0]->career_summary:NULL,['class' => 'form-control'])}}
                </div>
                              <div class="form-group">
                {{ Form::label('special_qualification', 'Special qualification:', ['class' => 'control-label']) }}
                {{Form::text('special_qualification',count($items)>1?$items[0]->special_qualification:NULL,['class' => 'form-control'])}}
                </div>
                <div class="form-group">
                {{ Form::label('preferred_job_category', 'Preferred job category:', ['class' => 'control-label']) }}
                {{Form::text('preferred_job_category',count($items)>1?$items[0]->preferred_job_category:NULL,['class' => 'form-control'])}}
                </div>
                              <div class="form-group">
                {{ Form::label('preferred_district', 'Preferred district:', ['class' => 'control-label']) }}
                {{Form::text('preferred_district',count($items)>1?$items[0]->preferred_district:NULL,['class' => 'form-control'])}}
                </div>
                <div class="form-group">
                {{ Form::label('preferred_division', 'Preferred division:', ['class' => 'control-label']) }}
                {{Form::text('preferred_division',count($items)>1?$items[0]->preferred_division:NULL,['class' => 'form-control'])}}
                </div>
                <div class="form-group">
                {{ Form::label('preferred_organization_type', 'Preferred organization type:', ['class' => 'control-label']) }}
                {{Form::text('preferred_organization_type',count($items)>1?$items[0]->preferred_organization_type:NULL,['class' => 'form-control'])}}
                </div>
         
                  <div class="form-group">
                      {{ Form::label('present_salary', 'Present Salary:', ['class' => 'control-label']) }}
                      {{ Form::text('present_salary',count($items)>1?$items[0]->presentsalary:NULL, array('class' => 'form-control', 'placeholder'=>'Amount in BDT')) }} Tk./Month
                  </div>
                  <div class="form-group">
                      {{ Form::label('expected_salary', 'Expected Salary:', ['class' => 'control-label']) }}
                      {{ Form::text('expected_salary',count($items)>1?$items[0]->expectedsalary:NULL, array('class' => 'form-control', 'placeholder'=>'Amount in BDT')) }} Tk./Month
                  </div>
                  <div class="form-group">
                      {{ Form::label('available_for', 'Looking For : ', ['class' => 'control-label']) }}
                      
                      {{ Form::radio('looking_for', 'entry','entry'?true:false ) }} Entry Level 
                      {{ Form::radio('looking_for', 'mid','mid'?true:false) }} Mid Level 
                      {{ Form::radio('looking_for', 'top','top'?true:false) }} Top Level 
                  </div>
                  
                  <div class="form-group">
                      {{ Form::label('available_for', 'Available For : ', ['class' => 'control-label']) }}
                      
                      {{ Form::radio('available_for', 'fulltime','fulltime'?true:false ) }} Full Time 
                      {{ Form::radio('available_for', 'partime','partime'?true:false) }} Part Time  
                  </div>
                  <br>
            <div class="form-group">
                {{ Form::button('<span class="glyphicon glyphicon-retweet"> Update information</span>', array('class' => 'btn btn-success pull-right btn-md ','type'=>'submit','id'=>'')) }} 
            </div>

        {!! Form::close() !!}  
      </div>
      
  </div>

  </div>
  </div>

  <div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>

</div>

</div>

</div>