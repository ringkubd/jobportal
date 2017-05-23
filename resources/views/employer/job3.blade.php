@extends('employer.ample.index')
@section('title')
Manage Jobs
@endsection
@section('style')
{!!Html::style('css/managejobs.css')!!}
@endsection
@section('script')
{{--asset('js/managejob.js')--}}
{!!Html::script('js/managejob.js')!!}
@endsection
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">


<div class="col-sm-9"  id="job_show_page">
 
            {{--Add Post Button  --}}
            <style>
              #postjobbtn{ position: fixed; bottom: 5px; right: 2px; z-index: 99}
              #fa-plus-circle-style{color: green; font-size: 400%}
            </style>
               <a style="cursor: pointer;" id="postjobbtn" data-toggle="modal" data-target="#postjob" value="{{url('employer/managejobs')}}"><i id="fa-plus-circle-style" class="fa fa-plus-circle" aria-hidden="true"></i></a>


      <div id="posted_jobs">
          

          @forelse($job as $j)

              <div class="well" id="{!!isset($j->id)?$j->id:NULL!!}">

                <div class="row">
                  <div class="col-md-9 col-sm-10">
                  {{-- show job --}}
                    <div class="show_job_details">
                        <div class="row">
                          <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12 text-center">
                            <span class="hidden job_id" value="{{ $j->id }}" url="{{ url('employer/details') }}"></span> 
                            <h2><span class="text-success">{{isset($j->jobtitle )?$j->jobtitle :NULL}}</span></h2>
                          </div>
                          <div class="col-md-12 text-center">
                            <p>{{isset($j->instruction )?strlen($j->instruction)<100?$j->instruction:substr($j->instruction,0,100):NULL}}
                            </p>
                          </div>

                        </div>
                        <div class="row">
                            <span class="text-success"> </span><span class="badge">{{isset($j->vacancies )?$j->vacancies :NULL}}</span>
                            <span class="text-warning"> </span><span class="badge">{{isset($j->deadline )?$j->deadline :NULL}}</span>
                            <span data-toggle="tooltip" title="created_at" class="text-primary"></span><span class="badge">{{isset($j->created_at)?$j->created_at:NULL}}</span>
                        </div>
                    </div>

                  </div>
                  <div class="col-md-3 col-sm-2 table-responsive">
                    <table class="table table-bordered">
                        <tr>
                          <th class="{!!isset($j->published) && $j->published == '1'?'bg-success':'bg-danger'!!}"></th>
                          <th> {!!isset($j->published) && $j->published == '1'?'<span class="text-success">Approved</span>':'<span class="text-warning">Pending</span>'!!}
                          </th>
                        </tr>
                        <tr style="cursor: pointer;"  class="job_id" url="{!!url('employer/edit_jobs')!!}">
                          <th class="{!!isset($j->published) && $j->published == '1'?'bg-primary':'bg-warning'!!}"></th>
                          <th><span value="{!!isset($j->id)?$j->id:NULL!!}" class="job_edit_id">Edit</span></th>
                          
                        </tr>
                        <tr style="cursor: pointer;" class="delete_job">
                          <th class="bg-danger"></th>
                          <th><span value="{!!isset($j->id)?$j->id:NULL!!}" url="{!!url('employer/delete_job')!!}" class="text-danger delete_job_id">Delete</span></th>
                        </tr>
                    </table>
                  </div>
                </div>
                  
              </div>
              @empty
              <p class="text-warning">No Job Found</p>
              
              @endforelse
              <div class="text-center"> {{$job->links()}}</div>
              

              
      </div>



</div>

<div class="modal fade" id="postjob" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Primary Contact Details</h4>
      </div>
      <div class="modal-body">
        
           <div class="well">
        {!!Form::open(['url'=>'employer/postjob','method'=>'post','id'=>'postjobsubmit'])!!}
       {{--csrf_field()--}}

