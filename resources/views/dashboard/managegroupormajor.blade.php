@extends('dashboard.layout.dashboard_layout')

@section('content')
	<div class="col-md-9">
		<div class="row">
			<div class="col-lg-offset-2 col-lg-8">
				<h1 class="text-center">Manage group or mejor</h1>
					<form action="" method="get" class="form-inline">
						<div class="form-group search_div">
							<input type="text" class="form-control" name="term" id="groupormajorsearch" placeholder="Search">
						</div>
					</form>
				<div class="panel panel-default">
				  <div class="panel-heading">
				    <h3 class="panel-title">group or mejor lists:<a href="#" id="addnew" class="pull-right" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus" aria-hidden="true"></i>
</a></h3>
				  </div>
				  <!--list start-->
				  <div class="panel-body" id="items">
				    <ul class="list-group" id="searcheble">
					
					@foreach($groupoormajors as $groupormejor)

				      <li class="list-group-item ouritem passid" id="allcategory" data-toggle="modal" data-target="#myModal">{!!$groupormejor->groupname!!}
							<input type="hidden" class="pull-right" name="id" id="groupormejorid" value="{!!$groupormejor->id!!}" />

							<input type="hidden" class="pull-right levelid" name="id"  value="{!!$groupormejor->levelofeducation_id!!}" />
							<input type="hidden" class="pull-right examtitleid" name="id"  value="{!!$groupormejor->exam_title_id!!}" />
				      </li>
					@endforeach

				    </ul>
				    <!--list end-->
				  </div>


					{{$groupoormajors->links()}}


				</div>
			</div>

			

			<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="title">Add new group or mejor</h4>
			      </div>
			      <div class="modal-body">
			      	
			        <p><div class="form-group">
			            {{ Form::label('levelofeducation', 'Lavel of education:', ['class' => 'control-label']) }}
			            {{ Form::select('levelofeducation', isset($levelofeducation)?$levelofeducation:['0'=>'0'], isset($empdes->levelofeducation)?$empdes->levelofeducation:NULL, ['placeholder' => 'select level of education','class'=>'form-control'])}}

			            {{ Form::label('examtitle', 'EXAM title:', ['class' => 'control-label']) }}
			            {{ Form::select('examtitle', isset($examtitle)?$examtitle:['0'=>'0'], isset($empdes->examtitle)?$empdes->examtitle:NULL, ['placeholder' => 'select group or mejor','class'=>'form-control'])}}

        			</div></p>
        			{{ Form::label('additem', 'groupormejor:', ['class' => 'control-label']) }}
			        <p><input type="text" class="form-control" name="name" placeholder="write group or mejor here" id="additem"></p>
			        <input type="hidden" name="" id="modalid" value="" />
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-warning" id="delete" data-dismiss="modal">Delete</button>
			        <button type="button" class="btn btn-primary" id="save" data-dismiss="modal" style="display:none;">Save changes</button>
			        <button type="button" class="btn btn-primary" id="addbutton" data-dismiss="modal" style="display: none;">Add item</button>
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
//edit and delete view start.........

			$(document).on('click', '.ouritem', function(){
			//alert(5);
			var text = $(this).text();
			var groupormejorid = $(this).find('#groupormejorid').val();
			//alert(id);
			$('#title').text("Edit group or mejor");
			var text = $.trim(text);
			$('#additem').val(text);
			$('#modalid').val(groupormejorid);
			$('#delete').show();
			$('#save').show();
			$('#addbutton').hide();
			 });
//edit and delete view end.........

//add groupormejor start.........
			$(document).on('click','#addnew', function() {
				$('#title').text("Add new group or mejor");
				$('#additem').val('');
				$('#delete').hide();
				$('#save').hide();
				$('#addbutton').show();
			});
//add groupormejor end.........

//insert groupormejor start.........
			$('#addbutton').click(function() {
			var add_groupormejor = $('#additem').val();
			var levelofeducation_id= $('#levelofeducation').val();				
       		var exam_title_id= $('#examtitle').val();
				if (add_groupormejor==""|| levelofeducation_id == "-1"|| exam_title_id=="-1") {
					alert('Please enter group or mejor');
				}else{
			$.ajax({
                type:'post',
                url:'{!!URL::to('inspector/managegroupormajor')!!}',
                data:{'add_groupormejor':add_groupormejor,'levelofeducation_id':levelofeducation_id,'exam_title_id':exam_title_id, 'action':'insertgroupormejor'},
                	success:function(data){
                		console.log(data);
				$('#items').load(location.href + ' #items');
                },
                error:function(){

                }
            });

				}
				
			});
			

//insert groupormejor end......

