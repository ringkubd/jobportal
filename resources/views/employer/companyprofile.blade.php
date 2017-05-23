
{{-- ---------------------------edit company details-------------------------- --}}

<div id="editcompanydetails" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Company Details</h4>
      </div>
      <div class="modal-body">
        
<div class="well">

        {!!Form::open(['url'=>'editemployer/'.Auth::guard("employer")->user()->id,'method'=>'post','id'=>'companydetails'])!!}
        <div class="form-group">
            {{Form::hidden('show_data',url('showdata'),['id'=>'show_data'])}}
            {{Form::hidden('action',"companyinfo")}}
            {{ Form::label('companyname', 'Company Name', ['class' => 'control-label']) }}
            {{ Form::text('companyname', isset($empdes)?$empdes['companyname']:NULL, array('class' => 'form-control','raedonly'=>'readonly','id' => 'cname')) }}

        </div>
        <div class="form-group">
            {{ Form::label('altcompanyname', 'Alternative Company Name', ['class' => 'control-label']) }}
            {{ Form::text('altcompanyname', isset($empdes)?$empdes['altcompanyname']:NULL, array('class' => 'form-control')) }}
        </div>
        <div class="form-group">
            {{ Form::label('contactperson', 'Contact Person', ['class' => 'control-label']) }}
            {{ Form::text('contactperson', isset($empdes)?$empdes['contactperson']:NULL, ['placeholder' => 'select user name','class'=>'form-control'])}}
        </div>
        <div class="form-group">
            {{ Form::label('designation', 'Contact Person\'s Designation', ['class' => 'control-label']) }}
            {{ Form::text('designation', isset($empdes)?$empdes['designation']:NULL, array('class' => 'form-control')) }}
        </div>
        <p>N.B. During your job posting, the system will provide you the option whether to display your Company's original name or any alternative name in your published job. If you don't want to show your company name then you can use your given alternative name like, 'A Leading Manufacturing Company' or 'A Leading Multinational Company' etc.</p>
      </div>
      
      
       <div class="form-group">
          {{ Form::submit('Update Account Info', array('class' => 'btn btn-success btn-block btn-lg')) }}
      </div>
    {!! Form::close() !!}
       </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>



{{-- ---------------------------edit Industry type details-------------------------- --}}



<div id="editindustry" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Industry Type </h4>
      </div>
      <div class="modal-body">
        
          <div class="well">
        {!!Form::open(['url'=>'editemployer/'.Auth::guard("employer")->user()->id,'method'=>'post','id'=>'companydetails'])!!}
        <p>You can select multiple industry type regarding your business</p>
        <div data-spy="scroll" data-target="#myScrollspy" data-offset="20" style="border: 1px solid #DDD; padding: 10px;">
          <div>
            <div class="form-group"> 
            {{Form::hidden('action',"industrytype")}}
             {{Form::hidden('id',Auth::guard("employer")->user()->id,['id'=>'id'])}}           
              {{ Form::checkbox('industrytype[]', 'Advertising Ageny',isset($empdes)&&in_array('Advertising Ageny', $industrytype)?'checked':NULL )}}
              {{ Form::label('AdvertisingAgeny', 'Advertising Ageny', ['class' => 'control-label']) }}  
            </div>
            <div class="form-group">
              {{ Form::checkbox('industrytype[]', 'Indenting',isset($empdes)&&in_array('Indenting', $industrytype)?'checked':NULL) }}
                {{ Form::label('Indenting', '', ['class' => 'control-label']) }}         
            </div>
            <div class="form-group">
              {{ Form::checkbox('industrytype[]', 'Indenting Firm',isset($empdes)&&in_array('Indenting Firm', $industrytype)?'checked':NULL)}}
                {{ Form::label('IndentingFirm', 'Indenting Firm', ['class' => 'control-label']) }}          
            </div>
            <div class="form-group">
              {{ Form::checkbox('industrytype[]', 'Indenting Firm',isset($empdes)&&in_array('Indenting Firm', $industrytype)?'checked':NULL) }}
                {{ Form::label('IndentingFirm', 'Indenting Firm', ['class' => 'control-label']) }}          
            </div>
            <div class="form-group">
              {{ Form::checkbox('industrytype[]', 'Indenting Firm',isset($empdes)&&in_array('Indenting Firm', $industrytype)?'checked':NULL) }}
                {{ Form::label('IndentingFirm', 'Indenting Firm', ['class' => 'control-label']) }}          
            </div>
            <div class="form-group">
              {{ Form::checkbox('industrytype[]', 'Indenting Firm',isset($empdes)&&in_array('Indenting Firm', $industrytype)?'checked':NULL) }}
                {{ Form::label('IndentingFirm', 'Indenting Firm', ['class' => 'control-label']) }}          
            </div>
            <div class="form-group">
              {{ Form::checkbox('industrytype[]', 'Indenting Firm',isset($empdes)&&in_array('Indenting Firm', $industrytype)?'checked':NULL) }}
                {{ Form::label('IndentingFirm', 'Indenting Firm', ['class' => 'control-label']) }}          
            </div>
          </div>          
        </div>
      </div>
      
      
       <div class="form-group">
          {{ Form::submit('Update Account Info', array('class' => 'btn btn-success btn-block btn-lg')) }}
      </div>
    {!! Form::close() !!}
       </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>




