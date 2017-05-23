@extends('employer.ample.index')
@section('title')
Manage Jobs
@endsection
@section('style')
{!!Html::style('css/managejobs.css')!!} 
@endsection
@section('script')
{!!Html::script('js/managejob.js')!!}
@endsection
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">
<div class="col-sm-12 bg-success am" style="display:none; position:fixed; top:60px; left:240px; z-index:9999">
		<h3 class="text-center">Success: Add to shortlist</h3>
	</div>
	<div class="col-sm-12 bg-danger rm" style="display:none; position:fixed; top:60px; left:240px; z-index:9999"">
		<h3 class="text-center">Success: Remove form shortlist</h3>
	</div>
<div class="col-sm-12" style="background-color: #FFFFFF !important">
	<h2>Employer Home Page</h2>
</div>
<div class="col-md-12" >
    
	
<hr>
<br>
<hr>

<!-- applicant list start-->
  
        
          
          <h4 class="text-center "><b>Applicant List</b></h4>
        
        <div class="">
       <ul class="nav nav-tabs">
		  <li class="active"><a data-toggle="tab" href="#alapplicant">All Applicant</a></li>
		  <li><a data-toggle="tab" href="#shortlisted">Shortlisted Applicant</a></li>
		
      </ul>

		<div class="tab-content">
			  <div id="alapplicant" class="tab-pane fade in active">


		<div class="panel panel-default">
		  <div class="panel-heading">
		    <h3 class="panel-title">@foreach($retraive_aproved_jobs_infos as $retraive_aproved_jobs_info)</h3>
		  </div>
		  <div class="panel-body">
								<table class="table all_applicant">
								
							
								<tr>
								<th colspan="4" class="text-center" style="text-transform: capitalize">JOB TITLE : {{$retraive_aproved_jobs_info->jobtitle}}</th>
								</tr>
								<tr>
							  			<th>Applicant Name</th>
							  			<th>Mobile NO</th>
										<th>Email Address</th>
										<th>Action</th>
										
							  	</tr>
								@foreach($retrive_total_applied_infos as $retrive_total_applied_info)
								
								@if($retraive_aproved_jobs_info->id==$retrive_total_applied_info->job_id)
							  		<tr>
							  			<td><a href="/employer/cv/{{$retrive_total_applied_info->jobseeker_id}}/{{$retrive_total_applied_info->job_id}}">{{$retrive_total_applied_info->full_name}}
							  			</a>
							  			</td>
							  			
										<td>{{$retrive_total_applied_info->jobseeker_phone1}}</td>
										<td>{{$retrive_total_applied_info->jobseeker_email}}</td>
										<td>
											<form action="" method="post" id="short_list_form">
											{{csrf_field()}}
											<input type="hidden" value="{{ $retrive_total_applied_info->jobseeker_id }}"   name="jobseeker_id" id="jobseeker_id">
											
										 <input type="hidden" name="job_id" value="{{$retrive_total_applied_info->job_id}}"  id="job_id">
				                             {{-- @if(in_array($retrive_total_applied_info->jobseeker_id, $jobseeker_id))
				                             <input type="hidden" name="remove" id="remove" value="remove">
				                             <button id="" class="btn btn-success" type="submit">Remove</button>
				                           
				    	 	                 @else --}}
				    	 	                 <input type="hidden" name="remove"  value="add">
											<button id="" class="btn btn-success" type="submit">Add to short list</button>
											  {{-- @endif --}}
				                            </form>
										</td>

							  		</tr>
									@endif
								@endforeach
					
							  </table>
							  @endforeach
		  </div>
		</div>





					






			  </div>

			  <div id="shortlisted" class="tab-pane fade">
			    <table class="table short_applicant">
					
					<tbody>
					@foreach($retraive_aproved_jobs_infos as $retraive_aproved_jobs_info)
					<tr>
					<th colspan="4" class="text-center bg-info" style="text-transform: capitalize">JOB TITLE : {{$retraive_aproved_jobs_info->jobtitle}}</th>
					</tr>
					<tr>
				  			<th>Applicant Name</th>
				  			<th>Mobile NO</th>
							<th>Email Address</th>
							<th>Action</th>
							
				  	</tr>
						@foreach($retrive_total_shortlisted_applicants as $retrive_total_applied_info)
							@if($retraive_aproved_jobs_info->id==$retrive_total_applied_info->job_id)
						
							<tr>
								<td><a href="/employer/cv/{{$retrive_total_applied_info->jobseeker_id}}/{{$retrive_total_applied_info->job_id}}">{{$retrive_total_applied_info->full_name}}</a></td>
								
								<td>{{$retrive_total_applied_info->jobseeker_phone1}}</td>
								<td>{{$retrive_total_applied_info->jobseeker_email}}</td>
								
								<td>
									<form action="" method="post" id="short_list_remove_form">
									{{csrf_field()}}
									<input type="hidden" value="{{ $retrive_total_applied_info->jobseeker_id }}"   name="jobseeker_id" id="jobseeker_id">
									
								<input type="hidden" name="job_id" value="{{$retrive_total_applied_info->job_id}}"   id="job_id">
									 {{-- @if(in_array($retrive_total_applied_info->jobseeker_id, $jobseeker_id)) --}}
									 <input type="hidden" name="remove" value="remove">
									 <button id="" class="btn btn-danger" type="submit">Remove</button>
								   
									 {{-- @else
									 <input type="hidden" name="add" id="add" value="add">
									<button id="" class="btn btn-success" type="submit">Add to short list</button> --}}
									 {{--  @endif --}}
									</form>
								</td>
							</tr>
							@endif
					  @endforeach
				  @endforeach
				  
				  </tbody>
				  </table>
			  </div>
		 
		</div>
		
        </div>
        
      
  </div><!-- applicant list end-->
  
  @endsection