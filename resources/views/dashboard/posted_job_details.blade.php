@extends('dashboard.layout.dashboard_layout')
@extends('dashboard.modal.edit_posted_job_modal')
@extends('dashboard.modal.edit_companyinfo')
@section('content')
<div class="col-md-8" id="Posted_job_details">
          <h1 class="text-center">Pending Job: {{$jobprofile_details !=false ?$jobprofile_details->total($jobprofile_details):'0'}}</h1>
          
        
            <form action="" method="get" class="form-inline">
              <div class="form-group search_div">
                <input type="text" class="form-control" name="term" id="jobseekersearch" placeholder="Search">
              </div>
            </form>
            @if($jobprofile_details !=false)
            <input type="hidden" name="" class="currentpage" value="{{$jobprofile_details->currentPage()}}">
            <input type="hidden" name="" class="pathurl" value="{{\Request::url()}}">
            <input type="hidden" name="" class="lastpage" value="{{$jobprofile_details->lastPage()}}">
            <input type="hidden" name="" class="prepageurl" value="{{$jobprofile_details->previousPageUrl()}}">
            <input type="hidden" name="" class="nextpageurl" value="{{$jobprofile_details->nextPageUrl()}}">            
            @foreach($jobprofile_details as $jobprofile_posted)
           <div class="well">
                <div class="panel panel-primary">
                  <div class="panel-heading">
                   <h2 class="panel-title">Pending Job title:<span class="jobtitle">{{$jobprofile_posted->jobtitle}}</span><a href="#" id="edit_jobs" class="pull-right" data-toggle="modal" data-target="#myModal"><i class="fa fa-edit" aria-hidden="true"></i>
</a></h2>           
                  </div>
                  <div class="panel-body">  
                  
                <table class="table table-responsive table-striped well">
                            <tr>
                                <th>Job Vacancies</th>
                                <td class="vacancies">{{$jobprofile_posted->vacancies}}</td>
                            </tr>   
                            <tr>
                                <th>Category Name:</th>
                                <td class="catagoryname">{{$jobprofile_posted->catagoryname}}
                                <input type="hidden" name="" class="categoryid" value="{{$jobprofile_posted->catagory_id}}">
                                <input type="hidden" name="" class="jobid" value="{{$jobprofile_posted->id}}"></td>
                            </tr>
                            <tr>
                                <th>Industry Type:</th>
                                <td class="industrytypenames">{{$jobprofile_posted->industrytypename}}
                                <input type="hidden" name="" class="industryid" value="{{$jobprofile_posted->industrytype_id}}"></td>
                            </tr>
                            <tr>
                                <th>Division Name</th>
                                <td class="divname">{{$jobprofile_posted->divname}}
                                <input type="hidden" name="" class="divisid" value="{{$jobprofile_posted->division_id}}"></td>
                            </tr>
                            <tr>
                                <th>District Name</th>
                                <td class="distname">{{$jobprofile_posted->distname}}
                                <input type="hidden" name="" class="disisid" value="{{$jobprofile_posted->district_id}}"></td>
                            </tr>
                            <tr>
                                <th>Job Type</th>
                                <td class="jobtypes">{{$jobprofile_posted->jobtype}}</td>
                            </tr>
                            <tr>
                                <th>Job Level</th>
                                <td class="joblevel">{{$jobprofile_posted->joblevel}}</td>
                            </tr>
                            <tr>
                                <th>Age range</th>
                                <td class="agerange">{{$jobprofile_posted->agerange}}</td>
                            </tr>
                            
                            <tr>
                                <th>Educational Qualification</th>
                                <td class="educational_qualification">{{$jobprofile_posted->educational_qualification}}</td>
                            </tr>
                            <tr>
                                <th>Job Responsivility</th>
                                <td class="job_responsibilities">{{$jobprofile_posted->job_responsibilities}}</td>
                            </tr>
                            <tr>
                                <th>Job Experiances Year</th>
                                <td class="job_experiences_year">{{$jobprofile_posted->job_experiences_year}}</td>
                            </tr>
                            <tr>
                                <th>Job Experiances Field</th>
                                <td class="job_experiences_field">{{$jobprofile_posted->job_experiences_field}}</td>
                            </tr>
                            <tr>
                                <th>Instruction</th>
                                <td class="instruction">{{$jobprofile_posted->instruction}}</td>
                            </tr>
                            <tr>
                                <th>Salary Range</th>
                                <td class="salaryrange">{{$jobprofile_posted->salaryrange}}</td>
                            </tr>

                            <tr>
                                <th>Posted date</th>
                                <td class="created_at">{{$jobprofile_posted->created_at}}</td>
                            </tr>
                            <tr>
                                <th>Deadline</th>
                                <td class="deadline">{{$jobprofile_posted->deadline}}</td>
                            </tr>


                    </table>


                </div>
            </div>

            <div class="panel panel-primary">
                  <div class="panel-heading">
                   <h2 class="panel-title">company Information :<a href="#" id="editcompany" class="pull-right" data-toggle="modal" data-target="#myModalcompany"><i class="fa fa-edit" aria-hidden="true"></i>