<div id="hide_form_part_1">
      <div class="form-group">
            {{ Form::label('jobtitle','Job Title', ['class' => 'control-label']) }}
            {{ Form::text('jobtitle',null,array('class' => 'form-control','id'=>'jobtitle','required'=>'required')) }}
            
        </div>


        <div class="form-group">
        {{--get user id--}}{{--add job id--}}
             {{ Form::hidden('employer_id',Auth::guard('employer')->user()->id,[])}}
             
              {{--get showdata url--}}

             {{ Form::hidden('showdata_url',url('employer/showjob'),['id'=>'showdata'])}}

            {{ Form::label('catagory_id', 'Category', ['class' => 'control-label']) }}
            {{ Form::select('catagory_id',isset($cat) ? $cat:["0"=>"0"],null,['placeholder' => 'Select Category','class'=>'form-control','id'=>'catagory_id','required'=>'required'])}}
        </div>
        <div class="form-group">
            {{ Form::label('CompanyIndustryType ', 'Company Industry Type ', ['class' => 'control-label']) }}
            {{ Form::select('industrytype_id',isset($industry) ? $industry:["0"=>"0"],null,['placeholder' => 'Select Industrytype','class'=>'form-control','id'=>'industrytype_id','required'=>'required'])}}
        </div>

        <div class="form-group">
            {{ Form::label('division ', 'Job Location::Division Name', ['class' => 'control-label']) }}
            {{ Form::select('division',isset($division) ? $division:["0"=>"0"],null,['placeholder' => 'Select division','class'=>'form-control','id'=>'division','required'=>'required'])}}
        </div>

        <div class="form-group">
            {{ Form::label('districts ', 'Job Location::Districts Name', ['class' => 'control-label']) }}
            {{ Form::select('districts',["0"=>"Null"],null,['placeholder' => 'Select districts','class'=>'form-control','id'=>'districts','required'=>'required'])}}
            <input type="hidden" value="{{ url('ajax/district') }}" id="districts_url">
        </div>

        <div class="form-group">
            {{ Form::label('educational_qualification ', 'Educational Qualification ', ['class' => 'control-label']) }}
            {{ Form::textarea('educational_qualification',null,array('class' => 'form-control','id'=>'educational_qualification','required'=>'required')) }}
            
        </div>


        <div class="form-group">
            {{ Form::label('job_responsibilities ', 'Job Responsibilities', ['class' => 'control-label']) }}
            {{ Form::textarea('job_responsibilities',null,array('class' => 'form-control','id'=>'job_responsibilities','required'=>'required')) }}
            
        </div>
        


        {{-- Next Button --}}



      <div class="form-group">
        <input type="button" class="btn btn-success form-control" id="next1" value="Next">
      </div>
    </div>
