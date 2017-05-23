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
	<h2>Applicant Resume</h2>
</div>
<hr>
<br>
<hr>
@include('jobseeker.dashboard.partial.cv')
@endsection