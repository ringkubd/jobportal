<!--work-experience-->
	<div id="experience" class="experience">
		<div class="container">
		@if($workexperience !=false)

		<span class="about-top-w3">Versatile Web Designer</span>
			<h4 class="title-w3ls">Work Experience</h4>
			@php
			$i=0; 
			@endphp
			@foreach($workexperience as $experience)
			@php
			$i++;
			if($i%2==0){
				$cl='work-left';

			} else{$cl='work-right';}
			@endphp

			<div class="work-info"> 
				<div class="col-md-6 @php if($i%2!=0){$cl='work-left';} else{$cl='work-right work-right2';} @endphp {{$cl}}"> 
					<h4>{{$experience->year}}</h4>
				</div>
				<div class="col-md-6 @php if($i%2!=0){$cl='work-right';} else{$cl='work-left work-left2';}@endphp {{$cl}}">

					<h5>@if($i%2!=0)<span class="glyphicon glyphicon-briefcase"> </span> {{$experience->position}}</h5> @else {{$experience->position}} <span class="glyphicon glyphicon-briefcase"> </span> </h5>@endif
					<p>{{$experience->work_description}} </p>
				</div>
				<div class="clearfix"> </div>
			</div>
			@endforeach
			@endif
		</div>
	</div>
	<!--//work-experience-->