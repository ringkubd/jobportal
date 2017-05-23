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

<div class="col-sm-12" style="background-color: #FFFFFF !important">
	<h2>Employer Home Page</h2>
</div>
<hr>
<br>
<hr>
<div class="col-sm-6"> {{-- col-sm-start --}}
	<div class="panel panel-default">
	  <!-- Default panel contents -->
	  <div class="panel-heading">Statics Of {{ Auth::guard('employer')->user()->name }}</div>
	  <div class="panel-body">
	  

		  <table class="table">
		  	<thead>
		  		<tr>
		  			<th>Status Name</th>
		  			<th>Stastics</th>
		  		</tr>
		  	</thead>
		  	<tbody>
		  		<tr>
		  			<td>Total Posted Job</td>
		  			<td>{{ $count_job }}</td>
		  		</tr>
		  		<tr>
		  			<td>Total Published Job</td>
		  			<td>{{ $count_published_jobs }}</td>
		  		</tr>
		  		<tr data-toggle="modal" style="cursor: pointer;" class="text-primary" data-target="#myModal">
		  			<td>Total Applied On Your Job</td>
		  			<td>{{ $count_application }}</td>
		  		</tr>
		  	</tbody>
		  </table>
		  {{$count_total_online}}
	  </div>
	</div>
</div>{{-- col-sm-end --}}

<div class="col-sm-6"> {{-- col-sm-start --}}
	<div class="panel panel-default">
	  <!-- Default panel contents -->
	  <div class="panel-heading">Statics Of {{ Auth::guard('employer')->user()->name }}</div>
	  <div class="panel-body">
	  

		  <table class="table">
		  	<thead>
		  		<tr>
		  			<th>Status Name</th>
		  			<th>Stastics</th>
		  		</tr>
		  	</thead>
		  	<tbody>
		  		<tr>
		  			<td>Total Posted Job</td>
		  			<td>{{ $count_job }}</td>
		  		</tr>
		  		<tr>
		  			<td>Total Published Job</td>
		  			<td>{{ $count_published_jobs }}</td>
		  		</tr>
		  		<tr>
		  			<td data-toggle="modal" data-target="#myModal">Total Applied On Your Job</td>
		  			<td>{{ $count_application }}</td>
		  		</tr>
		  	</tbody>
		  </table>
	  </div>
	</div>
</div>{{-- col-sm-end --}}

<!-- Modal body start-->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title text-center "><b>Applicant List</b></h4>
        </div>
        <div class="modal-body">
		<table class="table">
			<thead>
		  		<tr>
		  			<th>Applicant Name</th>
		  			<th>JOB TITLE</th>
					<th>Mobile NO</th>
					<th>Email Address</th>
		  		</tr>
		  	</thead>
			<tbody>
		@foreach($retrive_total_applied_infos as $retrive_total_applied_info)
			
		  		<tr>
		  			<td><a href="/employer/cv/{{$retrive_total_applied_info->jobseeker_id}}">{{$retrive_total_applied_info->full_name}}</a></td>
		  			<td>{{$retrive_total_applied_info->jobtitle}}</td>
					<td>{{$retrive_total_applied_info->jobseeker_phone1}}</td>
					<td>{{$retrive_total_applied_info->jobseeker_email}}</td>
		  		</tr>
		  @endforeach
		  </tbody>
		  </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div><!-- Modal body end-->






@endsection