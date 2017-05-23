<div class="modal fade" id="emp_profile" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Company Name:<span id="company_name"></span></h4>
        </div>
        <div class="modal-body">


    	<div class="row">
    		<div class="col-md-12">
                <div class="well">


                    <h3>Employer Personal Details</h3>
                    {!! Form::open(array('url' =>'/personalinfo', 'name' => '', 'method' => 'POST', 'id' => 'jobpersubmit')) !!}

                        
					
						<!-- hidden id field -->
                        {{ Form::hidden('employer_id', null, array('class' => 'form-control','id'=>'empprofileid')) }}
						
                        <div class="form-group">
                            {{ Form::label('username', 'User Name:', ['class' => 'control-label']) }}
                            {{ Form::text('username', null, array('class' => 'form-control','id' => 'username')) }}
                        </div>
                        
                        <div class="form-group">
                            {{ Form::label('email', 'Email:', ['class' => 'control-label']) }}
                            {{ Form::text('email', null, array('class' => 'form-control','id' => 'useremail')) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('companyname', 'Company Name:', ['class' => 'control-label']) }}
                            {{ Form::text('companyname', null, array('class' => 'form-control','id'=>'companyname')) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('altcompanyname', 'Alternative Company Name:', ['class' => 'control-label']) }}
                            {{ Form::text('altcompanyname',null, array('class' => 'form-control','id'=>'altcompanyname')) }}
                        </div>
						
                         <div class="form-group">
                            {{ Form::label('contact_person', 'Contact Person:', ['class' => 'control-label']) }}
                            {{ Form::text('contact_person',null, array('class' => 'form-control','id'=>'contact_person')) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('designation', 'Designation:', ['class' => 'control-label']) }}
                            {{ Form::text('designation',null, array('class' => 'form-control','id'=>'desig')) }}
                        </div>				
						
                        <div class="form-group">
                            {{ Form::label('industrytype', 'Industry Type:', ['class' => 'control-label']) }}
                            {{ Form::text('industrytype', null, array('class' => 'form-control','id'=>'indtype')) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('companyaddress', 'Company Address:', ['class' => 'control-label']) }}
                            {{ Form::textarea('companyaddress', null, array('class' => 'form-control','id'=>'companyaddress')) }}
                        </div>
						
                        <div class="form-group">
                            {{ Form::label('country', 'Country:', ['class' => 'control-label']) }}
                            {{ Form::text('country', null, array('class' => 'form-control','id'=>'country')) }}
                        </div>						
						
                        <div class="form-group">
                            {{ Form::label('division', 'Division', ['class' => 'control-label']) }}
                            {{ Form::text('division', null, array('class' => 'form-control','id' => 'division')) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('district', 'District : ', ['class' => 'control-label']) }}
                            {{ Form::text('district', null, array('class' => 'form-control','id'=>'district')) }}
                            
                        </div>
                         <div class="form-group">
                            {{ Form::label('area', 'Area : ', ['class' => 'control-label']) }}
                            {{ Form::text('area', null, array('class' => 'form-control','id'=>'area')) }}
                            
                        </div>
                        <div class="form-group">
                            {{ Form::label('billingaddress', 'Billing Address:', ['class' => 'control-label']) }}
                            {{ Form::text('billingaddress', null, array('class' => 'form-control','id'=>'billingaddress')) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('ContactPhone', 'ContactPhone:', ['class' => 'control-label']) }}
                            {{ Form::text('ContactPhone', null, array('class' => 'form-control','id'=>'ContactPhone')) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('ContactEmail', 'Contact Email:', ['class' => 'control-label']) }}
                            {{ Form::text('ContactEmail', null, array('class' => 'form-control','id'=>'ContactEmail')) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('websiteaddress', 'Website Address:', ['class' => 'control-label']) }}
                            {{ Form::text('websiteaddress', null, array('class' => 'form-control','id'=>'websiteaddress')) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('created_at', 'Created Date:', ['class' => 'control-label']) }}
                            {{ Form::text('created_at', null, array('class' => 'form-control','id'=>'created_at')) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('updated_at', 'Updated Date:', ['class' => 'control-label']) }}
                            {{ Form::text('updated_at', null, array('class' => 'form-control','id'=>'updated_at')) }}
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