@extends('employer.ample.index')
<!-- START BODY TABLE CONTENT-->
@section('page_title')
  Company Profile
@endsection
@section('script')
{{--asset('js/managejob.js')--}}
{!!Html::script('js/managejob.js')!!}
@endsection
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">
      
      <div class="col-md-12 col-sm-12">
        
         <div class="my-stats" style="">
         <br>
            <div class="panel">
               <div style="background-color: #d9d9d9; color: #333;" class="panel-heading panel-heading-01"><i class="glyphicon glyphicon-list-alt"></i>My Stats
               </div>
               <div class="panel-body">
                  <div class="stats-tab">
                     <div class="btn-group " role="group" aria-label="">
                        <ul class="nav nav-tabs">
                      <li class="active"><a data-toggle="tab" href="#home">Primary Adress</a></li>
                      <li><a data-toggle="tab" href="#menu1">Company Details</a></li>
                       <li><a data-toggle="tab" href="#menu2">Company Logo</a></li>
                    </ul>
                     </div>
                  </div>

                    <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <div>
                          <div class="panel panel-default">
                             <div class="panel-heading">
                             <div class="row">
                               <div class="col-md-6">
                                  <span>Primary address</span> 
                               </div>
                               <div class="col-md-6">
                                 <button id="primary_address" class="btn btn-default pull-right edit-profile" >
                                    <i class="glyphicon glyphicon-edit"></i>Edit
                                </button>
                               </div>
                             </div>
                                
                                
                             </div>
                              <div class="panel-body" id="company_primary_inf">
                                <table class="table table-hover table-responsive">
                                    <tr>
                                       <td>Company Address:</td>
                                       <td>{{isset($empdes)?$empdes['companyaddress']:$empdes->companyaddress}}</td>
                                    </tr>
                                    <tr>
                                       <td>Country Name:</td>
                                       <td>{{isset($empdes)?$empdes['cname']:$empdes->country}}</td>
                                    </tr>
                                    <tr>
                                       <td>Division Name:</td>
                                       <td>{{isset($empdes)?$empdes['dname']:$empdes->division}}</td>
                                    </tr>
                                    <tr>
                                       <td>District Name:</td>
                                       <td>{{isset($empdes)?$empdes['disname']:$empdes->district}}</td>
                                    </tr>
                                    <tr>
                                       <td>Area Name:</td>
                                       <td>{{isset($empdes)?$empdes['aname']:$empdes->area}}</td>
                                    </tr>
                                    <tr>
                                       <td>Billing Address:</td>
                                       <td>{{isset($empdes)?$empdes['billingaddress']:$empdes->billingaddress}}</td>
                                    </tr>
                                    <tr>
                                       <td>Contact Phone:</td>
                                       <td>{{isset($empdes)?$empdes['ContactPhone']:$empdes->ContactPhone}}</td>
                                    </tr>
                                    <tr>
                                       <td>Contact Email:</td>
                                       <td>{{isset($empdes)?$empdes['ContactEmail']:$empdes->ContactEmail}}</td>
                                    </tr>
                                    <tr>
                                       <td>Website Address:</td>
                                       <td>{{isset($empdes)?$empdes['websiteaddress']:$empdes->websiteaddress}}</td>
                                    </tr>
                                    <tr>
                                       <td>Company Logo:</td>
                                       <td>{{isset($empdes)?$empdes['companylogo']:$empdes->companylogo}}</td>
                                    </tr>
                                    <tr>
                                       <td>Updated_at:</td>
                                       <td>{{isset($empdes)?$empdes['updated_at']:$empdes->updated_at}}</td>
                                    </tr>
                                 </table>
                              </div>
                              <div class="panel-footer">Panel Footer</div>
                          </div>

                  </div>
    </div>
    <div id="menu1" class="tab-pane fade">
      <div>
                          <div class="panel panel-default">
                             <div class="panel-heading">
                             <div class="row">
                               <div class="col-md-6">
                                 <span>Company details</span> 
                               </div>
                               <div class="col-md-6">
                                 <button value="{{url('editemployer/'.Auth::guard("employer")->user()->id)}}" id="company-details" class="btn btn-default pull-right edit-profile" >
                                    <i class="glyphicon glyphicon-edit"></i>Edit
                                </button>
                               </div>
                             </div>
                               
                             </div>
                              <div class="panel-body" id="employer_details_primary">
                                 
                                 <table class="table table-hover table-responsive">
                                    <tr>
                                       <td>Company Name:</td>
                                       <td>{{isset($employer_details)?$employer_details['companyname']:$empdes->companyname}}</td>
                                    </tr>
                                    <tr>
                                       <td>Alternative Company Name:</td>
                                       <td>{{isset($employer_details)?$employer_details['altcompanyname']:$empdes->altcompanyname}}</td>
                                    </tr>
                                    <tr>
                                       <td>Contact Person:</td>
                                       <td>{{isset($employer_details)?$employer_details['contactperson']:$empdes->contactperson}}</td>
                                    </tr>
                                    <tr>
                                       <td>Contact Person's Designation:</td>
                                       <td>{{isset($employer_details)?$employer_details['designation']:$empdes->designation}}</td>
                                    </tr>
                                 </table>
                              

                              </div>
                              <div class="panel-footer">Panel Footer</div>
                          </div>

                  </div>

                  <div>
                          <div class="panel panel-default">
                             <div class="panel-heading">
                               <div class="row">
                                 <div class="col-md-6">
                                   <span>Industrial type</span> 
                                 </div>
                                 <div class="col-md-6 pull-right">
                                   <button id="industrial" class="btn btn-default edit-profile pull-right" >
                                      <i class="glyphicon glyphicon-edit"></i>Edit
                                  </button>
                                 </div>
                             </div>

                             </div>
                              <div class="panel-body" id="employer_industrytype">
                                <table class="table table-hover table-responsive">
                                  
                                  <?php 
                                  $industrytype = explode(',', isset($employer_details)?$employer_details['industrytype']:$empdes->industrytype);
                                  $i=1;
                                  ?>
                                  @foreach($industrytype as $industry)
                                  <tr>
                                     <td>Industry Type ({{$i++}}):</td>

                                     <td>
                                       {{$industry}}
                                     </td>
                                     </tr>
                                     @endforeach
                                  
                                  
                                </table>
                              </div>
                            <div class="panel-footer">Panel Footer</div>
                          </div>

                  </div>

                 






    </div>


                      <div id="menu2" class="tab-pane fade">
                         <div>
                          {{-- <img id="preview2" width="100" src="images/default-thumb.png" height="100"> --}}
                          @if(isset($empdes->companylogo))
                            {!!Html::image('/storage/company_logo/'.$empdes->companylogo,'default-image',array("width"=>"200",'id'=>'preview2'))!!}
                          @else
                          {!!Html::image('images/default-thumb.png','default-image',array("width"=>"200",'id'=>'preview2'))!!}
                           @endif
                            
                      <form action="{{url('uploadimage')}}" id="logo" method="post" enctype="multipart/formdata">
                         <input type ="hidden" id="">
                         <p><input type="file" name="image" id="uimage" onchange="document.getElementById('preview2').src=window.URL.createObjectURL(this.files[0])">
                         <input type="submit" value="upload" name="image">
                      </form>
                      </div>

                  </div>
   
  
  </div>
