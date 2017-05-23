{{-- Header --}}
@extends('public.layout.default_layout')
@section('page_title')
HomePage
@endsection
@section('content')
{{-- banner Part --}}
        @include('public.default_partial.banner')
{{--End banner Part --}}

	<div class="page">
		<div class="container">
			<div class="section category-items job-category-items  text-center">
				<ul class="category-list">
				@foreach($get_cats as $category)	
					<li class="category-item">
						<a href="job-list.html">
							<div class="category-icon"><img src="{{ asset('default_assets/images/icon/1.png') }}" alt="images" class="img-responsive"></div>
							<span class="category-title">{{$category->catagoryname}}</span>
							<span class="category-quantity">(1298)</span>
						</a>
					</li><!-- category-item -->
				@endforeach
							
				</ul>

							
			</div><!-- category ad -->			

			<div class="section latest-jobs-ads">
				<div class="section-title tab-manu">
					<h4>Latest Jobs</h4>
					 <!-- Nav tabs -->      
					<ul class="nav nav-tabs" role="tablist">
						<li role="presentation"><a href="#hot-jobs" data-toggle="tab">Hot Jobs</a></li>
						<li role="presentation"><a href="#recent-jobs" data-toggle="tab">Recent Jobs</a></li>
						<li role="presentation" class="active"><a href="#popular-jobs" data-toggle="tab">Popular Jobs</a></li>
					</ul>
				</div>

				<div class="tab-content">
					<div role="tabpanel" class="tab-pane fade in" id="hot-jobs">

					@if(count($hotjobs)>0)
					@foreach($hotjobs as $hotjob)
					
						<div class="job-ad-item">
							<div class="item-info">
								<div class="item-image-box">
									<div class="item-image">
										<a href="job-details.html">{{Html::image('/storage/company_logo/'.$hotjob->companylogo,'hotjob image',array('class'=>'img-responsive'))}}</a>
									</div><!-- item-image -->
								</div>

								<div class="ad-info">
									<span><a href="job-details.html" class=title>{{$hotjob->jobtitle}}</a> @ <a href="#">{{$hotjob->companyname}}</a></span>
									<div class="ad-meta">
										<ul>
											<li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>{{$hotjob->div_name}}</a></li>
											<li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i>{{$hotjob->jobtype}}</a></li>
											<li><a href="#"><i class="fa fa-money" aria-hidden="true"></i>{{$hotjob->salaryrange}}</a></li>
											<li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i>{{$hotjob->catname}}</a></li>
										</ul>
									</div><!-- ad-meta -->									
								</div><!-- ad-info -->
								<div class="button">
									<a href="#" class="btn btn-primary">Apply Now</a>
								</div>
							</div><!-- item-info -->
						</div><!-- ad-item -->

						@endforeach
						@else
						<h1>No hot job found at this moment</h1>
						@endif	

					</div><!-- tab-pane -->

					<div role="tabpanel" class="tab-pane fade in" id="recent-jobs">
					
					@if(count($recemtJobs)>0)
					@foreach($recemtJobs as $recemtJob)

					<div class="job-ad-item">
						<div class="item-info">
							<div class="item-image-box">
								<div class="item-image">
									<a href="job-details.html">{{Html::image('/storage/company_logo/'.$recemtJob->companylogo,'recemtJob image',array('class'=>'img-responsive'))}}</a>
								</div><!-- item-image -->
							</div>

							<div class="ad-info">
								<span><a href="job-details.html" class=title>{{$recemtJob->jobtitle}}</a> @ <a href="#">{{$recemtJob->companyname}}</a></span>
								<div class="ad-meta">
									<ul>
										<li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>{{$recemtJob->div_name}}</a></li>
										<li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i>{{$recemtJob->jobtype}}</a></li>
										<li><a href="#"><i class="fa fa-money" aria-hidden="true"></i>{{$recemtJob->salaryrange}}</a></li>
										<li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i>{{$recemtJob->catname}}</a></li>
									</ul>
								</div><!-- ad-meta -->									
							</div><!-- ad-info -->
							<div class="button">
								<a href="#" class="btn btn-primary">Apply Now</a>
							</div>
						</div><!-- item-info -->
					</div><!-- ad-item -->

						@endforeach
						@else
						<h1>No hot job found at this moment</h1>
						@endif	


					</div><!-- tab-pane -->

					<div role="tabpanel" class="tab-pane fade in active" id="popular-jobs">
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
								<div class="button">
									<a href="#" class="btn btn-primary">Apply Now</a>
								</div>
							</div><!-- item-info -->
						</div><!-- ad-item -->	
				
					</div><!-- tab-pane -->
				</div><!-- tab-content -->
			</div><!-- trending ads -->		

			<div class="ad-section text-center">
				<a href="#"><img src="images/ads/3.jpg" alt="Image" class="img-responsive"></a>
			</div><!-- ad-section -->

			<div class="section workshop-traning">
				<div class="section-title">
					<h4>Workshop Traning</h4>
					<a href="#" class="btn btn-primary">See all</a>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<div class="workshop">
							<img src="images/job/5.png" alt="Image" class="img-responsive">
							<h3><a href="#">Business Process Management Training</a></h3>
							<h4>Course Duration: 3 Month ( Sat, Mon, Fri)</h4>
							<div class="workshop-price">
								<h5>Course instructor: Kim Jon ley</h5>
								<h5>Course Amount: $200</h5>
							</div>
							<div class="ad-meta">
								<div class="meta-content">
									<span class="dated"><a href="#">7 Jan 10:10 pm </a></span>
								</div>
								<div class="user-option pull-right">
									<a href="#"><i class="fa fa-map-marker"></i> </a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="workshop">
							<img src="images/job/6.png" alt="Image" class="img-responsive">
							<h3><a href="#">Employee Motivation and Engagement</a></h3>
							<h4>Course Duration: 3 Month ( Sat, Mon, Fri)</h4>
							<div class="workshop-price">
								<h5>Course instructor: Kim Jon ley</h5>
								<h5>Course Amount: $200</h5>
							</div>
							<div class="ad-meta">
								<div class="meta-content">
									<span class="dated"><a href="#">7 Jan 10:10 pm </a></span>
								</div>
								<div class="user-option pull-right">
									<a href="#"><i class="fa fa-map-marker"></i> </a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div><!-- workshop-traning -->

			<div class="section cta cta-two text-center">
				<div class="row">
					<div class="col-sm-4">
						<div class="single-cta">
							<div class="cta-icon icon-jobs">
								<img src="images/icon/31.png" alt="Icon" class="img-responsive">
							</div><!-- cta-icon -->
							<h3>3,412</h3>
							<h4>Live Jobs</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
						</div>
					</div><!-- single-cta -->

					<div class="col-sm-4">
						<div class="single-cta">
							<!-- cta-icon -->
							<div class="cta-icon icon-company">
								<img src="images/icon/32.png" alt="Icon" class="img-responsive">
							</div><!-- cta-icon -->
							<h3>12,043</h3>
							<h4>Total Company</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
						</div>
					</div><!-- single-cta -->

					<div class="col-sm-4">
						<div class="single-cta">
							<div class="cta-icon icon-candidate">
								<img src="images/icon/33.png" alt="Icon" class="img-responsive">
							</div><!-- cta-icon -->
							<h3>5,798,298</h3>
							<h4>Total Candidate</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
						</div>
					</div><!-- single-cta -->
				</div><!-- row -->
			</div><!-- cta -->			

		</div><!-- conainer -->
	</div><!-- page -->
	
	<!-- download -->
	<section id="download" class="clearfix parallax-section">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 text-center">
					<h2>Download on App Store</h2>
				</div>
			</div><!-- row -->

			<!-- row -->
			<div class="row">
				<!-- download-app -->
				<div class="col-sm-4">
					<a href="#" class="download-app">
						<img src="images/icon/16.png" alt="Image" class="img-responsive">
						<span class="pull-left">
							<span>available on</span>
							<strong>Google Play</strong>
						</span>
					</a>
				</div><!-- download-app -->

				<!-- download-app -->
				<div class="col-sm-4">
					<a href="#" class="download-app">
						<img src="images/icon/17.png" alt="Image" class="img-responsive">
						<span class="pull-left">
							<span>available on</span>
							<strong>App Store</strong>
						</span>
					</a>
				</div><!-- download-app -->

				<!-- download-app -->
				<div class="col-sm-4">
					<a href="#" class="download-app">
						<img src="images/icon/18.png" alt="Image" class="img-responsive">
						<span class="pull-left">
							<span>available on</span>
							<strong>Windows Store</strong>
						</span>
					</a>
				</div><!-- download-app -->
			</div><!-- row -->
		</div><!-- contaioner -->
	</section><!-- download -->

	
@endsection