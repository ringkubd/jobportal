<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from demo.themeregion.com/jobs-updated/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 May 2017 10:29:03 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Theme Region">
   	<meta name="description" content="">

    <title>{{ isset($portal_option['site_name'])?$portal_option['site_name']:"IDBJOBPORTAL" }} | @yield('page_title')</title>

    <!-- CSS -->	
    <link rel="stylesheet" href="{{ asset('default_assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('default_assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('default_assets/css/icofont.css') }}">
    <link rel="stylesheet" href="{{ asset('default_assets/css/slidr.css') }}">
    <link rel="stylesheet" href="{{ asset('default_assets/css/main.css') }}">
    <link id="preset" rel="stylesheet" href="{{ asset('default_assets/css/presets/preset1.css') }}">
    <link rel="stylesheet" href="{{ asset('default_assets/css/responsive.css') }}">
    @yield('style')
	
	<!-- font -->
	<link href='https://fonts.googleapis.com/css?family=Ubuntu:400,500,700,300' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Signika+Negative:400,300,600,700' rel='stylesheet' type='text/css'>

	<!-- icons -->
	<link rel="icon" href="{{ asset('default_assets/images/ico/favicon.ico') }}">	
    <link rel="apple-touch-icon" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('default_assets/images/ico/apple-touch-icon-114-precomposed.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('default_assets/images/ico/apple-touch-icon-72-precomposed.html') }}">
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('default_assets/images/ico/apple-touch-icon-57-precomposed.png') }}">
    <!-- icons -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Template Developed By ThemeRegion -->
  </head>
  <body>

  @include('public/default_partial/header')

  @yield('content')

  @include('public/default_partial/footer')



      <!-- JS -->
    <script src="{{ asset('default_assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('default_assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('default_assets/js/price-range.js') }}"></script>   
    <script src="{{ asset('default_assets/js/main.js') }}"></script>
    <script src="{{ asset('default_assets/js/switcher.js') }}"></script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','{{ asset('default_assets/js/analytics.js') }}','ga');

      ga('create', 'UA-73239902-1', 'auto');
      ga('send', 'pageview');

    </script>   
  </body>

</html>