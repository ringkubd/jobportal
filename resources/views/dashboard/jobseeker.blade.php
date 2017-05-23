@extends('dashboard.layout.dashboard_layout')


@section('content')
@include('dashboard.jobseekerpanel.jobseekerprofile')
    <div class="col-md-8">
		  
          <h1 class="text-center">Jobseeker Lists</h1>
            <form action="" method="get" class="form-inline">
              <div class="form-group search_div">
                <input type="text" class="form-control" name="term" id="jobseekersearch" placeholder="Search">
              </div>
            </form>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h3 class="panel-title">Jobseeker lists:<a href="#" id="addnew" class="pull-right" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus" aria-hidden="true"></i>
</a></h3>           
                  </div>
                  <div class="panel-body" id="items">	

            			<table class="table table-responsive table-striped" id="example">
                        <thead>
                                <tr>
                                        <th>SL No.</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Action</th>
                                        <th>Reject or View</th>
                                      
                                </tr>
                        </thead>
                        <tbody id="searcheble">
                            @php
                                $i=1;
                            @endphp
                            @foreach($jobseekers as $jobseeker)
                                <tr class="odd gradeX all_data">
                                    <td>{{$i++}}</td>
                                    <td class="jobseeker_name">{{$jobseeker->name}}</td>
                                    <td class="jobseeker_email">{{$jobseeker->email}}</td>
                                    

                                    <td><button class="btn btn-primary btn-sm editproduct editbtn"  data-toggle="modal" data-target="#myModal" data-edit="{{$jobseeker->id}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button><button class="btn btn-danger btn-sm deljobseeker" data-delid="{{$jobseeker->id}}"><i class="fa fa-trash-o" aria-hidden="true"></i></button></td>
                                    <td>@if($jobseeker->status== 0)<button class="btn btn-success btn-sm approvedjobseeker" data-approved="{{$jobseeker->id}}">Approved</button>@elseif($jobseeker->status== 1)<button class="btn btn-warning btn-sm rejectjobseeker" data-reject="{{$jobseeker->id}}">Reject</button>@endif<button class="btn btn-default btn-sm jobseekerdetails"  data-toggle="modal" data-target="#jobseekerview" data-viewdetails="{{$jobseeker->id}}">View</button></td>

                                </tr>

                            @endforeach
                          
                        </tbody>

                    </table>


                </div>
            </div>


            <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="title">Add new jobseeker</h4>
                  </div>
                  <div class="modal-body">
                    {!!Form::open()!!}
                    {!!Form::hidden('jobseekerid',null,['id'=>'jobseekerid'])!!}
                      {{-- <input type="hidden" name="" id="modalid" /> --}}
                      {!!Form::label('name');!!}
                      <p>{!!Form::text('name',null, array('class' => 'form-control', 'placeholder' => 'Write name here', 'id' => 'jobseeker_name'))!!}</p>
                      {!!Form::label('email');!!}
                      <p>{!!Form::email('email',null, array('class' => 'form-control', 'placeholder' => 'Write email here', 'id' => 'jobseeker_email'))!!}</p>
                      <div id="password_field">
                        {!!Form::label('password');!!}
                        <p>{!!Form::text('password',null, array('class' => 'form-control', 'placeholder' => 'Write password here', 'id' => 'jobseeker_password'))!!}</p>
                      </div>
                    </div>
                   
                    <div class="modal-footer">
                      {!!Form::button('Delete',['class'=>'btn btn-warning', 'id'=>'delete', 'style'=>'display:none','data-dismiss'=>'modal'])!!}
                      {!!Form::button('Save changes',['class'=>'btn btn-primary', 'id'=>'save', 'style'=>'display:none','data-dismiss'=>'modal'])!!}
                      {!!Form::button('Add item',['class'=>'btn btn-primary', 'id'=>'addbutton','data-dismiss'=>'modal'])!!}
                      {{-- <button type="button" class="" id="delete" data-dismiss="modal">Delete</button> --}}
                      {{-- <button type="button" class="btn btn-primary" id="save" data-dismiss="modal" style="display:none;">Save changes</button>
                      <button type="button" class="btn btn-primary" id="addbutton" data-dismiss="modal" style="display: none;">Add item</button> --}}
                      {!!Form::close()!!}
                  </div>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->

      </div>
  </div>                