{{-- ---------------------------edit primary details-------------------------- --}}

<div id="editprimary_address" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Primary Contact Details</h4>
      </div>
      <div class="modal-body">
        
           <div class="well">
        {!!Form::open(['url'=>'editemployer/'.Auth::guard("employer")->user()->id,'method'=>'post','id'=>'companydetails'])!!}
        <div class="form-group">
        {{Form::hidden('action',"primaryaddress")}}
        {{Form::hidden('id',Auth::guard("employer")->user()->id,['id'=>'id'])}}
            {{ Form::label('CompanyAddress', 'Company Address', ['class' => 'control-label']) }}
            {{ Form::text('Companyaddress', isset($empdes)?$empdes->id:NULL, array('class' => 'form-control')) }}
        </div>
        <div class="form-group">
            {{ Form::label('country', 'Country', ['class' => 'control-label']) }}
            {{ Form::select('country', isset($country)?$country:['0'=>'0'], isset($empdes->country)?$empdes->country:NULL, ['placeholder' => 'select Country','class'=>'form-control'])}}
        </div>
        <div class="form-group">
            {{ Form::label('division', 'division', ['class' => 'control-label']) }}
            {{ Form::select('division',isset($division)?$division:['0'=>'0'], isset($empdes->division)?$empdes->division:NULL, ['placeholder' => 'select Division','class'=>'form-control'])}}
        </div>
        <div class="form-group">
            {{ Form::label('district', 'District', ['class' => 'control-label']) }}
            {{ Form::select('district', isset($district)?$district:['0'=>'0'], isset($empdes->district)?$empdes->district:NULL, ['placeholder' => 'select District','class'=>'form-control'])}}
        </div>
        <div class="form-group">
            {{ Form::label('area', 'Area', ['class' => 'control-label']) }}
            {{ Form::select('area',isset($area)?$area:['0'=>'0'], isset($empdes->area)?$empdes->area:NULL, ['placeholder' => 'select Area','class'=>'form-control'])}}
        </div>
        <div class="form-group">
            {{ Form::label('BillingAddress', 'Billing Address', ['class' => 'control-label']) }}
            {{ Form::text('BillingAddress', isset($empdes->billingaddress)?$empdes->billingaddress:NULL, array('class' => 'form-control')) }}
        </div>
        <div class="form-group">
            {{ Form::label('ContactPhone', 'Contact Phone', ['class' => 'control-label']) }}
            {{ Form::text('ContactPhone', isset($empdes->ContactPhone)?$empdes->ContactPhone:NULL, array('class' => 'form-control')) }}
        </div>
        <div class="form-group">
            {{ Form::label('ContactEmail', 'Contact Email', ['class' => 'control-label']) }}
            {{ Form::text('ContactEmail', isset($empdes->ContactEmail)?$empdes->ContactEmail:NULL, array('class' => 'form-control')) }}
        </div>
        <div class="form-group">
            {{ Form::label('WebsiteAddress', 'Website Address (URL)', ['class' => 'control-label']) }}
            {{ Form::text('WebsiteAddress', isset($empdes->websiteaddress)?$empdes->websiteaddress:NULL, array('class' => 'form-control')) }}
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
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>







