@extends('dashboard.layout.dashboard_layout')
<!--published job section-->


@section('content')
@include('dashboard.modal.jobdetails_modal')
    <div class="col-md-8">
		  
          <h1 class="text-center">Trashed Job Lists</h1>
            <form action="" method="get" class="form-inline">
              <div class="form-group search_div">
                <input type="text" class="form-control" name="term" id="jobseekersearch" placeholder="Search">
              </div>
            </form>
                <div class="panel panel-default" id="listbody">
                  <div class="panel-heading">
                    <h3 class="panel-title">Trasted Job lists:({{$show_trash_job !=false?count($show_trash_job):'0'}})</h3>           
                  </div>
                  <div class="panel-body" id="items">	

            			<table class="table table-responsive table-striped" id="example">
                  @if($show_trash_job == false)
                        <h1 class="text-center alert-danger">NO TRASHED JOB YET</h1>
                        @else
                        <thead>
                                <tr>
                                        <th>Job Title</th>
                                        <th>Company</th>
                                        <th>Category</th>
                                        <th>Industry</th>
                                        <th>Action</th>
                                        <th>Published/view</th>
                                      
                                </tr>
                        </thead>
                        <tbody id="searcheble">
                            @foreach($show_trash_job as $show_jobdetail)
                                <tr class="odd gradeX all_data">
                                    <td class="jobtitle">{{$show_jobdetail->jobtitle}}</td>
                                    <td value='{{$show_jobdetail->employer_id}}' class="companyname">{{$show_jobdetail->companyname}}</td>
                                    <td value='{{$show_jobdetail->catagory_id}}' class="catagoryname">{{$show_jobdetail->catagoryname}}</td>
                                    <td value='{{$show_jobdetail->industrytype_id}}' class="industrytypename">{{$show_jobdetail->industrytypename}}</td>
                                    
                                    

                                    <td><button class="btn btn-primary btn-sm editproduct editbtn"  data-toggle="modal" data-target="#myModal" data-edit=""><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button><button class="btn btn-danger btn-sm deljobseeker" data-delid=""><i class="fa fa-trash-o" aria-hidden="true"></i></button></td>
                                    <td><button class="btn btn-warning btn-sm restore_job" data-restore="{{$show_jobdetail->id}}">Restore</button><button class="btn btn-default btn-sm view_jobjetails"  data-toggle="modal" data-target="#jobprofile" data-view_job_details="{{$show_jobdetail->id}}">View</button></td> 
                                </tr>

                            @endforeach
                          
                        </tbody>
                        @endif

                    </table>


                </div>
            </div>

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
            var jobid=$(this).attr("data-edit");
            //alert(edit);
        var jobtitle=$(this).parent().parent().find("td.jobtitle").html();
        var jobcompany=$(this).parent().parent().find("td.companyname").html();
        var jobcategory=$(this).parent().parent().find("td.catagoryname").html();
        var jobindystrytype=$(this).parent().parent().find("td.industrytypename").html();
        // var name = $(this).parents('.all_data').children('.jobseeker_name').html();
          //alert(name);
          $('#title').text("Edit job");
          $('#job_title').val(jobtitle);
          $('#company').val(jobcompany);
          $('#job_category').val(jobcategory);
          $('#industry').val(jobindystrytype);
          // $('#jobid').val(jobid);
          $('#save').show();
          $('#addbutton').hide();
          // $('#password_field').hide();
          //$('#jobseeker_name').val();
        });

          // capture edit value end

          //add new value start


          $(document).on('click','#addnew', function() {
          $('#title').text("Add job");
          //$('#jobid').val('');
          $('#job_title').val('');
          $('#company').val('');
          $('#job_category').val('');
          $('#industry').val('');
          // $('#additem').val('');
          $('#save').hide();
          $('#addbutton').show();
          // $('#password_field').show();
        });

  //add new value end


$(document).on('click','.restore_job',function(){
 var restore_id=$(this).attr("data-restore");
 //alert(jobpub_id);
$.ajax({
      type:'get',
      url:'{!!URL::to('inspector/job_published')!!}',
      data:{'restore_id':restore_id,'action':'restorejobs'},
      success:function(data){                    
      $('#listbody').load(location.href + ' #listbody');
      },
      error:function(){

      }
});

});

 $(document).on('click','.view_jobjetails',function(){
         var job_details_id=$(this).attr("data-view_job_details");
         //alert(jobtrash_id);
        $.ajax({
              type:'get',
              url:'{!!URL::to('inspector/job_published')!!}',
              data:{'job_details_id':job_details_id,'action':'job_details'},
              success:function(data){ 
              //console.log(data);  
              $('.employername').html(data[0].employername);
              $('.agerange').html(data[0].agerange);
              $('.catagoryname').html(data[0].catagoryname);
              $('.companyaddress').html(data[0].companyaddress);
              $('.companyname').html(data[0].companyname);
              $('.contactperson').html(data[0].contactperson);
              $('.deadline').html(data[0].deadline);                 
              $('.designation').html(data[0].designation);
              $('.distname').html(data[0].distname);
              $('.divname').html(data[0].divname);
              $('.educational_qualification').html(data[0].educational_qualification);
              $('.email').html(data[0].email);
              $('.industrytypename').html(data[0].industrytypename);
              $('.instruction').html(data[0].instruction);
              $('.job_experiences_field').html(data[0].job_experiences_field);
              $('.job_experiences_year').html(data[0].job_experiences_year);
              $('.job_responsibilities').html(data[0].job_responsibilities);
              $('.joblevel').html(data[0].joblevel);
              $('.jobtitle').html(data[0].jobtitle);
              $('.jobtype').html(data[0].jobtype);
              $('.salaryrange').html(data[0].salaryrange);
              $('.vacancies').html(data[0].vacancies);
              $('.employername').html(data[0].employername);
              $('.created_at').html(data[0].created_at);
              },
              error:function(){

              }
            });

        });
        







}); //end document.ready function brakets     

</script>


  @endsection
