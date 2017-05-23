<!DOCTYPE html>
<html lang="en">
<head>
<title>Elegant Resume a Personal Category Flat Bootstrap Responsive Website Template| Home :: w3layouts</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Elegant Resume Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="{{ asset('ample/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('public/css/font-awesome.min.css') }}">

{{ Html::style('jsPortofolio/css/style.css') }}

<!-- js -->
{{ Html::script('js/jquery-3.2.1.min.js') }}
<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Oleo+Script:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href="//fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">


<!-- start-smooth-scrolling -->
{{ Html::script('jsPortofolio/js/move-top.js') }}
{{ Html::script('jsPortofolio/js/easing.js') }}

<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smooth-scrolling -->
</head>
	
<body>
{{--Bnanner--}}

	@include('js_portofolio.partial.banner-portofolio1')

{{--Bnanner--}}
{{--about--}}
	@include('js_portofolio.partial.about-portofolio1')
{{--about--}}
{{--work--}}
	@include('js_portofolio.partial.work-portofolio1')
{{--work--}}
{{--projects--}}
	@include('js_portofolio.partial.projects-portofolio1')
{{--projects--}}

{{-- contact --}}
	@include('js_portofolio.partial.contact-portofolio1')
{{-- contact --}}
{{--footer--}}
	@include('js_portofolio.partial.footer-portofolio1')
{{--footer--}}
<!-- //footer -->
{{Html::script('jsPortofolio/js/bars.js')}}
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
</body>
</html>