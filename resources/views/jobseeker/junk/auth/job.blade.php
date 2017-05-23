
@extends('jobseeker.layout.index')

@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">


    
  
    @forelse($job as $j)

        <div class="well" id="{!!isset($j->id)?$j->id:NULL!!}">
        <div class="row">
          <div class="col-md-9 col-sm-10">
          <a href="{{'jobseeker/alljobsshow/'.$j->id}}" target="_blank">
              <div class="row">
                <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12 text-center">
                
                  <h2><span class="text-success">{{isset($j->jobtitle )?$j->jobtitle :NULL}}</span></h2>
                </div>
                <div class="col-md-12 text-center">
                  <p>{{isset($j->instruction )?strlen($j->instruction)<100?$j->instruction:substr($j->instruction,0,100):NULL}}
                  </p>
                </div>

              </div>
              <div class="row">
                  <button><span class="text-success">Vacancies </span><span class="badge">{{isset($j->vacancies )?$j->vacancies :NULL}}</span></button>
                  <button><span class="text-warning"> Deadline</span><span class="badge">{{isset($j->deadline )?$j->deadline :NULL}}</span></button>
                  <button><span class="text-primary">Posted At</span><span class="badge">{{isset($j->created_at)?$j->created_at:NULL}}</span></button>
              </div>
            </a>

          </div>
          <div class="col-md-3 col-sm-2 table-responsive">
            
          </div>
        </div>
      

        </div>
        @empty
        <p class="text-warning">No Job Found</p>
        
        @endforelse
       {{$job->links()}} 
        

        
@endsection
