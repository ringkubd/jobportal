@extends('dashboard.layout.dashboard_layout')

@section('content')
	<div class="container main_content">
		<div class="row">
			<div class="col-lg-offset-2 col-lg-8">
				<h1 class="text-center">Industry Type</h1>
				<div class="panel panel-default">
				  <div class="panel-heading">
				    <h3 class="panel-title">Industry type lists:<a href="#" id="addnew" class="pull-right" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus" aria-hidden="true"></i>
</a></h3>
				  </div>
				  <div class="panel-body" id="items">
				    <ul class="list-group">
					
					@foreach($industrytypies as $industrytype)

				      <li class="list-group-item ouritem" id="allcategory" data-toggle="modal" data-target="#myModal">{{$industrytype->industrytypename}}

						{!!Form::open()!!}
							{!!Form::hidden('id',$industrytype->id,['id'=>'id'])!!}
							{{-- <input type="hidden" name="id" id="id" value="{{$industrytype->id}}" /> --}}
				      </li>
					@endforeach

				    </ul>
				  </div>
				</div>
			</div>

			

			<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="title">Add new industry type</h4>
			      </div>
			      <div class="modal-body">
			      {!!Form::hidden('id',$industrytype->id,['id'=>'modalid'])!!}
			      	{{-- <input type="hidden" name="" id="modalid" /> --}}
			      	{!!Form::text('name',null, array('class' => 'form-control', 'placeholder' => 'Write item here', 'id' => 'additem'))!!}
			        {{-- <p><input type="text" class="form-control" name="category" placeholder="Write item here" id="additem"></p> --}}
			      </div>
			      <div class="modal-footer">
			      	{!!Form::button('Delete',['class'=>'btn btn-warning', 'id'=>'delete','data-dismiss'=>'modal'])!!}
			      	{!!Form::button('Save changes',['class'=>'btn btn-primary', 'id'=>'save','data-dismiss'=>'modal'])!!}
			      	{!!Form::button('Add item',['class'=>'btn btn-primary', 'id'=>'addbutton','data-dismiss'=>'modal'])!!}
			        {{-- <button type="button" class="" id="delete" data-dismiss="modal">Delete</button> --}}
			        {{-- <button type="button" class="btn btn-primary" id="save" data-dismiss="modal" style="display:none;">Save changes</button>
			        <button type="button" class="btn btn-primary" id="addbutton" data-dismiss="modal" style="display: none;">Add item</button> --}}
			        {!!Form::close()!!}
			      </div>
			    </div><!-- /.modal-content -->
			  </div><!-- /.modal-dialog -->
			</div><!-- /.modal -->


		</div>
	</div>

	{{csrf_field()}}
	


	<script type="text/javascript">
		$(document).ready(function() {

		// 	$.ajaxSetup({
	 //        headers: {
	 //            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	 //        }
		// });

			$(document).on('click', '.ouritem', function(){
			//alert(5);
			var text = $(this).text();
			var id = $(this).find('#id').val()
			$('#title').text("Edit industry type");
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

			$('#addbutton').click(function() {
				var additem = $('#additem').val();
				if (additem=="") {
					alert('Please enter industry type');
				}else{
					
					$.post('industrytype', {'additem':additem, '_token':$('input[name=_token]').val()}, function(data) {
						//console.log(data);
						$('#items').load(location.href + ' #items');
					});
				}
				
			});

			$('#delete').click(function(event) {
				var delid = $('#modalid').val();
				console.log(delid);
				$.post('delete', {'delid':delid, '_token':$('input[name=_token]').val()}, function(data) {
					$('#items').load(location.href + ' #items');
					//console.log(data);
				});
				
			});

			$('#save').click(function(event) {
				var saveid = $('#modalid').val();
				var saveitem = $('#additem').val();
				console.log(saveid);

				$.post('update', {'saveid':saveid,'saveitem':saveitem, '_token':$('input[name=_token]').val()}, function(data) {
					//console.log(data);
					$('#items').load(location.href + ' #items');
				});
				
			});




		});
	</script>

@endsection