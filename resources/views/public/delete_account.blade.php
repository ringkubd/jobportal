{{-- Header --}}
@extends('public.layout.default_layout')
@section('page_title')
HomePage
@endsection
@section('content')

	<!-- delete-page -->
	<section class="clearfix job-bg delete-page">
		<div class="container">
			<div class="breadcrumb-section">
				<!-- breadcrumb -->
				<ol class="breadcrumb">
					<li><a href="index-2.html">Home</a></li>
					<li>Close account</li>
				</ol><!-- breadcrumb -->						
				<h2 class="title">Close Account</h2>
			</div><!-- banner -->

			<div class="job-profile section">	
				<div class="user-profile">
					<div class="user-images">
						<img src="images/user.jpg" alt="User Images" class="img-responsive">
					</div>
					<div class="user">
						<h2>Hello, <a href="#">Jhon Doe</a></h2>
						<h5>You last logged in at: 10-01-2017 6:40 AM [ USA time (GMT + 6:00hrs)]</h5>
					</div>

					<div class="favorites-user">
						<div class="my-ads">
							<a href="applied-job.html">29<small>Apply Job</small></a>
						</div>
						<div class="favorites">
							<a href="bookmark.html">18<small>Favorites</small></a>
						</div>
					</div>								
				</div><!-- user-profile -->
						
				<ul class="user-menu">
					<li><a href="profile.html">Account Info </a></li>
					<li><a href="resume.html">View Resume</a></li>
					<li><a href="edit-resume.html">Edit Resume</a></li>
					<li><a href="profile-details.html">Profile Details</a></li>
					<li><a href="bookmark.html">Bookmark</a></li>
					<li><a href="applied-job.html">applied job</a></li>
					<li class="active"><a href="delete-account.html">Close account</a></li>
				</ul>
			</div><!-- ad-profile -->		
			
			<div class="close-account text-center">
				<div class="delete-account section">
					<h2>Delete Your Account</h2>
					<h4>Are you sure, you want to delete your account?</h4>
					<a href="#" class="btn">Delete Account</a>
					<a href="#" class="btn cancle">Cancle</a>
				</div>			
			</div>
		</div><!-- container -->
	</section><!-- delete-page -->

@endsection