</div>



                
                   

                  
                   
   
   
            </div>

         </div>
   </div>
</div>
         
 @include('employer.companyprofile')
 <script>
   $(document).ready(function(){

  $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
});
  function getdata(){
var url=$('#show_data').val();
//alert(url);
$.ajax({
    type:'get',
    url:url,
    success:function(d){
//console.log(d);
    }

});

  }
 getdata();
$(document).on('click','#company-details',function(){
 var url=$(this).val();
$.ajax({
  type:'get',
  url:url,
 
  success:function(d){
    //alert(d);
    $('#editcompanydetails').modal('show');
  }
})
  

 
 
})
$(document).on('click','#industrial',function(){
  
   $('#editindustry').modal('show');
 
})
$(document).on('click','#primary_address',function(){
  
   $('#editprimary_address').modal('show');
 
})
$(document).on('submit','#companydetails',function(e){
  e.preventDefault();
  var type=$(this).attr('method');
  var url=$(this).attr('action');
  //alert(url);
  $.ajax({
    type:'put',
    url:url,
    data:$(this).serialize(),
    success:function(d){
      //console.log(d);
    //alert(d);
     $('#employer_details_primary').load(location.href+ ' #employer_details_primary');
     $('#employer_industrytype').load(location.href+ ' #employer_industrytype');
     $('#company_primary_inf').load(location.href+ ' #company_primary_inf');
     getdata();
    }
  })

})
$(document).on('submit','#logo',function(e){
  e.preventDefault()
  url=$(this).attr('action');

$.ajax({

    url: url,  
    method:"POST",  
    data:new FormData(this),
    contentType:false,
    processData:false,
     success:function(d){
    console.log(d);
     }

})

})

   })
   </script>
   @endsection