</a></h2>           
                  </div>
                  <div class="panel-body">
                 

                <table class="table table-responsive table-striped well">
                           <tr>
                                <th>Employer Name:</th>
                                <td class="employername">{{$jobprofile_posted->employername}}</td>
                            </tr>
                            <tr>
                                <th>Company Name:</th>
                                <td class="companyname">{{$jobprofile_posted->companyname}}</td>
                            </tr>
                            <tr>
                                <th>Contactperson</th>
                                <td class="contactperson">{{$jobprofile_posted->contactperson}}</td>
                            </tr>
                            <tr>
                                <th>Designation</th>
                                <td class="designation">{{$jobprofile_posted->designation}}</td>
                            </tr>
                            <tr>
                                <th>Company address</th>
                                <td class="companyaddress">{{$jobprofile_posted->companyaddress}}</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td class="email">{{$jobprofile_posted->email}}</td>
                            </tr> 
                            <tr>
                                <th><button class="btn btn-success pull-right job_published" value="{{$jobprofile_posted->id}}">Published</button></th>
                                <td><button class="btn btn-danger pull-right trashpostjob" value="{{$jobprofile_posted->id}}">Trash</button></td>
                            </tr> 


                    </table>

        
                </div>
            </div>
            </div>
            @endforeach
            <h6 class="text-center">{{ $jobprofile_details->links() }}</h6>
            @else
            <h1 class="text-center alert-danger">NO JOB POSTED YET</h1>
            @endif
      </div>

      </div>
