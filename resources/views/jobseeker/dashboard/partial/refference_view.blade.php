<div class="row">
		<div class="col-sm-10 table-responsive">
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<h2 class="text-center">Refference information</h2>	
				</div>

					
			</div>
    			<div class="well well-sm">
				  <div class="well">
				  	<div class="row">
				  		<div class="col-sm-6">
				  			
				  		</div>
				  		<div class="col-sm-6">
				  			<span class="pull-right">
				  				<button class="btn btn-default " data-target="#refference_form" data-toggle="modal">Add Reference <i class="fa fa-plus"></i></button>
				  			</span>
				  		</div>
				  	</div>
				  		
				  </div>
			  		<div class="row">
				    	@if($get_refference != FALSE)
							@foreach($get_refference as $refference)
							<div class="col-sm-4">
								<ul class="table table-striped">
								<tr>
									<li><th>Name: </th><td>{{$refference->reference_name}}</td></li>
									<li><th>Organigation:</th><td>{{$refference->organization}}</td></li>
									<li><th>Disignation:</th><td>{{$refference->disignation}}</td></li>
									<li><th>Address:</th><td>{{$refference->address}}</td></li>
									<li><th>Office phone:</th><td>{{$refference->office_phone}}</td></li>
									<li><th>Home phone:</th><td>{{$refference->home_phone}}</td></li>
									<li><th>Mobile:</th><td>{{$refference->mobile}}</td></li>
									<li><th>Email:</th><td>{{$refference->email}}</td></li>
									<li><th>Relation:</th><td>{{$refference->relation}}</td></li>
									<th><button class="btn btn-danger refdel" value="{{$refference->id}}">Delete</button></th><td></td>
								</tr>
								</ul>
							</div>
							@endforeach
						@else
						<h4 class="text-center text-danger">No data found</h4>
						@endif
					</div>
		</div>


		</div>
	</div>
	<script>
		$(document).ready(function() {
			$.ajaxSetup({
			        headers: {
			            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			        }
				});
			$(document).on('submit','#refference_insert_form',function(e){
				e.preventDefault();
				$.ajax({
					url: $(this).attr('action'),
					type: 'put',
					data: $(this).serialize(),
					success:function(data){
						 $('#refference_table').load(location.href+ ' #refference_table');
						  $('#refference_form').modal('hide');

					}
				});
				
			});
			$(document).on('click','.refdel',function(){
				var delid=$(this).val();
				$.ajax({
					url: '{!!url("/jobseeker/infoupdate")!!}',
					type: 'put',
					data:{delid:delid,action:"refference_delete"},
					success:function(d){
					$('#refference_table').load(location.href+ ' #refference_table');

					}
					
				

			});
			
			

		});


		});
	</script>
