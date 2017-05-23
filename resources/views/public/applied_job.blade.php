{{-- Header --}}
@extends('public.layout.default_layout')
@section('page_title')
HomePage
@endsection
@section('content')

	<section class=" job-bg page  ad-profile-page">
		<div class="container">
			<div class="breadcrumb-section">
				<ol class="breadcrumb">
					<li><a href="index-2.html">Home</a></li>
					<li>Applied Job</li>
				</ol>						
				<h2 class="title">Applied Job</h2>
			</div><!-- breadcrumb-section -->
			
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
					<li class="active"><a href="applied-job.html">applied job</a></li>
					<li><a href="delete-account.html">Close account</a></li>
				</ul>
			</div><!-- ad-profile -->

			<div class="section trending-ads latest-jobs-ads">
				<h4>Applied Jobs</h4>
				<div class="job-ad-item">
					<div class="item-info">
						<div class="item-image-box">
							<div class="item-image">
								<a href="job-details.html"><img src="images/job/4.png" alt="Image" class="img-responsive"></a>
							</div><!-- item-image -->
						</div>

						<div class="ad-info">
							<span><a href="job-details.html" class="title">Human Resource Manager</a> @ <a href="#">Dropbox Inc</a></span>
							<div class="ad-meta">
								<ul>
									<li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>San Francisco, CA, US </a></li>
									<li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i>Full Time</a></li>
									<li><a href="#"><i class="fa fa-money" aria-hidden="true"></i>$25,000 - $35,000</a></li>
									<li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i>HR/Org. Development</a></li>
								</ul>
							</div><!-- ad-meta -->									
						</div><!-- ad-info -->
						<div class="close-icon">
							<i class="fa fa-window-close" aria-hidden="true"></i>
						</div>
					</div><!-- item-info -->
				</div><!-- ad-item -->

				<div class="job-ad-item">
					<div class="item-info">
						<div class="item-image-box">
							<div class="item-image">
								<a href="job-details.html"><img src="images/job/2.png" alt="Image" class="img-responsive"></a>
							</div><!-- item-image -->
						</div>

						<div class="ad-info">
							<span><a href="job-details.html" class="title">Graphics Designer</a> @ <a href="#">AOK Security</a></span>
							<div class="ad-meta">
								<ul>
									<li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>San Francisco, CA, US </a></li>
									<li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i>Full Time</a></li>
									<li><a href="#"><i class="fa fa-money" aria-hidden="true"></i>$25,000 - $35,000</a></li>
									<li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i>HR/Org. Development</a></li>
								</ul>
							</div><!-- ad-meta -->									
						</div><!-- ad-info -->
						<div class="close-icon">
							<i class="fa fa-window-close" aria-hidden="true"></i>
						</div>
					</div><!-- item-info -->
				</div><!-- ad-item -->					

				<div class="job-ad-item">
					<div class="item-info">
						<div class="item-image-box">
							<div class="item-image">
								<a href="job-details.html"><img src="images/job/3.png" alt="Image" class="img-responsive"></a>
							</div><!-- item-image -->
						</div>

						<div class="ad-info">
							<span><a href="job-details.html" class="title">CTO</a> @ <a href="#">Volja Events &amp; Entertainment</a></span>
							<div class="ad-meta">
								<ul>
									<li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>San Francisco, CA, US </a></li>
									<li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i>Full Time</a></li>
									<li><a href="#"><i class="fa fa-money" aria-hidden="true"></i>$25,000 - $35,000</a></li>
									<li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i>HR/Org. Development</a></li>
								</ul>
							</div><!-- ad-meta -->									
						</div><!-- ad-info -->
						<div class="close-icon">
							<i class="fa fa-window-close" aria-hidden="true"></i>
						</div>
					</div><!-- item-info -->
				</div><!-- ad-item -->	

				<div class="job-ad-item">
					<div class="item-info">
						<div class="item-image-box">
							<div class="item-image">
								<a href="job-details.html"><img src="images/job/1.png" alt="Image" class="img-responsive"></a>
							</div><!-- item-image -->
						</div>

						<div class="ad-info">
							<span><a href="job-details.html" class="title">Project Manager</a> @ <a href="#">Dominos Pizza</a></span>
							<div class="ad-meta">
								<ul>
									<li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>San Francisco, CA, US </a></li>
									<li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i>Full Time</a></li>
									<li><a href="#"><i class="fa fa-money" aria-hidden="true"></i>$25,000 - $35,000</a></li>
									<li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i>HR/Org. Development</a></li>
								</ul>
							</div><!-- ad-meta -->									
						</div><!-- ad-info -->
						<div class="close-icon">
							<i class="fa fa-window-close" aria-hidden="true"></i>
						</div>
					</div><!-- item-info -->
				</div><!-- ad-item -->	
	
				<div class="job-ad-item">
					<div class="item-info">
						<div class="item-image-box">
							<div class="item-image">
								<a href="job-details.html"><img src="images/job/3.png" alt="Image" class="img-responsive"></a>
							</div><!-- item-image -->
						</div>

						<div class="ad-info">
							<span><a href="job-details.html" class="title">CTO</a> @ <a href="#">Volja Events &amp; Entertainment</a></span>
							<div class="ad-meta">
								<ul>
									<li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>San Francisco, CA, US </a></li>
									<li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i>Full Time</a></li>
									<li><a href="#"><i class="fa fa-money" aria-hidden="true"></i>$25,000 - $35,000</a></li>
									<li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i>HR/Org. Development</a></li>
								</ul>
							</div><!-- ad-meta -->									
						</div><!-- ad-info -->
						<div class="close-icon">
							<i class="fa fa-window-close" aria-hidden="true"></i>
						</div>
					</div><!-- item-info -->
				</div><!-- ad-item -->	

				<div class="job-ad-item">
					<div class="item-info">
						<div class="item-image-box">
							<div class="item-image">
								<a href="job-details.html"><img src="images/job/1.png" alt="Image" class="img-responsive"></a>
							</div><!-- item-image -->
						</div>

						<div class="ad-info">
							<span><a href="job-details.html" class="title">Project Manager</a> @ <a href="#">Dominos Pizza</a></span>
							<div class="ad-meta">
								<ul>
									<li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>San Francisco, CA, US </a></li>
									<li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i>Full Time</a></li>
									<li><a href="#"><i class="fa fa-money" aria-hidden="true"></i>$25,000 - $35,000</a></li>
									<li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i>HR/Org. Development</a></li>
								</ul>
							</div><!-- ad-meta -->									
						</div><!-- ad-info -->
						<div class="close-icon">
							<i class="fa fa-window-close" aria-hidden="true"></i>
						</div>
					</div><!-- item-info -->
				</div><!-- ad-item -->

				<div class="job-ad-item">
					<div class="item-info">
						<div class="item-image-box">
							<div class="item-image">
								<a href="job-details.html"><img src="images/job/4.png" alt="Image" class="img-responsive"></a>
							</div><!-- item-image -->
						</div>

						<div class="ad-info">
							<span><a href="job-details.html" class="title">Human Resource Manager</a> @ <a href="#">Dropbox Inc</a></span>
							<div class="ad-meta">
								<ul>
									<li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>San Francisco, CA, US </a></li>
									<li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i>Full Time</a></li>
									<li><a href="#"><i class="fa fa-money" aria-hidden="true"></i>$25,000 - $35,000</a></li>
									<li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i>HR/Org. Development</a></li>
								</ul>
							</div><!-- ad-meta -->									
						</div><!-- ad-info -->
						<div class="close-icon">
							<i class="fa fa-window-close" aria-hidden="true"></i>
						</div>
					</div><!-- item-info -->
				</div><!-- ad-item -->	
			</div><!-- latest-jobs-ads -->									
		</div><!-- container -->
	</section><!-- ad-profile-page -->

@endsection