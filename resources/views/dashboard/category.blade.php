@extends('dashboard.layout.dashboard_layout')

@section('content')
	<div class="col-md-9">
		<div class="row">
			<div class="col-lg-offset-2 col-lg-8">
				<h1 class="text-center"> Manage Category</h1>
					<form action="" method="get" class="form-inline">
						<div class="form-group search_div">
							<input type="text" class="form-control" name="term" id="categorysearch" placeholder="Search">
						</div>
					</form>
				<div class="panel panel-default">
				  <div class="panel-heading">
				    <h3 class="panel-title">Category lists:<a href="#" id="addnew" class="pull-right" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus" aria-hidden="true"></i>
</a></h3>
				  </div>
				  <!-- category list start...... -->
				  <div class="panel-body" id="items">
				    <ul class="list-group" id="searcheble">
				   
					@foreach($catagories as $catagory)
					
				      <li class="list-group-item ouritem" id="allcategory" data-toggle="modal" data-target="#myModal">{{$catagory->catagoryname}}
							<input type="hidden" name="id" id="id" value="{{$catagory->id}}" />
				      </li>

					@endforeach

				    </ul>
				  </div>
				   <!-- category list end...... -->
			
				{{$catagories->links()}}

				</div>
			</div>

			

			<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="title">Add new category</h4>
			      </div>
			       <!-- category insert update from start ...... -->
			      <div class="modal-body">
			      	<input type="hidden" name="" id="modalid" />
			        <p><input type="text" class="form-control" name="category" placeholder="Write category here" id="additem"></p>
			      </div>
			      <!-- category insert update from end ...... -->
			      <div class="modal-footer">
			        <button type="button" class="btn btn-warning" id="delete" data-dismiss="modal">Delete</button>
			        <button type="button" class="btn btn-primary" id="save" data-dismiss="modal" style="display:none;">Save changes</button>
			        <button type="button" class="btn btn-primary" id="addbutton" data-dismiss="modal" style="display: none;">Add category</button>
			      </div>
			    </div><!-- /.modal-content -->
			  </div><!-- /.modal-dialog -->
			</div><!-- /.modal -->


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

			$(document).on('click', '.ouritem', function(){
			//alert(5);
			var text = $(this).text();
			var id = $(this).find('#id').val()
			$('#title').text("Edit Category Item");
			var text = $.trim(text);
			$('#additem').val(text);
			$('#modalid').val(id);
			$('#delete').show();
			$('#save').show();
			$('#addbutton').hide();

			//console.log(text);
			 });

			$(document).on('click','#addnew', function() {
				$('#title').text("Add new category");
				$('#additem').val('');
				$('#delete').hide();
				$('#save').hide();
				$('#addbutton').show();
			});
//category insert start........
			$('#addbutton').click(function() {
				var addcategory = $('#additem').val();
				if (addcategory=="") {
					alert('Please enter category');
				}else{
					$.ajax({
		                type:'post',
		                url:'{!!URL::to('inspector/managecategory')!!}',
		                data:{'addcategory':addcategory,'action':'insertcategory'},
		                success:function(data){
						$('#items').load(location.href + ' #items');
		                },
		                error:function(){

		                }
		            });
				}
				
			});

//category insert end.......

//category delete start .......
			$('#delete').click(function(event) {
				var categorydelid = $('#modalid').val();
				$.ajax({
		                type:'post',
		                url:'{!!URL::to('inspector/managecategory')!!}',
		                data:{'categorydelid':categorydelid,'action':'deletecategory'},
		                success:function(data){
						$('#items').load(location.href + ' #items');
		                },
		                error:function(){

		                }
		            });
				
			});


//category delete end


//category edit and save start......


			$('#save').click(function(event) {
				var savecategoryid = $('#modalid').val();
				var savecategory = $('#additem').val();
				if (savecategory=="") {
					alert('Please enter category');
				}else{
					$.ajax({
		                type:'post',
		                url:'{!!URL::to('inspector/managecategory')!!}',
		                data:{'savecategoryid':savecategoryid,'savecategory':savecategory,'action':'updatecategory'},
		                success:function(data){
						$('#items').load(location.href + ' #items');
		                },
		                error:function(){

		                }
		            });
				}
				
			});

//category edit and save end......


//ajax search start......

			$('#categorysearch').on('keyup',function(){
				 $value = $(this).val();
				 $.ajax({
				 	type:'get',
				 	dataType:'html',
				 	url:'{!!URL::to('inspector/catsearch')!!}',
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