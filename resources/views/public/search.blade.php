@extends('public.layout.public_layout')
@section('page_title')
Search
@endsection
@section('content')
{{-- Start search --}}
	<div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12">
                
                <div class="search-form wow pulse" data-wow-delay="0.8s">
                    <form action="{{url('search') }}" method="get" class=" form-inline">
                    {{ csrf_field() }}
                        <div class="form-group">
                            <input name="keyword" type="text" class="form-control" placeholder="Job Key Word">
                        </div>
                        <div class="form-group">
                            {!!Form::select('search_division', $division,null, ['placeholder'=>'Select Division','class' => 'form-control'])!!}
                        </div>
                        <div class="form-group">
                            {!!Form::select('search_category', $category,null, ['placeholder'=>'Select Category','class' => 'form-control'])!!}
                        </div>
                        <input type="submit" class="btn" value="Search">

                    </form>
                </div>
            </div>
        </div>
        {{-- End search --}}
        <div class="row">
        	<div class="col-sm-2">
        		
        	</div>

        	<div class="col-sm-8">

			@if(isset($searchableQuery) && count($searchableQuery)>0)
				
				@foreach($searchableQuery as $job)
        		<div class="well">
						
        		
        			<div class="row">
        				<div class="col-sm-12">
        					<h4 class="text-success">{{ $job->companyname }}</h4>
        				</div>
        				<div class="col-sm-12">

        					<h3>{{ $job->jobtitle }}</h3>
        				</div>
        				<div class="col-sm-12">
        					<div class="row">
        					<div class="col-sm-9">
        						<div class="row">
		        					<div class="col-sm-3">Education:</div>
		        					<div class="col-sm-9">
		        						{{ $job->educational_qualification }}
		        					</div>
	        					</div>
        					</div>
	        				</div>
        				</div>
        			</div>
        			<div class="row">
        				<div class="col-sm-9">
        					<div class="row">
        						<div class="col-sm-3">Experience:</div>
        						<div class="col-sm-9">
        							{{ $job->job_experiences_year }} at {{ $job->job_experiences_field }}
        						</div>
        					</div>
        				</div>
        				<div class="col-sm-3">
        					Deadline: {{ $job->deadline }}
        				</div>
        			</div>


				

        		</div>
        		@endforeach
        		{{ $searchableQuery->links() }}
        		@else
        		<div class="row">
        			<div class="col-sm-12">
        				<h3 class="text-center text-info">Sorry No Job Found</h3>
        			</div>
        		</div>
        		@endif
        	</div>
        	
        	<div class="col-sm-2"></div>
        </div>
@endsection