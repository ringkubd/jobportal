@extends('dashboard.layout.dashboard_layout')

@section('content')
	<div class="col-md-9">
		<div class="row">
			<div class="col-lg-offset-2 col-lg-8">
				<h1 class="text-center">Manage Exam title</h1>
					<form action="" method="get" class="form-inline">
						<div class="form-group search_div">
							<input type="text" class="form-control" name="term" id="examtitlesearch" placeholder="Search">
						</div>
					</form>
				<div class="panel panel-default">
				  <div class="panel-heading">
				    <h3 class="panel-title">Exam title lists:<a href="#" id="addnew" class="pull-right" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus" aria-hidden="true"></i>
</a></h3>
				  </div>
				  <!--examtitle list start-->
				  <div class="panel-body" id="items">
				    <ul class="list-group" id="searcheble">
					
					@foreach($examtitles as $examtitle)

				      <li class="list-group-item ouritem passid" id="allcategory" data-toggle="modal" data-target="#myModal">{!!$examtitle->name!!}
							<input type="hidden" class="pull-right" name="id" id="id" value="{!!$examtitle->id!!}" />

							<input type="hidden" class="pull-right levelid" id="level_id" name="id"  value="{!!$examtitle->levelofeducation_id!!}" />
				      </li>
					@endforeach

				    </ul>
				  </div>
				   <!--examtitle list end-->


				{{$examtitles->links()}}

				</div>
			</div>

			

			<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="title">Add new examtitle</h4>
			      </div>
			      <div class="modal-body">
			      	
			        <p><div class="form-group">
			            {{ Form::label('levelofeducation', 'levelofeducation', ['class' => 'control-label']) }}
			            {{ Form::select('levelofeducation', isset($levelofeducation)?$levelofeducation:['0'=>'0'], isset($empdes->levelofeducation)?$empdes->levelofeducation:NULL, ['placeholder' => 'select levelofeducation','class'=>'form-control'])}}
        			</div></p>
        			{{ Form::label('additem', 'examtitle', ['class' => 'control-label']) }}
			        <p><input type="text" class="form-control" name="name" placeholder="write examtitle here" id="additem"></p>
			        <input type="hidden" name="" id="modalid" value="" />
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-warning" id="delete" data-dismiss="modal">Delete</button>
			        <button type="button" class="btn btn-primary" id="save" data-dismiss="modal" style="display:none;">Save changes</button>
			        <button type="button" class="btn btn-primary" id="addbutton" data-dismiss="modal" style="display: none;">Add examtitle</button>
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
//edit and delete view start..........
			$(document).on('click', '.ouritem', function(){
			//alert(5);
			var text = $(this).text();
			var id = $(this).find('#id').val();
			//alert(id);
			$('#title').text("Edit examtitle");
			var text = $.trim(text);
			$('#additem').val(text);
			$('#modalid').val(id);
			$('#delete').show();
			$('#save').show();
			$('#addbutton').hide();

			 });
//edit and delete view start..........	
//add examtitle start........		

			$(document).on('click','#addnew', function() {
				$('#title').text("Add new examtitle");
				$('#additem').val('');
				$('#delete').hide();
				$('#save').hide();
				$('#addbutton').show();
			});

//add examtitle end........

//insert examtitle start......				

			$('#addbutton').click(function() {
				var examtitlename = $('#additem').val();
				//alert(additem);
				var levelofeducationid= $('#levelofeducation').val();
				//alert(levelofeducationid);
				if (examtitlename==""|| levelofeducationid == "") {
					alert('Please enter examtitle');
				}else{
					


			$.ajax({
                type:'post',
                url:'{!!URL::to('inspector/manageexam')!!}',
                data:{'examtitlename':examtitlename, 'levelofeducationid':levelofeducationid,'action':'insertexamtitle'},
                success:function(data){
                    //console.log('success');
                    //console.log(data);
                    //console.log(data.length);

				$('#items').load(location.href + ' #items');
                },
                error:function(){

                }
            });

				}
				
			});
//insert examtitle end.......			

//update examtitle start.......				
			$('#save').click(function(event) {
				var saveexamtitleid = $('#modalid').val();
				var saveexamtitle = $('#additem').val();
				var levelofeducationid= $('#levelofeducation').val();
				if (saveexamtitle==""|| levelofeducationid == "-1") {
					alert('Please enter examtitle');
				}else{

						$.ajax({
		                type:'post',
		                url:'{!!URL::to('inspector/manageexam')!!}',
		                data:{'saveexamtitleid':saveexamtitleid, 'saveexamtitle':saveexamtitle,'levelofeducationid':levelofeducationid,'action':'updateexamtitle'},
		                success:function(data){		                   
						$('#items').load(location.href + ' #items');
		                },
		                error:function(){

		                }
		            });}
				
			});

//update examtitle end.......

//delete examtitle start.......
			$('#delete').click(function(event) {
				var delexamtitleid = $('#modalid').val();
						$.ajax({
		                type:'post',
		                url:'{!!URL::to('inspector/manageexam')!!}',
		                data:{'delexamtitleid':delexamtitleid,'action':'deleteexamtitle'},
		                success:function(data){
						$('#items').load(location.href + ' #items');
		                },
		                error:function(){

		                }
		            });
				
			});
//delete examtitle end.......			

//select levelofeducation start.............


		$(document).on('click','#addnew',function(){ 
           var levelofeducationid=$('.levelid').val();
           //alert(levelofeducationid);
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

//select levelofeducation start for selected item.............


		$(document).on('click','#allcategory',function(){
           var levelofeducationid=$(this).find('#level_id').val();
            var opp=" ";
            $.ajax({
                type:'get',
                url:'{!!URL::to('inspector/showlevelofeducation')!!}',
                data:{'action':'showlevelofeducation'},
                success:function(data){
                    console.log('success');
                    console.log(data);
                    opp+='<option value="-1" selected disabled>Select levelofeducation</option>';
                    for(var i=0;i<data.length;i++){
                    if(data[i].id == levelofeducationid){
                    opp+='<option value="'+data[i].id +'" selected>'+data[i].edulavelname+'</option>';
                   }else{
                   		opp+='<option value="'+data[i].id +'">'+data[i].edulavelname+'</option>';
                   }}
                  
                   $('.modal-content').find('#levelofeducation').html(" ");
                   $('.modal-content').find('#levelofeducation').append(opp);
                },
                error:function(){

                }
            });
        });

//select levelofeducation end for selected item.............




//select levelofeducation end............


//ajax search start......

			$('#examtitlesearch').on('keyup',function(){
				 $value = $(this).val();
				 $.ajax({
				 	type:'get',
				 	dataType:'html',
				 	url:'{!!URL::to('inspector/examtitlesearch')!!}',
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