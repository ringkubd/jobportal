@extends('dashboard.layout.dashboard_layout')

@section('content')
	<div class="col-md-9">
		<div class="row">
			<div class="col-lg-offset-2 col-lg-8">
				<h1 class="text-center"> Manage Industry Type</h1>
					<form action="" method="get" class="form-inline">
						<div class="form-group search_div">
							<input type="text" class="form-control" name="term" id="industrysearch" placeholder="Search">
						</div>
					</form>
				<div class="panel panel-default">
				  <div class="panel-heading">
				    <h3 class="panel-title">Industry Type lists:<a href="#" id="addnew" class="pull-right" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus" aria-hidden="true"></i>
</a></h3>
				  </div>
<!--list start-->				  

				  <div class="panel-body" id="items">
				    <ul class="list-group" id="searcheble">
					
					@foreach($industry as $indust)

				      <li class="list-group-item ouritem" id="allcategory" data-toggle="modal" data-target="#myModal">{{$indust->industrytypename}}
							<input type="hidden" name="id" id="id" value="{{$indust->id}}" />
				      </li>
					@endforeach

				    </ul>
				  </div>
<!--list end-->			

					{{$industry->links()}}

				</div>
			</div>

			

			<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="title">Add new industry</h4>
			      </div>
			      <div class="modal-body">
			      	<input type="hidden" name="" id="modalid" />
			        <p><input type="text" class="form-control" name="category" placeholder="Write industry type here" id="additem"></p>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-warning" id="delete" data-dismiss="modal">Delete</button>
			        <button type="button" class="btn btn-primary" id="save" data-dismiss="modal" style="display:none;">Save changes</button>
			        <button type="button" class="btn btn-primary" id="addbutton" data-dismiss="modal" style="display: none;">Add new industry</button>
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
				$('#title').text("Add new industry type");
				$('#additem').val('');
				$('#delete').hide();
				$('#save').hide();
				$('#addbutton').show();
			});
//category insert start........
			$('#addbutton').click(function() {
				var addindustrytype = $('#additem').val();
				if (addindustrytype=="") {
					alert('Please enter industry type');
				}else{
					$.ajax({
		                type:'post',
		                url:'{!!URL::to('inspector/manageindustrytype')!!}',
		                data:{'addindustrytype':addindustrytype,'action':'insertindustrytype'},
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
				var industrytypeid = $('#modalid').val();
				$.ajax({
		                type:'post',
		                url:'{!!URL::to('inspector/manageindustrytype')!!}',
		                data:{'industrytypeid':industrytypeid,'action':'deleteindustrytype'},
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
				var savecindustrytypeid = $('#modalid').val();
				var saveindustrytype = $('#additem').val();
				if (saveindustrytype=="") {
					alert('Please enter industry type');
				}else{
					$.ajax({
		                type:'post',
		                url:'{!!URL::to('inspector/manageindustrytype')!!}',
		                data:{'savecindustrytypeid':savecindustrytypeid,'saveindustrytype':saveindustrytype,'action':'updateindustrytype'},
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

			$('#industrysearch').on('keyup',function(){
				 $value = $(this).val();
				 $.ajax({
				 	type:'get',
				 	dataType:'html',
				 	url:'{!!URL::to('inspector/industrysearch')!!}',
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