<div style="display: none" id="hide_form_part_2">

        <div class="form-group">
            {{ Form::label('agerange','Age Range', ['class' => 'control-label']) }}
            {{ Form::text('agerange',null,array('class' => 'form-control','id'=>'agerange','required'=>'required')) }}
            <div id="age-range"></div>
        </div>


        <div class="form-group">
            {{ Form::label('job_experiences_year ', 'Experiences Year', ['class' => 'control-label']) }}
            {{ Form::text('job_experiences_year',null,array('class' => 'form-control','id'=>'job_experiences_year','required'=>'required')) }}
            
        </div>

        <div class="form-group">
            {{ Form::label('job_experiences_field ', 'Experiences Field', ['class' => 'control-label']) }}
            {{ Form::text('job_experiences_field',null,array('class' => 'form-control','id'=>'job_experiences_field','required'=>'required')) }}
            
        </div>




        <div class="form-group">
            {{ Form::label('SalaryRange','Salary Range', ['class' => 'control-label']) }}
            {{ Form::text('salaryrange',null,array('class' => 'form-control','id'=>'salaryrange','required'=>'required')) }}
            <div id="slider-range"></div>
        </div>
        <div class="form-group">
            {{ Form::label('NoofVacancies ', 'No. of Vacancies ', ['class' => 'control-label']) }}
            {{ Form::text('vacancies',null,array('class' => 'form-control','id'=>'vacancies_amount','required'=>'required')) }}
            
        </div>
        <div class="form-group">
            {{ Form::label('jobtype ', 'Job Type', ['class' => 'control-label']) }}
            {{ Form::select('jobtype',["partime"=>"Part time",'fulltime'=>'Full time','freelancer'=>'Free lancer'],null,['placeholder' => 'Select Jobtype','class'=>'form-control','id'=>'jobtype','required'=>'required'])}}
        </div>

        <div class="form-group">
            {{ Form::label('joblevel ', 'Job level', ['class' => 'control-label']) }}
            {{ Form::select('joblevel',["0"=>"Null"],null,['placeholder' => 'Select joblevel','class'=>'form-control','id'=>'joblevel','required'=>'required'])}}
        </div>

        



        <div class="form-group">
            {{ Form::label('ApplyInstruction ', 'Apply Instruction(s) ', ['class' => 'control-label']) }}
            {{ Form::textarea('instruction',null,array('class' => 'form-control','rows'=>"4",'id'=>'instruction','required'=>'required')) }}
        </div>
        <div class="form-group">
            {{ Form::label('ContactEmail', 'Contact Email', ['class' => 'control-label']) }}
            {{ Form::text('email',NULL, array('class' => 'form-control','id'=>'contactEmail','required'=>'required')) }}
        </div>
        <div class="form-group">
            {{ Form::label('applicationdeadline', 'Application Deadline', ['class' => 'control-label']) }}
            {{ Form::text('deadline',NULL, array('class' => 'form-control','id'=>'applicationdeadline','required'=>'required')) }}
        </div>
       
        <div class="form-group">
            {{ Form::label('contactperson', 'contact Person', ['class' => 'control-label']) }}
            {{ Form::text('contactperson', null, ['placeholder' => 'Select Contact Person','class'=>'form-control','required'=>'required'])}}
        </div>
         <div class="form-group">
            {{ Form::label('designation', 'Designation ', ['class' => 'control-label']) }}
            {{ Form::text('designation',null,array('class' => 'form-control','id'=>'designation','required'=>'required')) }}
        </div>
      <div class="form-group">
        <input type="button" class="btn btn-success form-control" id="previous1" value="Previous">
      </div>

       <div class="form-group">
          {{ Form::submit('Insert', array('class' => 'btn btn-success btn-block btn-lg','id'=>'submit_job_button')) }}
      </div>
      
     
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



