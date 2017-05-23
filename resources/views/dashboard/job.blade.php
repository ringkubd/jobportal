@extends('dashboard.layout.dashboard_layout')
@section('style')
<link href="{{ asset('jquery_ui/jquery-ui.css') }}" id="theme" rel="stylesheet">
<link href="{{ asset('jquery_ui/jquery-ui.theme.min.css') }}" id="theme" rel="stylesheet">
@endsection

@section('script')
<script src="{{asset('jquery_ui/jquery-ui.min.js')}}"></script>
@endsection
@section('content')
@include('dashboard.modal.jobdetails_modal')
    <div class="col-md-8" >
		  
          <h1 class="text-center">Pending Job Lists</h1>
            <form action="" method="get" class="form-inline">
              <div class="form-group search_div">
                <input type="text" class="form-control" name="term" id="jobseekersearch" placeholder="Search">
              </div>
            </form>
                <div class="panel panel-default" id="listbody">
                  <div class="panel-heading">
                    <h3 class="panel-title">Pending Job lists:({{$show_jobdetails != false?count($show_jobdetails):'0'}})<a href="#" id="addnew" class="pull-right" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus" aria-hidden="true"></i>
</a></h3>           
                  </div>
                  <div class="panel-body" id="items">	

            			<table class="table table-responsive table-striped" id="example">
                        <thead>
                        @if($show_jobdetails == false)
                        <h1 class="text-center alert-danger">NO POST JOB YET</h1>
                        @else

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
                            @foreach($show_jobdetails as $show_jobdetail)
                                <tr class="odd gradeX all_data">
                                    <td class="jobtitle">{{$show_jobdetail->jobtitle}}</td>
                                    <td  value='{{$show_jobdetail->employer_id}}' class="companyname">{{$show_jobdetail->companyname}}</td>
                                    <td value='{{$show_jobdetail->catagory_id}}' class="catagoryname">{{$show_jobdetail->catagoryname}}</td>
                                    <td value='{{$show_jobdetail->industrytype_id}}' class="industrytypename">{{$show_jobdetail->industrytypename}}
                                    <input type="hidden" name="" class="pemail" value="{{$show_jobdetail->email}}">
                                    <input type="hidden" name="" class="pjobtitle" value="{{$show_jobdetail->jobtitle}}">
                                    <input type="hidden" name="" class="pcontactperson" value="{{$show_jobdetail->contactperson}}"></td>                                    
                                  <td><button class="btn btn-primary btn-sm editproduct editbtn"  data-toggle="modal" data-target="#myModal" data-edit=""><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button><button class="btn btn-danger btn-sm jobtrash_id" data-delid="{{$show_jobdetail->id}}"><i class="fa fa-trash-o" aria-hidden="true"></i></button></td>
                                    <td><button class="btn btn-warning btn-sm published_job" data-published="{{$show_jobdetail->id}}">Published</button><button class="btn btn-default btn-sm view_jobjetails"  data-toggle="modal" data-target="#jobprofile" data-view_job_details="{{$show_jobdetail->id}}">View</button></td> 
                                </tr>

                            @endforeach
                          
                        </tbody>
                        @endif

                    </table>


                </div>
            </div>

            
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="title">Add new job</h4>
                  </div>
                  <div class="modal-body">



                      <div class="well">
                          {!!Form::open(['url'=>'inspector/postjob','method'=>'post','id'=>'postjobsubmit'])!!}
                         {{--csrf_field()--}}

                  <div id="hide_form_part_1">
                        <div class="form-group">
                              {{ Form::label('jobtitle','Job Title', ['class' => 'control-label']) }}
                              {{ Form::text('jobtitle',null,array('class' => 'form-control','id'=>'jobtitle')) }}
                              
                        </div>


                        <div class="form-group">
                             
                              {{--get showdata url--}}

                             {{-- {{ Form::hidden('showdata_url',url('employer/showjob'),['id'=>'showdata'])}} --}}

                            {{ Form::label('catagory_id', 'Category', ['class' => 'control-label']) }}
                            {{ Form::select('catagory_id',isset($cat) ? $cat:["0"=>"0"],null,['placeholder' => 'Select Category','class'=>'form-control','id'=>'catagory_id'])}}
                        </div>

                          <div class="form-group">
                              {{ Form::label('CompanyIndustryType ', 'Company Industry Type ', ['class' => 'control-label']) }}
                              {{ Form::select('industrytype_id',isset($industrytype) ? $industrytype:["0"=>"0"],null,['placeholder' => 'Select Industrytype','class'=>'form-control','id'=>'industrytype_id'])}}
                          </div>

                          <div class="form-group">
                              {{ Form::label('division ', 'Job Location::Division Name', ['class' => 'control-label']) }}
                              {{ Form::select('division',isset($division) ? $division:["0"=>"0"],null,['placeholder' => 'Select division','class'=>'form-control','id'=>'division'])}}
                          </div>

                          <div class="form-group">
                              {{ Form::label('districts ', 'Job Location::Districts Name', ['class' => 'control-label']) }}
                              {{ Form::select('districts',["0"=>"Null"],null,['placeholder' => 'Select districts','class'=>'form-control','id'=>'districts'])}}
                              <input type="hidden" value="{{ url('ajax/district') }}" id="districts_url">
                          </div>

                          <div class="form-group">
                              {{ Form::label('educational_qualification ', 'Educational Qualification ', ['class' => 'control-label']) }}
                              {{ Form::textarea('educational_qualification',null,array('class' => 'form-control','id'=>'educational_qualification')) }}
                              
                          </div>


                          <div class="form-group">
                              {{ Form::label('job_responsibilities ', 'Job Responsibilities', ['class' => 'control-label']) }}
                              {{ Form::textarea('job_responsibilities',null,array('class' => 'form-control','id'=>'job_responsibilities')) }}
                              
                          </div>
                          


                          {{-- Next Button --}}



                        <div class="form-group">
                          <input type="button" class="btn btn-success form-control" id="next1" value="Next">
                        </div>
                      </div>
                  <div style="display: none" id="hide_form_part_2">

                          <div class="form-group">
                              {{ Form::label('agerange','Age Range', ['class' => 'control-label']) }}
                              {{ Form::text('agerange',null,array('class' => 'form-control','id'=>'agerange')) }}
                              <div id="age-range"></div>
                          </div>


                          <div class="form-group">
                              {{ Form::label('job_experiences_year ', 'Experiences Year', ['class' => 'control-label']) }}
                              {{ Form::text('job_experiences_year',null,array('class' => 'form-control','id'=>'job_experiences_year')) }}
                              
                          </div>

                          <div class="form-group">
                              {{ Form::label('job_experiences_field ', 'Experiences Field', ['class' => 'control-label']) }}
                              {{ Form::text('job_experiences_field',null,array('class' => 'form-control','id'=>'job_experiences_field')) }}
                              
                          </div>




                          <div class="form-group">
                              {{ Form::label('SalaryRange','Salary Range', ['class' => 'control-label']) }}
                              {{ Form::text('salaryrange',null,array('class' => 'form-control','id'=>'salaryrange')) }}
                              <div id="slider-range"></div>
                          </div>
                          <div class="form-group">
                              {{ Form::label('NoofVacancies ', 'No. of Vacancies ', ['class' => 'control-label']) }}
                              {{ Form::text('vacancies',null,array('class' => 'form-control','id'=>'vacancies_amount')) }}
                              
                          </div>
                          <div class="form-group">
                              {{ Form::label('jobtype ', 'Job Type', ['class' => 'control-label']) }}
                              {{ Form::select('jobtype',["full-time"=>"Full Time","part-time"=>"Part Time","contactual"=>"Contactual"],null,['placeholder' => 'Select Jobtype','class'=>'form-control','id'=>'jobtype'])}}
                          </div>

                          <div class="form-group">
                              {{ Form::label('joblevel ', 'Job level', ['class' => 'control-label']) }}
                              {{ Form::select('joblevel',["Entry"=>"Entry Level","Mid"=>"Mid Level","Expert"=>"Expert Level"],null,['placeholder' => 'Select joblevel','class'=>'form-control','id'=>'joblevel'])}}
                          </div>

                          



                          <div class="form-group">
                              {{ Form::label('ApplyInstruction ', 'Apply Instruction(s) ', ['class' => 'control-label']) }}
                              {{ Form::textarea('instruction',null,array('class' => 'form-control','rows'=>"4",'id'=>'instruction')) }}
                          </div>
                          <div class="form-group">
                              {{ Form::label('ContactEmail', 'Contact Email', ['class' => 'control-label']) }}
                              {{ Form::text('email',NULL, array('class' => 'form-control','id'=>'contactEmail')) }}
                          </div>
                          <div class="form-group">
                              {{ Form::label('applicationdeadline', 'Application Deadline', ['class' => 'control-label']) }}
                              {{ Form::text('deadline',NULL, array('class' => 'form-control','id'=>'applicationdeadline')) }}
                          </div>
                         
                          <div class="form-group">
                              {{ Form::label('contactperson', 'contact Person', ['class' => 'control-label']) }}
                              {{ Form::text('contactperson', null, ['placeholder' => 'Select Contact Person','class'=>'form-control'])}}
                          </div>
                           <div class="form-group">
                              {{ Form::label('designation', 'Designation ', ['class' => 'control-label']) }}
                              {{ Form::text('designation',null,array('class' => 'form-control','id'=>'designation')) }}
                          </div>
                          <div class="form-group">
                            <input type="button" class="btn btn-success form-control" id="previous1" value="Previous">
                          </div>
                        
                      </div>
                      {!! Form::close() !!}
                         </div>




                    </div>
                   
                    <div class="modal-footer">
                      {!!Form::button('Delete',['class'=>'btn btn-warning', 'id'=>'delete', 'style'=>'display:none','data-dismiss'=>'modal'])!!}
                      {!!Form::button('Save changes',['class'=>'btn btn-primary', 'id'=>'save', 'style'=>'display:none','data-dismiss'=>'modal'])!!}
                      {!!Form::submit('Insert',['class'=>'btn btn-primary', 'id'=>'jobinsert','data-dismiss'=>'modal'])!!}
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


            //add new value start


            $(document).on('click','#addnew', function() {
            $('#title').text("Add job");
            $('#jobseekerid').val('');
            $('#jobseeker_name').val('');
            $('#jobseeker_email').val('');
            $('#additem').val('');
            $('#save').hide();
            $('#addbutton').show();
            $('#password_field').show();
          });

    //add new value end


    $('#next1').on('click', function(event) {
      event.preventDefault();
      if($('#jobtitle').val()==''|| $('#catagory_id').val()==''|| $('#industrytype_id').val()==''|| $('#division').val()==''|| $('#districts').val()==''|| $('educational_qualification').val()==''|| $('job_responsibilities').val()==''){
        alert('you have to put all field to go to next');
        return;
      }

      $(document).find('#hide_form_part_1').hide('slow/400/fast', function() {
        
      });
      $(document).find('#hide_form_part_2').show('slow/400/fast', function() {
        
      });
    });


    $('#previous1').on('click', function(event) {
     // alert(3);
      event.preventDefault();
      $(document).find('#hide_form_part_2').hide('slow/400/fast', function() {
        
      });
      $(document).find('#hide_form_part_1').show('slow/400/fast', function() {
        
      });
    });



    $(document).find('#division').change(function(event) {
      var url = $(document).find('#districts_url').val();
      var division_id = $(this).val();
      var option = " ";
      $.ajax({
        url: url,
        type: 'GET',
        dataType: 'json',
        data: {
          'division_id' : division_id,
          'action'      : 'ajax'
        },
        success:function(data){
          option += '<option value="-1">Select One</option>';
          for (var i = 0 ; i < data.length; i++) {
            option += '<option value="'+data[i].id +'">'+data[i].name+'</option>';
          }
          $(document).find('#districts').html(option);
          
        }

      });

    });


    //date picker

    $( function() {
        $( "#applicationdeadline" ).datepicker();
        $( "#age-range" ).slider({
          range: true,
          min: 15,
          max: 50,
          values: [ 18, 30 ],
          slide: function( event, ui ) {
            $( "#agerange" ).val(ui.values[ 0 ] + " -" + ui.values[ 1 ] );
          }
        });
        $( "#agerange" ).val( $( "#age-range" ).slider("values", 0 ) +
          "-" + $( "#age-range" ).slider( "values", 1 ) );

        
        $( "#slider-range" ).slider({
          range: true,
          min: 5000,
          max: 200000,
          values: [ 20000, 30000 ],
          slide: function( event, ui ) {
            $( "#salaryrange" ).val('৳'+ui.values[ 0 ] + " -৳ " + ui.values[ 1 ] );
          }
        });
        $( "#salaryrange" ).val( $( "#slider-range" ).slider("values", 0 ) +
          " -৳" + $( "#slider-range" ).slider( "values", 1 ) );
      } );



    $(document).on('submit','#jobinsert',function(e){
      e.preventDefault();
      $.ajax({
        type:'get',
        url:$(this).attr('action'),
        data:$(this).serialize(),
        success:function(data){
          $('#jobinsert').trigger('reset');
          $('#myModal').modal('hide');
           $('#listbody').load(location.href+' #listbody');

          console.log(data);
        }
      });
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


        $(document).on('click','.published_job',function(){
            var jobpub_id=$(this).attr("data-published");
            var companyemail=$('.pemail').val();
            var jobtitle=$('.pjobtitle').val();            
            var contactperson=$('.pcontactperson').val();           
              $.ajax({
                type:'get',
                url:'{!!URL::to("inspector/job_published")!!}',
                data:{'jobpub_id':jobpub_id,'companyemail':companyemail,'jobtitle':jobtitle,'contactperson':contactperson,'action':'publishedjobs'},
                success:function(data){
                alert('job published');                    
              $('#listbody').load(location.href +' #listbody');
              },
              error:function(){

              }
            });

        });

        $(document).on('click','.jobtrash_id',function(){
         var jobtrash_id=$(this).attr("data-delid");
         //alert(jobtrash_id);
        $.ajax({
              type:'get',
              url:'{!!URL::to('inspector/job_published')!!}',
              data:{'jobtrash_id':jobtrash_id,'action':'jobtrash'},
              success:function(data){                    
              $('#listbody').load(location.href +' #listbody');
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
