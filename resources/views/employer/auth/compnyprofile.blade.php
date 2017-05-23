<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        
<div class="well">
        <h3>Company Details</h3>
        {!! Form::open() !!}
        <div class="form-group">
            {{ Form::label('companyname', 'Company Name', ['class' => 'control-label']) }}
            {{ Form::text('companyname', null, array('class' => 'form-control','raedonly'=>'readonly')) }}
        </div>
        <div class="form-group">
            {{ Form::label('altcompanyname', 'Alternative Company Name', ['class' => 'control-label']) }}
            {{ Form::text('altcompanyname', null, array('class' => 'form-control')) }}
        </div>
        <div class="form-group">
            {{ Form::label('contactperson', 'Contact Person', ['class' => 'control-label']) }}
            {{ Form::select('contactperson', ['a' => 'alex', 'l' => 'laravel'], null, ['placeholder' => 'select user name','class'=>'form-control'])}}
        </div>
        <div class="form-group">
            {{ Form::label('designation', 'Contact Person\'s Designation', ['class' => 'control-label']) }}
            {{ Form::text('designation', null, array('class' => 'form-control')) }}
        </div>
        <p>N.B. During your job posting, the system will provide you the option whether to display your Company's original name or any alternative name in your published job. If you don't want to show your company name then you can use your given alternative name like, 'A Leading Manufacturing Company' or 'A Leading Multinational Company' etc.</p>
      </div>
      <div class="well">
        <h3>Industry Type </h3>
        <p>You can select multiple industry type regarding your business</p>
        <div data-spy="scroll" data-target="#myScrollspy" data-offset="20" style="border: 1px solid #DDD; padding: 10px;">
          <div>
            <div class="form-group">            
              {{ Form::checkbox('AdvertisingAgeny', 'Advertising Ageny') }}
              {{ Form::label('AdvertisingAgeny', 'Advertising Ageny', ['class' => 'control-label']) }}  
            </div>
            <div class="form-group">
              {{ Form::checkbox('Indenting', 'Indenting') }}
                {{ Form::label('Indenting', 'Indenting', ['class' => 'control-label']) }}         
            </div>
            <div class="form-group">
              {{ Form::checkbox('IndentingFirm', 'Indenting Firm') }}
                {{ Form::label('IndentingFirm', 'Indenting Firm', ['class' => 'control-label']) }}          
            </div>
            <div class="form-group">
              {{ Form::checkbox('IndentingFirm', 'Indenting Firm') }}
                {{ Form::label('IndentingFirm', 'Indenting Firm', ['class' => 'control-label']) }}          
            </div>
            <div class="form-group">
              {{ Form::checkbox('IndentingFirm', 'Indenting Firm') }}
                {{ Form::label('IndentingFirm', 'Indenting Firm', ['class' => 'control-label']) }}          
            </div>
            <div class="form-group">
              {{ Form::checkbox('IndentingFirm', 'Indenting Firm') }}
                {{ Form::label('IndentingFirm', 'Indenting Firm', ['class' => 'control-label']) }}          
            </div>
            <div class="form-group">
              {{ Form::checkbox('IndentingFirm', 'Indenting Firm') }}
                {{ Form::label('IndentingFirm', 'Indenting Firm', ['class' => 'control-label']) }}          
            </div>
          </div>          
        </div>
        <p>Selected Industries</p>
        ........................................................................
        <div class="form-group">
            {{ Form::label('businessdescription', 'Business Description', ['class' => 'control-label']) }}
            {{ Form::textarea('businessdescription', null, array('class'=>'form-control'))}}
        </div>
      </div>
      <div class="well">
        <h3>Primary Contact Details</h3>
        <div class="form-group">
            {{ Form::label('CompanyAddress', 'Company Address', ['class' => 'control-label']) }}
            {{ Form::text('CompanyAddress', null, array('class' => 'form-control')) }}
        </div>
        <div class="form-group">
            {{ Form::label('country', 'Country', ['class' => 'control-label']) }}
            {{ Form::select('country', ['a' => 'alex', 'l' => 'laravel'], null, ['placeholder' => 'select CountryCity','class'=>'form-control'])}}
        </div>
        <div class="form-group">
            {{ Form::label('city', 'City', ['class' => 'control-label']) }}
            {{ Form::select('city', ['a' => 'alex', 'l' => 'laravel'], null, ['placeholder' => 'select City','class'=>'form-control'])}}
        </div>
        <div class="form-group">
            {{ Form::label('area', 'Area', ['class' => 'control-label']) }}
            {{ Form::select('area', ['a' => 'alex', 'l' => 'laravel'], null, ['placeholder' => 'select Area','class'=>'form-control'])}}
        </div>
        <div class="form-group">
            {{ Form::label('BillingAddress', 'Billing Address', ['class' => 'control-label']) }}
            {{ Form::text('BillingAddress', null, array('class' => 'form-control')) }}
        </div>
        <div class="form-group">
            {{ Form::label('ContactPhone', 'Contact Phone', ['class' => 'control-label']) }}
            {{ Form::text('ContactContact EmailPhone', null, array('class' => 'form-control')) }}
        </div>
        <div class="form-group">
            {{ Form::label('ContactEmail', 'Contact Email', ['class' => 'control-label']) }}
            {{ Form::text('ContactEmail', null, array('class' => 'form-control')) }}
        </div>
        <div class="form-group">
            {{ Form::label('WebsiteAddress', 'Website Address (URL)', ['class' => 'control-label']) }}
            {{ Form::text('WebsiteAddress', null, array('class' => 'form-control')) }}
        </div>
        <div class="form-group">
          {{ Form::label('CompanyLogo', 'Company Logo : ', ['class' => 'control-label']) }}
            [<a title="Manage Logos" style="text-decoration: none; cursor: pointer; color:#333;" href="#" >Manage Logos</a>]
        </div>        
      </div>      
      <div class="form-group">
          {{ Form::submit('Update Account Info', array('class' => 'btn btn-success btn-block btn-lg')) }}
      </div>
    {!! Form::close() !!}
    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>