{{-- Edit Job Form --}}
<div id="editjob" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Primary Contact Details</h4>
      </div>
      <div class="modal-body">
        
           <div class="well">
        {!!Form::open(['url'=>'employer/save_edit_jobs','method'=>'post','id'=>'editjobsubmit'])!!}
       {{--csrf_field()--}}

    <div id="hide_edit_form_part_1">
      <div class="form-group">
            {{ Form::label('jobtitle','Job Title', ['class' => 'control-label']) }}
            {{ Form::text('jobtitle',null,array('class' => 'form-control jobtitle','required'=>'required')) }}
            
        </div>


        <div class="form-group">
        {{--get user id--}}{{--add job id--}}
             {{ Form::hidden('employer_id',Auth::guard('employer')->user()->id,['placeholder' => 'select j Clatagory','class'=>'form-control'])}}
             {{--edit job id--}}

             {{ Form::hidden('edit_post_id',NULL,['id'=>'edit_post_id'])}}



             {{ Form::hidden('edit_job',url('employer/save_edit_jobs'),['id'=>'edit_jobs'])}}


            {{ Form::label('catagory_id', 'Category', ['class' => 'control-label']) }}
            {{ Form::select('catagory_id',isset($cat) ? $cat:["0"=>"0"],null,['placeholder' => 'Select Category','class'=>'form-control catagory_id','required'=>'required'])}}
        </div>
        <div class="form-group">
            {{ Form::label('CompanyIndustryType ', 'Company Industry Type ', ['class' => 'control-label']) }}
            {{ Form::select('industrytype_id',isset($industry) ? $industry:["0"=>"0"],null,['placeholder' => 'Select Industrytype','class'=>'form-control industrytype_id','required'=>'required'])}}
        </div>
        
        <div class="form-group">
            {{ Form::label('division ', 'Job Location::Division Name', ['class' => 'control-label']) }}
            {{ Form::select('division',isset($division) ? $division:["0"=>"0"],null,['placeholder' => 'Select division','class'=>'form-control','id'=>'division','required'=>'required'])}}
        </div>

        <div class="form-group">
            {{ Form::label('districts ', 'Job Location::Districts Name', ['class' => 'control-label']) }}
            {{ Form::select('districts',["0"=>"Null"],null,['placeholder' => 'Select districts','class'=>'form-control','id'=>'districts','required'=>'required'])}}
            <input type="hidden" value="{{ url('ajax/district') }}" id="districts_url">
        </div>

        <div class="form-group">
            {{ Form::label('educational_qualification ', 'Educational Qualification ', ['class' => 'control-label']) }}
            {{ Form::textarea('educational_qualification',null,array('class' => 'form-control','id'=>'educational_qualification','required'=>'required')) }}
            
        </div>


        <div class="form-group">
            {{ Form::label('job_responsibilities ', 'Job Responsibilities', ['class' => 'control-label']) }}
            {{ Form::textarea('job_responsibilities',null,array('class' => 'form-control','id'=>'job_responsibilities','required'=>'required')) }}
            
        </div>
        


        {{-- Next Button --}}



      <div class="form-group">
        <input type="button" class="btn btn-success form-control" id="editnext1" value="Next">
      </div>
    </div>
