@extends('jobseeker.layout.index')

@section('content')
<div class="panel panel-default">
  <div class="panel-heading">Career & Application Information<a href="#" class="pull-right"><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true" data-target="#personal_details" data-toggle="modal"></i></a></div>
  <div class="panel-body">


            <!-- Modal -->
            <div class="modal fade" id="personal_details" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Career & Application Information</h4>
                  </div>
                  <div class="modal-body">
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
                        <div class="form-group">
                            {{ Form::submit('Update Information', array('class' => 'btn-success form-control')) }}
                        </div>

                    {!! Form::close() !!}  
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>


                    
  </div>
</div>
@endsection
