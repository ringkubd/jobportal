@extends('jobseeker.ample.index')
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


<div class="table-responsive">

  <table width='100%' class="table table-bordered table-striped table-hover">

@forelse($jobdata as $j)

<tr>
    <td width="30%">Companyname</td>
    <td width="70%">{{$j->companyname}}</td>
</tr>

<tr>
    <td>Company Address</td>
    <td>{{$j->companyaddress}}</td>
</tr>

<tr>
    <td>Category Name</td>
    <td>{{$j->catagoryname}}</td>
</tr>

<tr>
  <td>Industry Type Name</td>
  <td>{{$j->industrytypename}}</td>
</tr> 
<tr>
  <td>Job type </td>
  <td>{{$j->jobtype}}</td>
</tr> 
<tr>
  <td>Division </td>
  <td>{{$j->divname}}</td>
</tr> 
<tr>
  <td>District</td>
  <td>{{$j->distname}}</td>
</tr> 
<tr>
  <td>Age range</td>
  <td>{{$j->agerange}}</td>
</tr> 
<tr>
  <td>Salaryrange</td>
  <td>{{$j->salaryrange}}</td>
</tr> 
<tr>
  <td>Jobtitle</td>
  <td>{{$j->jobtitle}}</td>
</tr> 
<tr>
  <td>Educational qualification</td>
  <td>{{$j->educational_qualification}}</td>
</tr> 
<tr>
  <td>job_responsibilities</td>
  <td>{{$j->job_responsibilities}}</td>
</tr>
<tr>
  <td>job_experiences_year</td>
  <td>{{$j->job_experiences_year}}</td>
</tr>
<tr>
  <td>job_experiences_field</td>
  <td>{{$j->job_experiences_field}}</td>
</tr>

<tr>
  <td>Instruction</td>
  <td>{{$j->instruction}}</td>
</tr> 
<tr>
  <td>Email</td>
  <td>{{$j->email}}</td>
</tr>
<tr>
  <td>Deadline</td>
  <td>{{$j->deadline}}</td>
</tr> 
<tr>
  <td>Contact Person</td>
  <td>{{$j->contactperson}}</td>
</tr>
<tr>
  <td>Designation</td>
  <td>{{$j->designation}}</td>
</tr>
{{-- <tr>
  <td>Published</td>
  <td>{{$j->published}}</td>
</tr> --}}
<tr>
  <td></td>
  
  <td>{!! $apply=="true" ? "<span class='bg-warning text-danger pull-right'>you already applied</span>" : "<a href='/jobseeker/apply/$j->id' class='btn btn-success pull-right'>apply</a>"!!}</td>
</tr>

</tr>


        


    
    
    

  @empty

  @endforelse      

  </table>  
  </div>    
  @endsection
  
