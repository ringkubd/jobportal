
<div class="modal fade" id="perinfo" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Personal Details</h4>
        </div>
        <div class="modal-body">


    



    	<div class="row">
    		<div class="col-md-12">
                <div class="well">
                    {{-- <h3>Personal Details</h3> --}}
                    <p class="pull-right"><span style="color:red; font-size: 14px; ">*</span>Required Fields <span style="color:green; font-size: 14px;">*</span>Special Instructions</p> 
                    {!! Form::open(array('url' =>'/jobseeker/infoupdate', 'name' => '', 'method' => 'post', 'id' => '','class'=>'pinfoupdate')) !!}
                    {{ Form::text('action', 'pinfoupdate', array('class' => 'form-control hidden',)) }}
                    <meta name="csrf-token" content="{{ csrf_token() }}">

                        {{-- <div class="form-group">
                            {{ Form::label('first_name', 'First Name:', ['class' => 'control-label']) }}
                            {{ Form::text('first_name', null, array('class' => 'form-control')) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('last_name', 'Last Name:', ['class' => 'control-label']) }}
                            {{ Form::text('last_name', null, array('class' => 'form-control')) }}
                        </div> --}}
                        <div class="form-group">
                            {{ Form::label('jobseeker_father_name', 'Father\'s Name:', ['class' => 'control-label']) }}
                            {{ Form::text('jobseeker_father_name', $personaldetails->jobseeker_father_name, array('class' => 'form-control')) }}
                        </div>
                        
                        <div class="form-group">
                            {{ Form::label('jobseeker_mother_name', 'Mother\'s Name:', ['class' => 'control-label']) }}
                            {{ Form::text('jobseeker_mother_name', $personaldetails->jobseeker_mother_name, array('class' => 'form-control')) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('jobseeker_dob', 'Date of Birth:', ['class' => 'control-label']) }}
                            {{-- {{ Form::date('jobseeker_dob', null, array('class' => 'form-control')) }} --}}
                            {{ Form::date('jobseeker_dob', $personaldetails->jobseeker_dob,array('class' => 'form-control','placeholder'=>'eg:yyyy-mm-dd')) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('jobseeker_gender', 'Gender:', ['class' => 'control-label']) }}
                            {{ Form::select('jobseeker_gender',array(''=>'Select', 'male'=>'Male','female'=>'Female'),$personaldetails->jobseeker_gender, array('class' => 'form-control')) }}
                        </div>
                         <div class="form-group">
                            {{ Form::label('jobseeker_maritalstatus', 'Marital Status:', ['class' => 'control-label']) }}
                            {{ Form::select('jobseeker_maritalstatus',array('0'=>'Select', '1'=>'Married','2'=>'Unmarried'),$personaldetails->jobseeker_maritalstatus, array('class' => 'form-control')) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('jobseeker_nationality', 'Nationality:', ['class' => 'control-label']) }}
                            {{-- {{ Form::checkbox('jobseeker_nationality', 'Bangladeshi', true ) }} Bangladeshi --}}
                            {{ Form::text(' jobseeker_nationality', $personaldetails->jobseeker_nationality, array('class' => 'form-control', 'placeholder'=>'For Other Country Please Type')) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('jobseeker_national_id_no', 'National Id:', ['class' => 'control-label']) }}
                            {{ Form::text('jobseeker_national_id_no', $personaldetails->jobseeker_national_id_no, array('class' => 'form-control')) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('jobseeker_religion', 'Religion:', ['class' => 'control-label']) }}
                            {{ Form::text('jobseeker_religion', $personaldetails->jobseeker_religion, array('class' => 'form-control')) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('jobseeker_permanent_address', 'Permanent Address:', ['class' => 'control-label']) }}
                            {{ Form::textarea('jobseeker_permanent_address', $personaldetails->jobseeker_permanent_address, array('class' => 'form-control')) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('jobseeker_current_address', 'Present Address:', ['class' => 'control-label']) }}
                            {{ Form::textarea('jobseeker_current_address', $personaldetails->jobseeker_current_address, array('class' => 'form-control')) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('current_location', 'current_location : ', ['class' => 'control-label']) }}
                            {{ Form::checkbox('current_location', 'Inside Bangladesh', true ) }} Inside Bangladesh
                            {{ Form::checkbox('current_location', 'Outside Bangladesh') }} Outside Bangladesh
                            {{ Form::select('jobseeker_current_location',array(''=>'Select', 'dhaka'=>'Dhaka','khulna'=>'Khulna', 'bagerhat'=>'Bagerhat'),$personaldetails->jobseeker_current_location, array('class' => 'form-control')) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('jobseeker_phone1', 'Mobile-1:', ['class' => 'control-label']) }}
                            {{ Form::text('jobseeker_phone1', $personaldetails->jobseeker_phone1, array('class' => 'form-control', 'placeholder' => 'Personal')) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('jobseeker_phone2', 'Mobile-2:', ['class' => 'control-label']) }}
                            {{ Form::text('jobseeker_phone2', $personaldetails->jobseeker_phone2, array('class' => 'form-control', 'placeholder' => 'Home')) }}
                        </div>
                        <p>[*Do not enter/provide more than one e-mail address in either of the fields]</p>
                        <div class="form-group">
                            {{ Form::label('jobseeker_email', 'Email:', ['class' => 'control-label']) }}
                            {{ Form::text('jobseeker_email', $personaldetails->jobseeker_email, array('class' => 'form-control', 'placeholder' => 'Email Address')) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('jobseeker_email2', 'Alternative Email:', ['class' => 'control-label']) }}
                            {{ Form::text('jobseeker_email2', $personaldetails->jobseeker_email2, array('class' => 'form-control', 'placeholder' => 'Alternative Email Address')) }}
                        </div>


                        <div class="form-group">
                            {{ Form::button('<span class="glyphicon glyphicon-retweet"> Update information</span>', array('class' => 'btn btn-success pull-right btn-md ','type'=>'submit','id'=>'')) }}                         </div>


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