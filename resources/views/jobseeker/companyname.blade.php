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
{{-- {{dump($job)}} --}}

   @if(isset($company) && !isset($company->message))
    @forelse($company as $companies)
        @if(isset($companies->companyname))
        <div class="well">
          <h4>{{$companies->companyname}}</h4>
          
          
          @if(in_array($companies->employer_id,$array))
          <a href="{{'/jobseeker/unblock/'.$companies->employer_id}}" class="btn btn-success">Unblock</a>
          
          @else
          <a href="{{'/jobseeker/block/'.$companies->employer_id}}" class="btn btn-warning">Block</a>
         @endif
        </div>
       
        @endif
        @empty
        <p class="text-warning">No Job Found</p>
        
        @endforelse
     @endif

        
@endsection