</div>

	<script type="text/javascript">
		$(document).ready(function() {

      $.ajaxSetup({
         headers: {
               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });
$(document).on('click','.job_published', function() {
              var currentpage=$('.currentpage').val();
              var pathurl=$('.pathurl').val();
              var lastpage=$('.lastpage').val();
              var prepageurl=$('.prepageurl').val();
              var nextpageurl=$('.nextpageurl').val();
              var jobpub_id=$(this).val();
              var companyemail=$('.email').html();
            var jobtitle=$('.jobtitle').html();
            var contactperson=$('.contactperson').html();
          
              $.ajax({
                type:'get',
                url:'{!!URL::to('inspector/job_published')!!}',
                data:{'jobpub_id':jobpub_id,'companyemail':companyemail,'jobtitle':jobtitle,'contactperson':contactperson,'action':'publishedjobs'},
                success:function(data){
                alert('job has been published')  
                if(currentpage==1 && currentpage==lastpage) {
              window.location.href=pathurl;
              }else if(currentpage==1 && currentpage !=lastpage){
                
              window.location.href=currentpage; 

              }else if (currentpage!=1 && currentpage ==lastpage) {
              window.location.href=prepageurl;
              }else{
                location.reload();
              }
                                
                },
                error:function(){

                }
              });
        
      });

$(document).on('click','.trashpostjob', function() {
              var currentpage=$('.currentpage').val();
              var pathurl=$('.pathurl').val();
              var lastpage=$('.lastpage').val();
              var prepageurl=$('.prepageurl').val();
              var nextpageurl=$('.nextpageurl').val();  
               var jobtrash_id=$(this).val();
              $.ajax({
                type:'get',
                url:'{!!URL::to('inspector/job_published')!!}',
                data:{'jobtrash_id':jobtrash_id,'action':'jobtrash'},
                success:function(data){                    
                if(currentpage==1 && currentpage==lastpage) {
              window.location.href=pathurl;
              }else if(currentpage==1 && currentpage !=lastpage){
                
              window.location.href=currentpage; 

              }else if (currentpage!=1 && currentpage ==lastpage) {
              window.location.href=prepageurl;
              }else{
                location.reload();
              }
                },
                error:function(){

                }
              });

        
      });

//:::::::::edit job information start:::::::::::::
      
      $(document).on('click','#edit_jobs',function(e){
        e.preventDefault(); 
                var divisionid=$('.divisid').val();
                //alert(5);
                $('#division').val(divisionid);        
                var distid=$('.disisid').val();
                var opppdist=" ";
                var catid=$('.categoryid').val();
                var industryid=$('.industryid').val();
                $('#jobtitle').val($('.jobtitle').html());
                $('#jobcategory').val(catid);
                $('#Jobindustrytype').val(industryid);
                $('#JobVacancies').val($('.vacancies').html());
                $('#JobType').val($('.jobtypes').html());                
                $('#JobLevel').val($('.joblevel').html());
                $('#Agerange').val($('.agerange').html());
                $('#EducationalQualification').val($('.educational_qualification').html());
                $('#JobResponsivility').val( $('.job_responsibilities').html());
                $('#JobExperiancesYear').val($('.job_experiences_year').html());
                $('#JobExperiancesField').val( $('.job_experiences_field').html());
                $('#Instruction').val($('.instruction').html());
                $('#SalaryRange').val( $('.salaryrange').html());
                $('#Deadline').val($('.deadline').html());
          $.ajax({
                    type:'get',
                    url:'{!!URL::to('inspector/showcountry')!!}',
                    data:{'id':divisionid,'action':'showdistrict'},
                    success:function(disrespone){
                      //alert(disrespone);
                        for(var i=0;i<disrespone.length;i++){
                        if(disrespone[i].id == distid){
                        opppdist+='<option value="'+disrespone[i].id +'" selected>'+disrespone[i].name+'</option>';
                       }else{
                          opppdist+='<option value="'+disrespone[i].id +'">'+disrespone[i].name+'</option>';
                       }}
                      

                       $('.modal-content').find('#district').html(" ");
                       $('.modal-content').find('#district').append(opppdist);
                    },
                    error:function(){

                    }
                }); 

      });

//:::::::::job information edit end:::::::::::::

//onchange division and show district.start..........

       $(document).on('change','#division',function(){
      var divisionid = $(this).val();
           //var countryid=$('.countrid').val();
            var opp=" ";

            $.ajax({
                type:'get',
                url:'{!!URL::to('inspector/showcountry')!!}',
                data:{'id':divisionid,'action':'showdistrict'},
                success:function(data){
                    opp+='<option value="-1" selected disabled>Select division</option>';
                    for(var i=0;i<data.length;i++){
                    opp+='<option value="'+data[i].id +'">'+data[i].name+'</option>';
                   }
                   $('.modal-content').find('#district').html(" ");
                   $('.modal-content').find('#district').append(opp);
                },
                error:function(){

                }
            });
        });
        
//onchange division and show district.end..........

//:::::::::::save job information start::::::::::

$(document).on('click','#savejobinfo',function (data) {
   var vacancies=$('#JobVacancies').val();
   var jobtitle=$('#jobtitle').val();
     var divisin_id=$('#division').val();
      var district=$('#district').val();
      var jobcategory=$('#jobcategory').val();
      var Jobindustrytype=$('#Jobindustrytype').val();
      var JobType=$('#JobType').val();                
      var JobLevel=$('#JobLevel').val();
      var Agerange=$('#Agerange').val();
      var EducationalQualification=$('#EducationalQualification').val();
      var JobResponsivility=$('#JobResponsivility').val();
      var JobExperiancesYear=$('#JobExperiancesYear').val();
      var JobExperiancesField=$('#JobExperiancesField').val();
      var Instruction=$('#Instruction').val();
      var SalaryRange=$('#SalaryRange').val();
      var Deadline=$('#Deadline').val();
      var jobid=$('.jobid').val();
       $.ajax({
                type:'get',
                url:'{!!URL::to('inspector/job_published')!!}',
                data:{'jobid':jobid,'divisin_id':divisin_id,'district':district,'jobcategory':jobcategory,'Jobindustrytype':Jobindustrytype,'JobType':JobType,'JobLevel':JobLevel,'Agerange':Agerange,'EducationalQualification':EducationalQualification,'JobResponsivility':JobResponsivility,'JobExperiancesYear':JobExperiancesYear,'JobExperiancesField':JobExperiancesField,'Instruction':Instruction,'SalaryRange':SalaryRange,'vacancies':vacancies,'jobtitle':jobtitle,'Deadline':Deadline,'action':'savejobinfo'},
                success:function(data){
                  alert(data);
                  location.reload();
                },
                error:function(){

                }
            });
});

//:::::::::::save job information end::::::::::

//:::::::::::edit company information start::::::::::
  $(document).on('click','#editcompany',function(e){
        e.preventDefault();  
                  $('#contactperson').val($('.contactperson').html());
                  $('#designation').val($('.designation').html());
                  $('#email').val($('.email').html());         
   
  });
//:::::::::::edit information end::::::::::

//:::::::::::save job company information start::::::::::  

  $(document).on('click','#savecompanyinfo',function(e){
        e.preventDefault();  
                 var contactperson=$('#contactperson').val();
                  var designation=$('#designation').val();
                  var email=$('#email').val();
                  var jobid_com=$('.jobid').val();

                   $.ajax({
                type:'get',
                url:'{!!URL::to('inspector/job_published')!!}',
                data:{'jobid_com':jobid_com,'contactperson':contactperson,'designation':designation,'email':email,'action':'updatejobcompanyinfo'},
                success:function(data){
                  alert(data);
                  location.reload();
                },
                error:function(){

                }
            });         
   
  });

  //:::::::::::save job company information end::::::::::

   
  });


  </script>
@endsection