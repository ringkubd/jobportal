@extends('dashboard.layout.dashboard_layout')

@section('content')
	<div class="col-md-9">
		<div class="row">
			<div class="col-lg-offset-2 col-lg-8">
				<h1 class="text-center">Manage Front Page Theme</h1>
					<form action="" method="get" class="form-inline">
						<div class="form-group search_div">
							<input type="text" class="form-control" name="term" id="countrysearch" placeholder="Search">
						</div>
					</form>
				<div class="panel panel-default">
				  <div class="panel-heading">
				    <h3 class="panel-title">Front page list:<a href="#" id="addnew" class="pull-right" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus" aria-hidden="true"></i>
</a></h3>
				  </div>
<!-- country list start...... -->			  
				  <div class="panel-body" id="items">
				    <ul class="list-group" id="searcheble">
					@foreach($pages as $page)
				      <li class="list-group-item"><a class='ouritem' id="allcategory" data-toggle="modal" data-target="#myModal">{!!$page->pagename!!}</a>
					<input type="hidden" class="pull-right" name="id" id="pageid" value="{!!$page->id!!}" />
					<div class="radio pull-right btn-primary">
  						<input id="selectpage" type="radio" value="{!!$page->id!!}" name="optradio" {{$page->status==1?"checked":'0'}}>
					</div>
				      </li>
				     
					@endforeach
					
				    </ul>
				  </div>

<!-- country list start...... -->	


				</div>
			</div>
<!-- insert update form start...... -->	

			<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="title">Add new front page</h4>
			      </div>
			      <div class="modal-body">
			      	<input type="hidden" name="" id="modalid" />
			        <p><input type="text" class="form-control" name="name" placeholder="Write front page name" id="additem"></p>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-warning" id="delete" data-dismiss="modal">Delete</button>
			        <button type="button" class="btn btn-primary" id="save" data-dismiss="modal" style="display:none;">Save changes</button>
			        <button type="button" class="btn btn-primary" id="addbutton" data-dismiss="modal" style="display: none;">Add page</button>
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
			var id =$('#pageid').val();
			$('#title').text("edit page");
			var text = $.trim(text);
			$('#additem').val(text);
			$('#modalid').val(id);
			$('#delete').show();
			$('#save').show();
			$('#addbutton').hide();
			 });
//edit and delete view end.......

//add new country start.......
			$(document).on('click','#addnew', function() {
				$('#title').text("Add new page");
				$('#additem').val('');
				$('#delete').hide();
				$('#save').hide();
				$('#addbutton').show();
			});
//add new theme end.......			

//theme insert start.....
			$('#addbutton').click(function() {
				var addpage = $('#additem').val();
				//alert(additem);
				if (addpage=="") {
					alert('Please enter page name');
				}else{
					$.ajax({
		                type:'post',
		                url:'{!!URL::to('inspector/managethemeall')!!}',
		                data:{'addpage':addpage,'action':'insertpage'},
		                success:function(data){
		                    console.log('success');
						$('#items').load(location.href + ' #items');
		                },
		                error:function(){
		                }
		            });

				}
				
			});

//ltheme insert end......	

//theme update start ......		
			$('#save').click(function(event) {
				var savepageid = $('#modalid').val();
				alert(savepageid);
				var savepage = $('#additem').val();
					if (savepage=="") {
					alert('Please page name');
				}else{
						$.ajax({
		                type:'post',
		                url:'{!!URL::to('inspector/managethemeall')!!}',
		                data:{'savepageid':savepageid, 'savepage':savepage,'action':'updatepage'},
		                success:function(data){

						$('#items').load(location.href + ' #items');
		                },
		                error:function(){

		                }
		            });}
				
			});

//theme update end.....

//theme delete start....

			$('#delete').click(function(event) {
				var deletepageid = $('#modalid').val();
						$.ajax({
		                type:'post',
		                url:'{!!URL::to('inspector/managethemeall')!!}',
		                data:{'deletepageid':deletepageid,'action':'deletepage'},
		                success:function(data){		      

						$('#items').load(location.href + ' #items');
		                },
		                error:function(){

		                }
		            });
				
			});

//theme delete end....

//ajax search start......

			$('#countrysearch').on('keyup',function(){
				 $value = $(this).val();
				 $.ajax({
				 	type:'get',
				 	dataType:'html',
				 	url:'{!!URL::to('inspector/countrysearch')!!}',
				 	data:{'search':$value},
				 	success:function(data){
				 			$('#searcheble').html(data);
				 		
				 	}
				 });
			});

//ajax search start......

$(document).on('click','#selectpage', function() {
				var selectpageid=$(this).val();
				alert(selectpageid);
				$.ajax({
		                type:'post',
		                url:'{!!URL::to('inspector/managethemeall')!!}',
		                data:{'selectpageid':selectpageid,'action':'selectpage'},
		                success:function(data){		      

						$('#items').load(location.href + ' #items');
		                },
		                error:function(){

		                }
		            });
			});




		});
	</script>

@endsection