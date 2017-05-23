<!-- about -->
<div class="about" id="about">
	<div class="container">
	@if($aboutme !=false)
	@foreach($aboutme as $about)
		<span class="about-top-w3">Who I am?</span>
		<h4 class="title-w3ls">About Me</h4>
		<h5 class="sub">{{$about->option_name}}</h5>
		<p class="para-w3-agile">{{$about->option_value}}</p>
		
		@endforeach
		@endif
		@if($skilldetails !=false)
		<h4 class="title-w3ls">My Skills</h4>
			<section class='bar'>
				<section class='wrap'>
					<div class='wrap_right'>
					  <div class='bar_group'>
						<div class="skills-bar">
						@foreach($skilldetails as $skills)
						<div class='bar_group__bar thin' label='{{$skills->skill_name}}' show_values='true' tooltip='true' value='{{$skills->value}}'></div>
						@endforeach
					</div>
					<div class='clear'></div>
				</section>
			</section>
		</div>
		
		@endif
	</div>
</div>
<!-- //about -->