<div style="display: none" id="hide_edit_form_part_2">

        <div class="form-group">
            {{ Form::label('agerange','Age Range', ['class' => 'control-label']) }}
            {{ Form::text('agerange',null,array('class' => 'form-control','id'=>'agerange','required'=>'required')) }}
            <div id="age-range"></div>
        </div>


        <div class="form-group">
            {{ Form::label('job_experiences_year ', 'Experiences Year', ['class' => 'control-label']) }}
            {{ Form::text('job_experiences_year',null,array('class' => 'form-control','id'=>'job_experiences_year','required'=>'required')) }}
            
        </div>

        <div class="form-group">
            {{ Form::label('job_experiences_field ', 'Experiences Field', ['class' => 'control-label']) }}
            {{ Form::text('job_experiences_field',null,array('class' => 'form-control','id'=>'job_experiences_field','required'=>'required')) }}
            
        </div>




        <div class="form-group">
            {{ Form::label('SalaryRange','Salary Range', ['class' => 'control-label']) }}
            {{ Form::text('salaryrange',null,array('class' => 'form-control','id'=>'salaryrange','required'=>'required')) }}
            <div id="slider-range"></div>
        </div>
        <div class="form-group">
            {{ Form::label('NoofVacancies ', 'No. of Vacancies ', ['class' => 'control-label']) }}
            {{ Form::text('vacancies',null,array('class' => 'form-control','id'=>'vacancies_amount','required'=>'required')) }}
            
        </div>
        <div class="form-group">
            {{ Form::label('jobtype ', 'Job Type', ['class' => 'control-label']) }}
            {{ Form::select('jobtype',["partime"=>"Part time",'fulltime'=>'Full time','freelancer'=>'Free lancer'],null,['placeholder' => 'Select Jobtype','class'=>'form-control','id'=>'jobtype','required'=>'required'])}}
        </div>

        <div class="form-group">
            {{ Form::label('joblevel ', 'Job level', ['class' => 'control-label']) }}
            {{ Form::select('joblevel',["0"=>"Null"],null,['placeholder' => 'Select joblevel','class'=>'form-control','id'=>'joblevel','required'=>'required'])}}
        </div>

        



        <div class="form-group">
            {{ Form::label('ApplyInstruction ', 'Apply Instruction(s) ', ['class' => 'control-label']) }}
            {{ Form::textarea('instruction',null,array('class' => 'form-control','rows'=>"4",'id'=>'instruction','required'=>'required')) }}
        </div>  
        <div class="form-group">
            {{ Form::label('ContactEmail', 'Contact Email', ['class' => 'control-label']) }}
            {{ Form::text('email',NULL, array('class' => 'form-control contactEmail','required'=>'required')) }}
        </div>
        <div class="form-group">
            {{ Form::label('applicationdeadline', 'Application Deadline', ['class' => 'control-label']) }}
            {{ Form::text('deadline',NULL, array('class' => 'form-control applicationdeadline','required'=>'required')) }}
        </div>
       
        <div class="form-group">
            {{ Form::label('contactperson', 'contact Person', ['class' => 'control-label']) }}
            {{ Form::text('contactperson', null, ['placeholder' => 'Select Contact Person contactperson','class'=>'form-control contactperson','required'=>'required'])}}
        </div>
         <div class="form-group">
            {{ Form::label('designation', 'Designation ', ['class' => 'control-label']) }}
            {{ Form::text('designation',null,array('class' => 'form-control designation','required'=>'required')) }}
        </div>
      
       <div class="form-group">
          {{ Form::submit('Update', array('class' => 'btn btn-success btn-block btn-lg','id'=>'update_job_button')) }}
      </div>
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
<!-- Single job details -->
<div id="single_job_details" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title company_name"></h4>
      </div>
      <div class="modal-body">
        <div class="well">
           <table class="table">
           <h3 class="text-success job_title"></h3>
             <thead>
               <tr>
                 <th width="30%">Title</th>
                 <th width="1%"></th>
                 <th width="69%">Description</th>
               </tr>
             </thead>
             <tbody>
             <tr>
               <td>Category</td>
               <td>:</td>
               <td class="job_category"></td>
             </tr>
             <tr>
                <td>Company Type</td>
               <td>:</td>
               <td class="Industry_type"></td>
             </tr>
             <tr>
                <td>Job Requirements</td>
               <td>:</td>
               <td class="job_instructions"></td>
             </tr>
             <tr>
                <td>Vacancies</td>
               <td>:</td>
               <td class="job_vacancies"></td>
             </tr>
             <tr>
                <td>Salary</td>
               <td>:</td>
               <td class="job_salary"></td>
             </tr>
             <tr>
                <td>Job Published Date</td>
               <td>:</td>
               <td class="job_created_at"></td>
             </tr>
             <tr>
                <td>Job Deadline</td>
               <td>:</td>
               <td class="job_deadline"></td>
             </tr>                 
             </tbody>

           </table>
           <hr>
             <address>
              Contact Person: <span class="contact_person"></span>.<br> 
              Designation: <span class="designation"></span><br>
              Email Address:<a class="email_address" href=""></a>
            </address>
        </div>       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<script>
  $(document).ready(function() {
    $('#next1').on('click', function(event) {
      event.preventDefault();
      if($('#jobtitle').val()==''|| $('#catagory_id').val()==''|| $('#industrytype_id').val()==''|| $('#division').val()==''|| $('#districts').val()==''|| $('#educational_qualification').val()==''|| $('#job_responsibilities').val()==''){
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

    $('#editnext1').on('click', function(event) {
      event.preventDefault();
      $(document).find('#hide_edit_form_part_1').hide('slow/400/fast', function() {
        
      });
      $(document).find('#hide_edit_form_part_2').show('slow/400/fast', function() {
        
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


  });
</script>
@endsection