</div>
	{{csrf_field()}}
	


	<script type="text/javascript">
		$(document).ready(function() {

      $.ajaxSetup({
         headers: {
               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });


      // capture edit value start
        $(document).on('click','.editbtn', function() {
          var jobseekerid=$(this).attr("data-edit");
          //alert(edit);
      var jobseekername=$(this).parent().parent().find("td.jobseeker_name").html();
      var jobseekeremail=$(this).parent().parent().find("td.jobseeker_email").html();
      // var name = $(this).parents('.all_data').children('.jobseeker_name').html();
        //alert(name);
        $('#title').text("Edit jobseeker");
        $('#jobseeker_name').val(jobseekername);
        $('#jobseeker_email').val(jobseekeremail);
        $('#jobseekerid').val(jobseekerid);
        $('#save').show();
        $('#addbutton').hide();
        $('#password_field').hide();
        $('#jobseeker_name').val();
      });

        // capture edit value end

        //add new value start


        $(document).on('click','#addnew', function() {
        $('#title').text("Add jobseeker");
        $('#jobseekerid').val('');
        $('#jobseeker_name').val('');
        $('#jobseeker_email').val('');
        $('#additem').val('');
        $('#save').hide();
        $('#addbutton').show();
        $('#password_field').show();
      });

//add new value end


//insert start

  $('#addbutton').click(function() {
      var jobseeker_name = $('#jobseeker_name').val();
      var jobseeker_email = $('#jobseeker_email').val();
      var jobseeker_password = $('#jobseeker_password').val();
      //alert(jobseeker_name);
      //alert(jobseeker_email);
      if (jobseeker_name=="" || jobseeker_email==""|| jobseeker_password=="") {
        alert('Filed must not be empty');
      }else{
        


        $.ajax({
                  type:'post',
                  url:'{!!URL::to('inspector/managejobseeker')!!}',
                  data:{'jobseeker_name':jobseeker_name,'jobseeker_email':jobseeker_email,'jobseeker_password':jobseeker_password,'action':'insertjobseeker'},
                  success:function(data){
                      // console.log('success');
                      // console.log(data);
                      //console.log(data.length);
                  $('#jobseeker_password').val('');
          $('#items').load(location.href + ' #items');
                  },
                  error:function(){

                  }
              });


        }
        
    });

//insert end

//save start.....

    $('#save').click(function(event) {
        var jobseekerid = $('#jobseekerid').val();
        //alert(saveid);
        var jobseekername = $('#jobseeker_name').val();
        var jobseekeremail= $('#jobseeker_email').val();
            $.ajax({
                    type:'post',
                    url:'{!!URL::to('inspector/managejobseeker')!!}',
                    data:{'jobseekerid':jobseekerid, 'jobseekername':jobseekername,'jobseekeremail':jobseekeremail,'action':'updatejobseeker'},
                    success:function(data){
                        //console.log('success');
                        //console.log(data);
                        //console.log(data.length);

            $('#items').load(location.href + ' #items');
                    },
                    error:function(){

                    }
                });
        
      });
    //save end


    //Parmanently delete start
 $(document).on('click','.deljobseeker', function() {
       var jobseekerdelid=$(this).attr("data-delid");
            $.ajax({
                    type:'post',
                    url:'{!!URL::to('inspector/managejobseeker')!!}',
                    data:{'jobseekerdelid':jobseekerdelid,'action':'deletejobseeker'},
                    success:function(data){
                        //console.log('success');
                        //console.log(data);
                        //console.log(data.length);

            $('#items').load(location.href + ' #items');
                    },
                    error:function(){

                    }
                });
        
      });

    //parmanent delete end

//reject sobseeker start
 $(document).on('click','.rejectjobseeker', function() {
       var jobseekerrejectid=$(this).attr("data-reject");
            $.ajax({
                    type:'post',
                    url:'{!!URL::to('inspector/managejobseeker')!!}',
                    data:{'jobseekerrejectid':jobseekerrejectid,'action':'rejectjobseeker'},
                    success:function(data){
                        //console.log('success');
                        //console.log(data);
                        //console.log(data.length);

            $('#items').load(location.href + ' #items');
                    },
                    error:function(){

                    }
                });
        
      });



//end jobseeker reject



//approved sobseeker start
$(document).on('click','.approvedjobseeker', function() {
       var approvejobseekerid=$(this).attr("data-approved");
            $.ajax({
                    type:'post',
                    url:'{!!URL::to('inspector/managejobseeker')!!}',
                    data:{'approvejobseekerid':approvejobseekerid,'action':'approvedjobseeker'},
                    success:function(data){
                        //console.log('success');
                        //console.log(data);
                        //console.log(data.length);

            $('#items').load(location.href + ' #items');
                    },
                    error:function(){

                    }
                });
        
      });



//end jobseeker approved 

//view jobsekers details by admin start.........
$(document).on('click','.jobseekerdetails', function() {
       var viewjobseekerdetailid=$(this).attr("data-viewdetails");
       var jobseekername=$(this).parent().parent().find("td.jobseeker_name").html();
       var jobseekeremail=$(this).parent().parent().find("td.jobseeker_email").html();
       $('.joseekername').html(jobseekername);
       $('.joseekeremail').html(jobseekeremail);

       //personal details start........
        $.ajax({
                    type:'post',
                    url:'{!!URL::to('inspector/managejobseeker')!!}',
                    data:{'viewjobseekerdetailid':viewjobseekerdetailid,'action':'jobseekerpersonaldetail'},
                    success:function(data){
                      //console.log(data);
                      $('.joseekerfathername').html(data['0'].jobseeker_father_name);
                      $('.joseekermothername').html(data['0'].jobseeker_mother_name);
                      $('.joseekerdateofbirth').html(data['0'].jobseeker_dob);
                      $('.joseekergender').html(data['0'].jobseeker_gender);
                      $('.joseekerReligion').html(data['0'].jobseeker_religion);
                      $('.joseekerMarital').html(data['0'].jobseeker_maritalstatus);
                      $('.joseekerNationality').html(data['0'].jobseeker_nationality);
                      $('.joseekerNationalityID').html(data['0'].jobseeker_national_id_no);
                      $('.joseekerPresentAddress').html(data['0'].jobseeker_current_address);
                      $('.joseekerPermanentAddress').html(data['0'].jobseeker_permanent_address);
                      $('.joseekerCurrentLocation').html(data['0'].jobseeker_current_location);
                      $('.joseekeremailinpersonaldetail').html(data['0'].jobseeker_email);
                      $('.joseekerMobileNo1').html(data['0'].jobseeker_phone1);
                      $('.joseekerMobileNo2').html(data['0'].jobseeker_phone2);
                      $('.joseekerAlternativeEmail').html(data['0'].jobseeker_email2);
            $('#items').load(location.href + ' #items');
                    },
                    error:function(){

                    }
                });
        //personal detail end

        //Academic details start
        var academicdetail='';
            $.ajax({
                    type:'post',
                    url:'{!!URL::to('inspector/managejobseeker')!!}',
                    data:{'viewjobseekerdetailid':viewjobseekerdetailid,'action':'jobseekeracademaicdetail'},
                    success:function(dataedu){
                        //console.log('success');
                        //console.log(dataedu);
                    for(var i=0;i<dataedu.length;i++){
                    academicdetail+='  <div data-toggle="collapse" data-target="#academicdetail'+(i+1)+'"><h3 class="bg-primary">Academic'+(i+1)+'</h3></div><div id="academicdetail'+(i+1)+'" class="collapse"><div class="row"><div class="col-md-6"><table class="table table-responsive table-striped"><tr><td> Label of Education:</td><td>'+dataedu[i].edulavelname+'</td></tr><tr><td> Exam/Degree Title:</td><td>'+dataedu[i].examtitlename+'</td></tr><tr><td>Major/Group/</td><td>'+dataedu[i].groupname+'</td></tr><tr><td>Institute Name:</td><td>'+dataedu[i].institute+'</td></tr></table></div><div class="col-md-6"><table class="table table-responsive table-striped"><tr><td>Achievement:</td><td>'+dataedu[i].achievment+'</td></tr><tr><td>Result:</td><td>'+dataedu[i].result+'</td></tr><tr><td>Marks:</td><td>'+dataedu[i].marks+'</td></tr><tr><td>Year Of Passing:</td><td>'+dataedu[i].passing_year+'</td></tr><tr><td>Duration:</td><td>'+dataedu[i].duration+'</td></tr></table></div></div></div>';

                    
                    }

                    $('#jobseekerview').find('.educationaldetail').html(academicdetail);
                  },
                    error:function(){

                    }
                });
         //Academic details end

         //extra activities start....
               var skilldetails='';
            $.ajax({
                    type:'post',
                    url:'{!!URL::to('inspector/managejobseeker')!!}',
                    data:{'viewjobseekerdetailid':viewjobseekerdetailid,'action':'skilldetails'},
                    success:function(dataedu){
                        //console.log('success');
                        //console.log(dataedu);
                    for(var i=0;i<dataedu.length;i++){
                    skilldetails+='  <div data-toggle="collapse" data-target="#skilldetails'+(i+1)+'"><h3 class="bg-primary">Skill'+(i+1)+'</h3></div><div id="skilldetails'+(i+1)+'" class="collapse"><div class="row"><div class="col-md-6"><table class="table table-responsive table-striped"><tr><td> Skill Name:</td><td>'+dataedu[i].specializationorskill+'</td></tr><tr><td> Skill Description:</td><td>'+dataedu[i].skilldescription+'</td></tr></table></div></div></div>';
                    }

                    $('#jobseekerview').find('#skilldetail').html(skilldetails);
                  },
                    error:function(){

                    }
                });
         //extra activities end....

         //extra activities start....
               var extracariculam='';
            $.ajax({
                    type:'post',
                    url:'{!!URL::to('inspector/managejobseeker')!!}',
                    data:{'viewjobseekerdetailid':viewjobseekerdetailid,'action':'extracariculamdetails'},
                    success:function(dataedu){
                        //console.log('success');
                        //console.log(dataedu);
                    for(var i=0;i<dataedu.length;i++){
                    extracariculam+='<div class="well well-sm" data-toggle="collapse" data-target="#extracariculam'+(i+1)+'"><div style="cursor:pointer"><h4>extra caricular'+(i+1)+'</h4></div></div><div id="extracariculam'+(i+1)+'" class="collapse"><div class="row"><div class="col-md-12"><table class="table table-responsive table-hover"><tr><td> Skill Name:</td><td>'+dataedu[i].extracaruculamname+'</td></tr><tr><td> Skill Description:</td><td>'+dataedu[i].details+'</td></tr></table></div></div></div>';
                    }

                    $('#jobseekerview').find('#extracuriculam').html(extracariculam);
                  },
                    error:function(){

                    }
                });
         //extra activities end....

         // language start....
               var languageeficiency='';
            $.ajax({
                    type:'post',
                    url:'{!!URL::to('inspector/managejobseeker')!!}',
                    data:{'viewjobseekerdetailid':viewjobseekerdetailid,'action':'languageeficiency'},
                    success:function(dataedu){
                        //console.log('success');
                        //console.log(dataedu);
                    for(var i=0;i<dataedu.length;i++){
                    languageeficiency+='  <div class="well well-sm" data-toggle="collapse" data-target="#languageeficiency'+(i+1)+'"><h4 style="cursor:pointer">language efficiency'+(i+1)+'</h4></div><div id="languageeficiency'+(i+1)+'" class="collapse"><div class="row"><div class="col-md-12"><table class="table table-responsive table-striped"><tr><td> language Name:</td><td>'+dataedu[i].jobseeker_language+'</td></tr><tr><td> Reading skill:</td><td>'+dataedu[i].jobseeker_reading+'</td></tr><tr><td>Writing skill:</td><td>'+dataedu[i].jobseeker_writing+'</td></tr><tr><td>speaking skill:</td><td>'+dataedu[i].jobseeker_speaking+'</td></tr></table></div></div></div>';
                    }

                    $('#jobseekerview').find('#reference').html(languageeficiency);
                  },
                    error:function(){

                    }
                });
         //language  end....

         // reference  start....
               var referencedetails='';
            $.ajax({
                    type:'post',
                    url:'{!!URL::to('inspector/managejobseeker')!!}',
                    data:{'viewjobseekerdetailid':viewjobseekerdetailid,'action':'referencedetails'},
                    success:function(dataedu){
                        //console.log('success');
                        //console.log(dataedu);
                    for(var i=0;i<dataedu.length;i++){
                    referencedetails+='  <div data-toggle="collapse" data-target="#referencedetails'+(i+1)+'"><h3 class="bg-primary">REference'+(i+1)+'</h3></div><div id="referencedetails'+(i+1)+'" class="collapse"><div class="row"><div class="col-md-6"><table class="table table-responsive table-striped"><tr><td> Ref Name:</td><td>'+dataedu[i].reference_name+'</td></tr><tr><td> organization:</td><td>'+dataedu[i].organization+'</td></tr><tr><td>disignation:</td><td>'+dataedu[i].disignation+'</td></tr><tr><td>address:</td><td>'+dataedu[i].address+'</td></tr><tr><td>office phone:</td><td>'+dataedu[i].office_phone+'</td></tr><tr><td>home phone:</td><td>'+dataedu[i].home_phone+'</td></tr><tr><td>mobile:</td><td>'+dataedu[i].mobile+'</td></tr><tr><td>email:</td><td>'+dataedu[i].email+'</td></tr><tr><td>relation:</td><td>'+dataedu[i].relation+'</td></tr></table></div></div></div>';
                    }

                    $('#jobseekerview').find('#languagepreferfence').html(referencedetails);
                  },
                    error:function(){

                    }
                });
         //reference  end....




         //application info start...............................
         $.ajax({
                    type:'post',
                    url:'{!!URL::to('inspector/managejobseeker')!!}',
                    data:{'viewjobseekerdetailid':viewjobseekerdetailid,'action':'applicationinformation'},
                    success:function(appinfo){
                        //console.log('success');
                        //console.log(appinfo);
                          $(".objective").html(appinfo['0'].career_objective);

                          $(".presal").html(appinfo['0'].presentsalary);

                          $(".expesal").html(appinfo['0'].expectedsalary);

                          $(".lookfoj").html(appinfo['0'].lookingfor);

                          $(".jobnat").html(appinfo['0'].availablefor);

                          $(".pjobcat").html(appinfo['0'].preferred_job_category);

                          $(".preferred_division").html(appinfo['0'].preferred_district);
                           $(".prejoblocdis").html(appinfo['0'].preferred_division);

                          $(".preorgtype").html(appinfo['0'].preferred_organization_type);

                          $(".carsum").html(appinfo['0'].career_summary);

                          $(".spequal").html(appinfo['0'].special_qualification);
                          
                         
                      },
                      error:function(){

                      }
           });

         //application info end....................................

         //job applied start...............................
         $.ajax({
                    type:'post',
                    url:'{!!URL::to('inspector/managejobseeker')!!}',
                    data:{'viewjobseekerdetailid':viewjobseekerdetailid,'action':'appliedforjob'},
                    success:function(appliedjob){
                    var   jobdetails = '<h1>Total Applied job:' +appliedjob.length+'</h1>';
                      //console.log(appliedjob);    
                    for(var i=0;i<appliedjob.length;i++){
                    jobdetails +=
                    '<div data-toggle="collapse" data-target="#jobdetails'+(i+1)+'"><h3 class="bg-primary">Applied Job'+(i+1)+'</h3></div><div id="jobdetails'+(i+1)+'" class="collapse"><table class="table table-responsive table-striped"><tr><td>Employer Name:</td><td>'+appliedjob[i].employername+'</td></tr><tr><td> Job Category Name:</td><td>'+appliedjob[i].catagoryname+'</td></tr><tr><td>Industry Type Name:</td><td>'+appliedjob[i].industrytypename+'</td></tr><tr><td>Salary Range:</td><td>'+appliedjob[i].salaryrange+'</td></tr><tr><td>Job Title:</td><td>'+appliedjob[i].jobtitle+'</td></tr><tr><td>Vacancies:</td><td>'+appliedjob[i].vacancies+'</td></tr><tr><td>Instruction:</td><td>'+appliedjob[i].instruction+'</td></tr><tr><td>email:</td><td>'+appliedjob[i].email+'</td></tr><tr><td>Deadline:</td><td>'+appliedjob[i].deadline+'</td></tr></tr><tr><td>Employer Contact Person:</td><td>'+appliedjob[i].contactperson+'</td></tr></tr><tr><td>Designation:</td><td>'+appliedjob[i].designation+'</td></tr></tr><tr><td>Published Date:</td><td>'+appliedjob[i].published+'</td></tr></table></div>';
                     $('#jobseekerview').find('.applied_job').html(jobdetails);
                    }
                      },
                      error:function(){

                      }
           });

         //job applied end....................................

    

         //Employment history Start..............................................

         $.ajax({
          type:'post',
          url:'{!!URL::to('inspector/managejobseeker')!!}',
          data:{'viewjobseekerdetailid':viewjobseekerdetailid,'action':'jobseekerhistory'},
          success:function(emphistory){
            //console.log(emphistory);
            var emphisto="<h1>Employment History:"+emphistory.length+"</h1>";
            for(var i=0;i<emphistory.length;i++){
              emphisto+='<div class="row"><div class="col-md-12 text-center"><h1 class="bg-primary">Company:'+(i+1)+'</h1></div><div class="col-md-12"><table class="table table-responsive table-striped"><tr><td> Company Name:</td><td>'+emphistory[i].companyname+'</td></tr><tr><td>Company Business:</td><td>'+emphistory[i].companylocation+'</td></tr><tr><td>Company Location:</td><td>'+emphistory[i].companybusiness+'</td></tr><tr><td> Department:</td><td>'+emphistory[i].department+'</td></tr><tr><td>Area of Experience:</td><td>'+emphistory[i].areaofexperience+'</td></tr><tr><td>Responsibility:</td><td>'+emphistory[i].responsibility+'</td></tr><tr><td>Designation:</td><td>'+emphistory[i].designation+'</td></tr><tr><td>Employer Responsibility:</td><td>'+emphistory[i].department+'</td></tr><tr><td>Employment Period:</td><td>'+emphistory[i].employmentperiod+'</td></tr></table></div></div>';
            }
             $('#jobseekerview').find('#jobhistory').html(emphisto);
          },
          error:function(){
          }
         });




         //Employment history End................................................




        
      });

//view jobseekers details by admin end.,........



//ajax search start......

      $('#jobseekersearch').on('keyup',function(){
         $value = $(this).val();
         $.ajax({
          type:'get',
          dataType:'html',
          url:'{!!URL::to('inspector/jobseekersearch')!!}',
          data:{'search':$value},
          success:function(data){
              $('#searcheble').html(data);
              //console.log(data);
            
          }
         });
      });

  //ajax search start......





  });


	</script>

@endsection

