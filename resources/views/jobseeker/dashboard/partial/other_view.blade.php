<div class="row">
		<div class="col-sm-8 table-responsive">
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<h2 class="text-center">Other information</h2>	
				</div>

					
			</div>
    			<div class="well well-sm">
				  <div class="well">
				  	<div class="row">
				  		<div class="col-sm-6">
				  			
				  		</div>
				  		<div class="col-sm-6">
				  			<span class="pull-right">
				  				<button class="btn btn-default " data-target="#othrelin" data-toggle="modal">Add more Skill <i class="fa fa-plus"></i></button>
				  			</span>
				  		</div>
				  	</div>
				  		
				  </div>
				    <table class="table table-bordered" id="skill_table">
								<tbody>
									@if($get_skill != FALSE)
									@foreach($get_skill as $skill)
									<tr>
										<th>{{$skill->specializationorskill}}</th>
										<td>{{$skill->skilldescription}}</td>
										<th><button class="btn btn-danger delbtn pull-right" value="{{$skill->id}}">Delete</button></th>
									</tr>

									@endforeach

									@endif
									
										
								</tbody>
						</table>								
		</div>

         <div class="well well-sm">
				  <div class="well">
				  	<div class="row">
				  		<div class="col-sm-6">
				  			
				  		</div>
				  		<div class="col-sm-6">
				  			<span class="pull-right">
				  				<button class="btn btn-default " data-target="#trainig_form" data-toggle="modal">Add training  <i class="fa fa-plus"></i></button>
				  			</span>
				  		</div>
				  	</div>
				  		
				  </div>
				    <table class="table table-bordered" id="training_table">
				               <thead>
				               	    <tr>
									    <th>Training Title</th>
									    <th>Topic</th>
									    <th>Institute</th>
									    <th>Year</th>
									    <th>Duration</th>
									    <th>Location</th>
									    <th>Country</th>
									    <th>Action</th>

										
								    </tr>


				               </thead>
								<tbody>
									@if($get_training!= FALSE)
									@forelse($get_training as $training)
									<tr>
									   

										<td>{{$training->training_title}}</td>
								    
								    	
								    	<td>{{$training->topic}}</td>
								   
								    	<td>{{$training->institute}}</td>
								    
								    	
								    	<td>{{$training->year}}</td>
								    
								    	
								    	<td>{{$training->duration}}</td>
								    
								    	
								    	<td>{{$training->location}}</td>
								   
								       <td>{{$training->country}}</td>
								       <td><button class="btn btn-danger pull-right del-btn-training" value="{{$training->id}}">Delete</button></td>

								    </tr>
								   
					
									
									@empty

									@endforelse
                                     @else
									<tr>
										<td colspan="8" class="text-center text-danger">No Training data set yet</td>
									</tr>
									

									@endif
									
										
								</tbody>
						</table>								
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
			$(document).on('submit','#skill_insert_form',function(e){
				e.preventDefault();
				$.ajax({
					url: $(this).attr('action'),
					type: 'put',
					data: $(this).serialize(),
					success:function(data){
						 $('#skill_table').load(location.href+ ' #skill_table');
						  $('#othrelin').modal('hide');

					}
				});
				
			});
			$(document).on('click','.delbtn',function(){
				var delid=$(this).val();
				$.ajax({
					url: '{!!url("/jobseeker/infoupdate")!!}',
					type: 'put',
					data:{delid:delid,action:"skill_delete"},
					success:function(d){
					$('#skill_table').load(location.href+ ' #skill_table');

					}
					
				

			});
			
			

		});



			

		$(document).on('submit','#training_insert_form',function(e){
			e.preventDefault();
			$.ajax({
				url:  '{!!url("/jobseeker/infoupdate")!!}',
				type: 'put',
				data:$(this).serialize(),
				success:function(d){
				$('#training_table').load(location.href+ ' #training_table');

				}
			})
			
			
		})	


		$(document).on('click','.del-btn-training',function(){
				var delid=$(this).val();
				$.ajax({
					url: '{!!url("/jobseeker/infoupdate")!!}',
					type: 'put',
					data:{delid:delid,action:"training_delete"},
					success:function(d){
					$('#training_table').load(location.href+ ' #training_table');

					}
					
				

			});
			
			

		});
		});
	</script>
