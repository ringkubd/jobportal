@extends('index')

@section('style')
@endsection

@section('script')
@endsection


@section('content')
<div class="container">
	<div class="row">


	{{--Left Sidebar--}}
	@include('employer.partial._leftsidebar')

		
	{{--Main Content--}}
	@yield('main_content')


	<div class="col-md-6">
		
	</div>
	{{--Right Sidebar--}}
	@include('employer.partial._rightsidebar')

	</div>
	<hr>
	{{--footer--}}
	@include('employer.partial._footer')
@endsection