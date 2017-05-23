@extends('dashboard.layout.dashboard_layout')

@section('content')
	<div class="col-md-9">
		<div class="row">
			<div class="col-lg-offset-2 col-lg-8">
				<h1 class="text-center">Manage education lavel</h1>
					<form action="" method="get" class="form-inline">
						<div class="form-group search_div">
							<input type="text" class="form-control" name="term" id="manedusearch" placeholder="Search">
						</div>
					</form>
				<div class="panel panel-default">
				  <div class="panel-heading">
				    <h3 class="panel-title">education lavel list lists:<a href="#" id="addnew" class="pull-right" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus" aria-hidden="true"></i>
</a></h3>
				  </div>
<!-- laverl of education list start...... -->			  
				  <div class="panel-body" id="items">
				    <ul class="list-group" id="searcheble">
					@if(isset($lavelofeducations))
					@foreach($lavelofeducations as $lavelofeducation)

				      <li class="list-group-item ouritem" id="allcategory" data-toggle="modal" data-target="#myModal">{!!$lavelofeducation->edulavelname!!}
							<input type="hidden" class="pull-right" name="id" id="id" value="{!!$lavelofeducation->id!!}" />
				      </li>
					@endforeach
					@endif

				    </ul>
				  </div>

<!-- level list start...... -->


				</div>
			</div>
<!-- insert update form start...... -->	

			<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="title">Add new education lavel</h4>
			      </div>
			      <div class="modal-body">
			      	<input type="hidden" name="" id="modalid" />
			        <p><input type="text" class="form-control" name="name" placeholder="Write level name here" id="additem"></p>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-warning" id="delete" data-dismiss="modal">Delete</button>
			        <button type="button" class="btn btn-primary" id="save" data-dismiss="modal" style="display:none;">Save changes</button>
			        <button type="button" class="btn btn-primary" id="addbutton" data-dismiss="modal" style="display: none;">Add lavel</button>
			      </div>
			    </div><!-- /.modal-content -->
			  </div><!-- /.modal-dialog -->
			</div><!-- /.modal -->
<!--insert update form end......-->

		</div>
	</div>
</div>
	{{csrf_field()}}
	


	<script type="text/javascript">
		$(document).ready(function() {
		 	$.ajaxSetup({
	       headers: {
	             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	        }
	 		});
//edit and delete view start.......
			$(document).on('click', '.ouritem', function(){
			var text = $(this).text();
			var id = $(this).find('#id').val()
			$('#title').text("Edit edit lavel name");
			var text = $.trim(text);
			$('#additem').val(text);
			$('#modalid').val(id);
			$('#delete').show();
			$('#save').show();
			$('#addbutton').hide();
			 });
//edit and delete view end.......

//add new level start.......
			$(document).on('click','#addnew', function() {
				$('#title').text("Add new lavel");
				$('#additem').val('');
				$('#delete').hide();
				$('#save').hide();
				$('#addbutton').show();
			});
//add new level end.......			

//level insert start.....
			$('#addbutton').click(function() {
				var addeducationlavel = $('#additem').val();
				if (addeducationlavel=="") {
					alert('Please enter education lavel name');
				}else{
					$.ajax({
		                type:'post',
		                url:'{!!URL::to('inspector/managelevelofeducation')!!}',
		                data:{'addeducationlavel':addeducationlavel,'action':'inserteducationlavel'},
		                success:function(data){
		                    console.log('success');
						$('#items').load(location.href + ' #items');
		                },
		                error:function(){
		                }
		            });

				}
				
			});

//level insert end......	

//level update start ......		
			$('#save').click(function(event) {
				var savelevelid = $('#modalid').val();
				var savelevel = $('#additem').val();
					if (savelevel=="") {
					alert('Please enter level name');
				}else{
						$.ajax({
		                type:'post',
		                url:'{!!URL::to('inspector/managelevelofeducation')!!}',
		                data:{'savelevelid':savelevelid, 'savelevel':savelevel,'action':'updatelevel'},
		                success:function(data){

						$('#items').load(location.href + ' #items');
		                },
		                error:function(){

		                }
		            });}
				
			});

//level update end.....

//level delete start....

			$('#delete').click(function(event) {
				var dellevelid = $('#modalid').val();
						$.ajax({
		                type:'post',
		                url:'{!!URL::to('inspector/managelevelofeducation')!!}',
		                data:{'dellevelid':dellevelid,'action':'deletelevel'},
		                success:function(data){		      

						$('#items').load(location.href + ' #items');
		                },
		                error:function(){

		                }
		            });
				
			});

//level delete end....

//ajax search start......

			$('#manedusearch').on('keyup',function(){
				 $value = $(this).val();
				 $.ajax({
				 	type:'get',
				 	dataType:'html',
				 	url:'{!!URL::to('inspector/manedusearch')!!}',
				 	data:{'search':$value},
				 	success:function(data){
				 			$('#searcheble').html(data);
				 		
				 	}
				 });
			});

//ajax search start......


		});
	</script>

@endsection