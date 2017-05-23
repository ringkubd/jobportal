<div class="modal fade" id="carapp" role="dialog">
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
                    {!! Form::open(array('url' =>'/jobseeker/infoupdate', 'name' => '', 'method' => 'post', 'id' => '','class'=>'pinfoupdate')) !!}
                    {{ Form::text('action', 'cinfoupdate', array('class' => 'form-control hidden',)) }}
                    <meta name="csrf-token" content="{{ csrf_token() }}">



                        <div class="form-group">
                                  {{ Form::label('objective', 'Objective:', ['class' => 'control-label']) }}
                                  {{ Form::textarea('objective',isset($items)?$items[0]->career_objective:NULL, array('class' => 'form-control objective')) }}
                              </div>
                              {{Form::hidden('id',isset($items)?$items[0]->id:NULL,['id'=>'id'])}}
                              {{Form::hidden('jobseeker_id',Auth::guard("jobseeker")->user()->id,['id'=>'id'])}}
                <div class="form-group">
                {{ Form::label('career_summary', 'Career Summary:', ['class' => 'control-label']) }}
                {{Form::text('career_summary',isset($items)?$items[0]->career_summary:NULL,['class' => 'form-control'])}}
                </div>
                              <div class="form-group">
                {{ Form::label('special_qualification', 'Special qualification:', ['class' => 'control-label']) }}
                {{Form::text('special_qualification',isset($items)?$items[0]->special_qualification:NULL,['class' => 'form-control'])}}
                </div>
                <div class="form-group">
                {{ Form::label('preferred_job_category', 'Preferred job category:', ['class' => 'control-label']) }}
                {{Form::text('preferred_job_category',isset($items)?$items[0]->preferred_job_category:NULL,['class' => 'form-control'])}}
                </div>
                              <div class="form-group">
                {{ Form::label('preferred_district', 'Preferred district:', ['class' => 'control-label']) }}
                {{Form::text('preferred_district',isset($items)?$items[0]->preferred_district:NULL,['class' => 'form-control'])}}
                </div>
                <div class="form-group">
                {{ Form::label('preferred_division', 'Preferred division:', ['class' => 'control-label']) }}
                {{Form::text('preferred_division',isset($items)?$items[0]->preferred_division:NULL,['class' => 'form-control'])}}
                </div>
                <div class="form-group">
                {{ Form::label('preferred_organization_type', 'Preferred organization type:', ['class' => 'control-label']) }}
                {{Form::text('preferred_organization_type',isset($items)?$items[0]->preferred_organization_type:NULL,['class' => 'form-control'])}}
                </div>
                              
                              
                              
                              
                              <div class="form-group">
                                  <a href="">What is objective?</a>
                                  <h3>Example: </h3><a href="">Good Example </a><a href="">Bad Example </a>
                              </div>
                              <div class="form-group">
                                  {{ Form::label('present_salary', 'Present Salary:', ['class' => 'control-label']) }}
                                  {{ Form::text('present_salary',isset($items)?$items[0]->presentsalary:NULL, array('class' => 'form-control', 'placeholder'=>'Amount in BDT')) }} Tk./Month
                              </div>
                              <div class="form-group">
                                  {{ Form::label('expected_salary', 'Expected Salary:', ['class' => 'control-label']) }}
                                  {{ Form::text('expected_salary',isset($items)?$items[0]->expectedsalary:NULL, array('class' => 'form-control', 'placeholder'=>'Amount in BDT')) }} Tk./Month
                              </div>
                              <div class="form-group">
                                  {{ Form::label('available_for', 'Looking For : ', ['class' => 'control-label']) }}
                                  
                                  {{ Form::radio('looking_for', 'entry',$items[0]->lookingfor=='entry'?true:false ) }} Entry Level 
                                  {{ Form::radio('looking_for', 'mid',$items[0]->lookingfor=='mid'?true:false) }} Mid Level 
                                  {{ Form::radio('looking_for', 'top',$items[0]->lookingfor=='top'?true:false) }} Top Level 
                              </div>
                              
                              <div class="form-group">
                                  {{ Form::label('available_for', 'Available For : ', ['class' => 'control-label']) }}
                                  
                                  {{ Form::radio('available_for', 'fulltime',$items[0]->availablefor=='fulltime'?true:false ) }} Full Time 
                                  {{ Form::radio('available_for', 'partime',$items[0]->availablefor=='partime'?true:false) }} Part Time  
                              </div>
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