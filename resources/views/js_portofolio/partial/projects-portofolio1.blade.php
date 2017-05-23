<!-- projects -->
<div class="projects" id="projects">
	<div class="container">
	<span class="about-top-w3">The best of my projects </span>
		<h4 class="title-w3ls">Featured Projects</h4>
		<div class="news-bottom">
		@if($project !=false)
		@php
			$i=0; 
		@endphp
		@foreach($project as $proj )
		@php
			$i++;
		@endphp
		@if($i%2==0)
				<div class="news-one-wthree-agile">
					<div class="col-md-6 news-left">
						        <div class="biseller-column">
										<a class="lightbox" href="#one">
											<img src="{{asset("jsPortofolio/images/p1.jpg")}}" alt=""/>
										</a> 
										<div class="lightbox-target" id="one">
										 <img src="{{asset('jsPortofolio/images/p1.jpg')}}" alt=""/>
										 <p class="pop">{{$proj->project_description}}</p>
										   <a class="lightbox-close" href="#"> </a>
											
											<div class="clearfix"> </div>
											
										</div>
							   </div>

					</div>	
					<div class="col-md-6 news-right"> 
					<a href="#one"><h4>{{$proj->projecttitle}}</h4></a>
						<p class="para-w3-agile">{{$proj->project_description}}</p>	
					</div>	
					<div class="clearfix"> </div>	
				</div>
				@else

					<div class="news-one-wthree-agile">
					<div class="col-md-6 news-right"> 
						<a href="#three"><h4>{{$proj->projecttitle}}</h4></a>
						<p class="para-w3-agile">{{$proj->project_description}}</p>	
					</div>	
					<div class="col-md-6 news-left">
						 <div class="biseller-column">
										<a class="lightbox" href="#three">
											<img src="{{asset("jsPortofolio/images/p1.jpg")}}" alt=""/>
										</a> 
										<div class="lightbox-target" id="three">
										 <img src="{{asset("jsPortofolio/images/p1.jpg")}}" alt=""/>
										 <p class="pop">{{$proj->project_description}}</p>
										   <a class="lightbox-close" href="#"> </a>
											
											<div class="clearfix"> </div>
										</div>
							</div>

					</div>						
					<div class="clearfix"> </div>	
				</div>	

				@endif
				@endforeach		
				
				@endif				
			</div>	
	</div>
</div>
<!-- //projects -->


