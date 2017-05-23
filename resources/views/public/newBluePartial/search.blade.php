
	<div class="row">
	<!--SEARCH SECTION START-->
	<h1 style="font-family: 'Lobster Two', cursive;">Find the right job</h1>
	<div class="col-md-8 col-md-offset-2">
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
	</div>
</div>