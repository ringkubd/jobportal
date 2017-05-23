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
		  		<tr  style="cursor: pointer;" class="text-primary" >
					
		  			<td><a href="/employer/applicantlist">Total Applied On Your Job</a></td>
		  			<td><a href="/employer/applicantlist">{{ $count_application }}</a></td>
					
		  		</tr>
				<tr>
		  			<td>Total Online</td>
		  			<td>{{$count_total_online}}</td>
		  		</tr>
		  	</tbody>
		  </table>
		  
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
		  		<tr  style="cursor: pointer;" class="text-primary" >
					
		  			<td><a href="employer/applicantlist">Total Applied On Your Job</a></td>
		  			<td><a href="employer/applicantlist">{{ $count_application }}</a></td>
					
		  		</tr>
		  	</tbody>
		  </table>
	  </div>
	</div>
</div>{{-- col-sm-end --}}


@endsection