//update groupormejor start ....			
			$('#save').click(function(event) {
				var savegroupormejorid = $('#modalid').val();
				var savegroupormejor = $('#additem').val();
				var levelofeducation_id= $('#levelofeducation').val();				
				var exam_title_id = $('#examtitle').val();
						if (savegroupormejor==""|| levelofeducation_id == "-1"|| exam_title_id=="-1") {
							alert('Please enter group or mejor');
							}else{
						$.ajax({
		                type:'post',
		                url:'{!!URL::to('inspector/managegroupormajor')!!}',
		                data:{'savegroupormejorid':savegroupormejorid, 'savegroupormejor':savegroupormejor,'levelofeducation_id':levelofeducation_id,'exam_title_id':exam_title_id,'action':'updategroupormejor'},
		                success:function(data){
						$('#items').load(location.href + ' #items');
		                },
		                error:function(){

		                }
		            });}
				
			});

//update groupormejor end ....

//delete groupormejor start.....

			$('#delete').click(function(event) {
				var delgroupormejorid = $('#modalid').val();
						$.ajax({
		                type:'post',
		                url:'{!!URL::to('inspector/managegroupormajor')!!}',
		                data:{'delgroupormejorid':delgroupormejorid,'action':'deletegroupormejor'},
		                success:function(data){
						$('#items').load(location.href + ' #items');
		                },
		                error:function(){

		                }
		            });
				
			});
//delete groupormejor end.....

//select level start.............



			
		$(document).on('click','#addnew',function(){ 
           var levelofeducationid=$('.levelid').val();
           $('.modal-content').find('#examtitle').html('<option value="-1" selected disabled>Select exam title</option>');
            var opp=" ";
            $.ajax({
                type:'get',
                url:'{!!URL::to('inspector/showlevelofeducation')!!}',
                data:{'action':'showlevelofeducation'},
                success:function(data){
                    opp+='<option value="-1" selected disabled>Select levelofeducation</option>';
                    for(var i=0;i<data.length;i++){
                    opp+='<option value="'+data[i].id +'">'+data[i].edulavelname+'</option>';
                   }
                   $('.modal-content').find('#levelofeducation').html(" ");
                   $('.modal-content').find('#levelofeducation').append(opp);
                },
                error:function(){

                }
            });
        });

//select level end.............

//onchange level start .........
			$(document).on('change','#levelofeducation',function(){
			var id = $(this).val();
            var opp=" ";

            $.ajax({
                type:'get',
                url:'{!!URL::to('inspector/showlevelofeducation')!!}',
                data:{'id':id,'action':'showexamtitle'},
                success:function(data){
                    opp+='<option value="-1" selected disabled>Select groupormejor</option>';
                    for(var i=0;i<data.length;i++){
                    opp+='<option value="'+data[i].id +'">'+data[i].name+'</option>';
                   }
                  
                   $('.modal-content').find('#examtitle').html(" ");
                   $('.modal-content').find('#examtitle').append(opp);
                },
                error:function(){

                }
            });
        });

//onchange level end .........

//edit selected option start.......

		$(document).on('click','.passid',function(){            
           var levelofeducationid=$(this).find('.levelid').val();
            var opp=" ";

            $.ajax({
                type:'get',
                url:'{!!URL::to('inspector/showlevelofeducation')!!}',
                data:{'action':'showlevelofeducation'},
                success:function(response){
                    for(var i=0;i<response.length;i++){
                    if(response[i].id == levelofeducationid){
                    opp+='<option value="'+response[i].id +'" selected>'+response[i].edulavelname+'</option>';
                   }else{
                   		opp+='<option value="'+response[i].id +'">'+response[i].edulavelname+'</option>';
                   }}
                  

                   $('.modal-content').find('#levelofeducation').html(" ");
                   $('.modal-content').find('#levelofeducation').append(opp);
                },
                error:function(){

                }
            });
        
           var examtitleid=$(this).find('.examtitleid').val();
            var oppp=" ";

            $.ajax({
                type:'get',
                url:'{!!URL::to('inspector/showlevelofeducation')!!}',
                data:{'id':levelofeducationid,'action':'showexamtitle'},
                success:function(data){
                    for(var i=0;i<data.length;i++){
                    if(data[i].id == examtitleid){
                    oppp+='<option value="'+data[i].id +'" selected>'+data[i].name+'</option>';
                   }else{
                   		oppp+='<option value="'+data[i].id +'">'+data[i].name+'</option>';
                   }}
                  

                   $('.modal-content').find('#examtitle').html(" ");
                   $('.modal-content').find('#examtitle').append(oppp);
                },
                error:function(){

                }
            });
        });


//edit selected option start.......


//ajax search start......

			$('#groupormajorsearch').on('keyup',function(){
				 $value = $(this).val();
				 $.ajax({
				 	type:'get',
				 	dataType:'html',
				 	url:'{!!URL::to('inspector/groupormajorsearch')!!}',
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