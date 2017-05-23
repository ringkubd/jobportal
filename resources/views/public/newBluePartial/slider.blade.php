<div class="container-fluid">
<div class="container">
	
	
	<div class="content">
		<ul class="background-slider">
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
	
	
	
	
	<div class="row">
	<!--SEARCH SECTION START-->
	<h1 style="font-family: 'Lobster Two', cursive;">Find the right job</h1>
	<div class="col-md-8">
		 <form action="{{url('search') }}" method="get">
			<div class="col-md-5">
				<i class="fa fa-eye" aria-hidden="true" style="position:absolute;padding:10px;"></i>
				<input name="keyword" style="padding-left:30px;" type="text" name="" id="" class="form-control" placeholder="Search by keyword">
			</div>
			<div class="col-md-4">    
				{!!Form::select('search_category', $category,null, ['placeholder'=>'Select Categorys','class' => 'form-control'])!!}
			</div>
			<div class="col-md-3">
				<i class="fa fa-search" aria-hidden="true" style="position:absolute;padding:10px;"></i>
				<input type="submit" class="form-control" value="Search">
			</div>
		</form>

{{-- 		<form action="{{url('search') }}" method="get" class=" form-inline">
		{{ csrf_field() }}
		    <div class="form-group">
		        <input name="keyword" type="text" class="form-control" placeholder="Job Key Word">
		    </div>
		    <div class="form-group">
		        {!!Form::select('search_category', $category,null, ['placeholder'=>'Select Categorys','class' => 'form-control'])!!}
		    </div>
		    <input type="submit" class="btn" value="Search">




		</form> --}}
		<!--SEARCH AND END-->
		<hr>
		<div class=" col-md-12">
			<div class="row">
				<div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
					<div class="widget-bg-color-icon card-box">
						<div class="bg-icon bg-icon-info pull-left">
							<i style="padding:18px;" class="fa fa-superpowers fa-3x elm"></i>
						</div>
						<div class="text-right">
							<h3 class="text-dark"><b class="counter">31150</b></h3>
							<p class="text-muted">LIVE JOBS</p>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				
				<div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
					<div class="widget-bg-color-icon card-box fadeInDown animated">
						<div class="bg-icon bg-icon-info pull-left">
							<i style="padding:18px;" class="fa fa-bandcamp fa-3x elm"></i>
						</div>
						<div class="text-right">
							<h3 class="text-dark"><b class="counter">31150</b></h3>
							<p class="text-muted">NEW JOBS</p>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
					<div class="widget-bg-color-icon card-box fadeInDown animated">
						<div class="bg-icon bg-icon-info pull-left">
							<i style="padding:18px;" class="fa fa-linode fa-3x elm"></i>
						</div>
						<div class="text-right">
							<h3 class="text-dark"><b class="counter">31150</b></h3>
							<p class="text-muted">COMPANIES</p>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>		
			</div>						
		</div>
	</div>	
	<!--SIDEBAR SECTION START-->
	<div class="col-md-4">					
		<div class="bg-success mar-pad">
			
			<h4 style="font-family: 'Eagle Lake', cursive;">Divisional Jobs</h4>
			
			<div class="row">
				<div class="col-md-6 col-sm-12 col-lg-6">
					<a href="seacrchable?location[] =2" class="btn btn-primary btn-size b-x" target="_blank" name="location[]" >Dhaka</a>
					<a href="seacrchable?location[] =3" class="btn btn-primary btn-size b-x" target="_blank" name="location[]" >Barisa</a>
					<a href="seacrchable?location[] =4" class="btn btn-primary btn-size b-x" target="_blank" name="location[]" >Khulna</a>
					<a href="seacrchable?location[] =6" class="btn btn-primary btn-size b-x" target="_blank" name="location[]" >Chittagong</a>
				</div>
				<div class="col-md-6 col-sm-12 col-lg-6">
					<a href="seacrchable?location[] =5" class="btn btn-primary btn-size b-x" target="_blank" name="location[]" >Sylhet</a>


					<form action="seacrchable" id="searchable">
						<input type="button" value="1" class="submit">
					</form>
					
					<a href="seacrchable?location[] =1" class="btn btn-primary btn-size b-x" target="_blank" name="location[]" >Rajshahi </a>
					<a href="seacrchable?location[] =" class="btn btn-primary btn-size b-x" target="_blank" name="location[]" >Rangpur </a>
					<a href="seacrchable?location[] =" class="btn btn-primary btn-size b-x" target="_blank" name="location[]" >Mymensingh</a>
				</div>
			</div>
			
			
			<div class="quick-links desktop">
				<h4 style="font-family: 'Eagle Lake', cursive;">Quick links</h4>
				<div class="row" style="font-family: 'Domine', serif;">
					<div class="col-md-6">
						<ul class="" style="padding:0; list-style:none;">
							<li><a href="" target="_blank"><i class="fa fa-angle-double-right" aria-hidden="true"></i>
							Employer List</a></li>
							<li><a href="" target="_blank"><i class="fa fa-angle-double-right" aria-hidden="true"></i>
							New Jobs (24 hrs)</a></li>
							<li><a href="" target="_blank"><i class="fa fa-angle-double-right" aria-hidden="true"></i>
							Deadline Tomorrow</a></li>
						</ul>
					</div>
					<div class="col-md-6">
						<ul class="" style="padding:0; list-style:none;">
							<li><a href="" target="_blank"><i class="fa fa-angle-double-right" aria-hidden="true"></i>
							Contractual Jobs</a></li>                                
							<li><a href="" target="_blank" class="yellow"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Part time Jobs</a></li>
							<li><a href="" target="_blank"><i class="fa fa-angle-double-right" aria-hidden="true"></i>
							Overseas Jobs</a></li>
						</ul>
					</div>
				</div>
			</div>					
		</div>					
	</div>
	<!--SIDEBAR SECTION END-->	
	
</div>
</div>		
</div>