<!-- banner -->
<div class="banner-figures">
@if($js_banner_info !=false)
@foreach($js_banner_info as $js_pr_info)
	<div class="banner">
			<div class="container banner-drop">
				<div class="header">
					<div class="header-left logo">
						<h1><a href="index.html">Jobseeker portfolio</a></h1>
					</div>
					<div class="header-right">
						<nav>
						  <ul>
							<li class="active">
								<a href="index.html" class="active"><span>Home</span></a>
							</li>
							<li>
								<a href="#about" class="scroll"><span>About</span></a>
							</li>
							<li>
								<a href="#experience" class="scroll"><span>Experience</span></a>
							</li>
							<li>
								<a href="#projects" class="scroll"><span>Projects</span></a>
							</li>
							<li>
								<a href="#contact" class="scroll"><span>Contact</span></a>
							</li>
						  </ul>
						</nav>
						<div class="menu-icon animated wow zoomIn" data-wow-duration="1000ms" data-wow-delay="800ms"><span></span></div>
					</div>
					<div class="clearfix"> </div>
				</div>

				<div class="name" >
					<h2>{{$js_pr_info->name}}</h2>
					<p>{{$js_pr_info->extracaruculamname}}</p>
				</div>
				<div class="social-icons animated wow bounceInDown" data-wow-duration="1000ms" data-wow-delay="800ms">
					<ul class="top-links">
						@if($js_sociallink !=false)
						@foreach($js_sociallink  as $sociallink )
						<li><a href="{{$sociallink->option_value}}"><i class="fa fa-{{$sociallink->option_name}}"></i></a></li>						
						@endforeach
						@endif
					</ul>
				</div>
			</div>
							<div class="banner-btm-grid-w3ls">
		<div class="banner-left-wthree">
			<img src="{{$js_pr_info->profile_img}}" alt="portfolio picture" class="img-responsive">
			<ul class="address">
					
					<li>
							<ul class="address-text">
								<li><b>NAME</b></li>
								<li>: {{$js_pr_info->name}}</li>
							</ul>
						</li>
						<li>
							<ul class="address-text">
								<li><b>D.O.B</b></li>
								<li>:{{$js_pr_info->jobseeker_dob}}</li>
							</ul>
						</li>
						<li>
							<ul class="address-text">
								<li><b>ADDRESS </b></li>
								<li>:{{$js_pr_info->jobseeker_current_address}}</li>
							</ul>
						</li>
						<li>
							<ul class="address-text">
								<li><b>E-MAIL </b></li>
								<li><a href="{{$js_pr_info->email}}">:{{$js_pr_info->email}}</a></li>
							</ul>
						</li>
						
					</ul>
		</div>
		<div class="banner-right-w3-agileits">
			<iframe src="https://player.vimeo.com/video/150998376"></iframe>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
@endforeach
@endif
			<script>
				(function($){
				  $(".menu-icon").on("click", function(){
						$(this).toggleClass("open");
						$(".container").toggleClass("nav-open");
						$("nav ul li").toggleClass("animate");
				  });
				  
				})(jQuery);
			</script>
		
	</div>

<!-- //banner -->