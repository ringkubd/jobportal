<!DOCTYPE HTML>
<html lang="{{ config('app.locale') }}"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name=" @yield('meta-description')" content="">
    <meta name="author" content="">

    <title>@yield('title')|IDBJOBPORTAL</title>

    <!-- Bootstrap core CSS -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/> 
    {!! Html::style('bootstrap/css/bootstrap.min.css') !!}
    {!! Html::style('font-awesome/css/font-awesome.min.css') !!}
{{--     {!! Html::style('css/bootstrap-material-design.min.css') !!}
    {!! Html::style('css/ripples.min.css') !!} --}}
    {!! Html::style('css/style.css') !!}
    {!! Html::style('jquery_ui/jquery-ui.css') !!}
   {!! Html::script('js/jquery-3.2.1.min.js') !!}
{{--    {!! Html::script('js/material.min.js') !!}
   {!! Html::script('js/ripples.min.js') !!} --}}

@yield('style')
  </head>

<body>

@if(Auth::guard('jobseeker'))
@include('jobseeker.partial._nav')
<div class="row" style="margin-top:60px">

<div class="col-md-3">
@include('jobseeker.partial._sidebar')
</div>
@endif
<div class="col-md-7">
@yield('content')
</div>
<div class="col-md-2">
@include('jobseeker.partial._rightsidebar')
</div>
</div>
    

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
 
<!-- Latest compiled JavaScript -->

{!! Html::script('bootstrap/js/bootstrap.min.js') !!}
{!! Html::script('jquery_ui/jquery-ui.min.js') !!}
{{-- {!! Html::script('jquery_ui/jquery.smooth-scroll.js') !!} --}}
@yield('script')
  

</body>
</html>