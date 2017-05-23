@extends('dashboard.layout.dashboard_layout')

@section('content')
	<div class="col-md-9">
		<div class="row">
			<div class="col-lg-offset-2 col-lg-8">
				<h1 class="text-center">Manage Division</h1>
					<form action="" method="get" class="form-inline">
						<div class="form-group search_div">
							<input type="text" class="form-control" name="term" id="divisionsearch" placeholder="Search">
						</div>
					</form>
				<div class="panel panel-default">
				  <div class="panel-heading">
				    <h3 class="panel-title">Division lists:<a href="#" id="addnew" class="pull-right" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus" aria-hidden="true"></i>
</a></h3>
				  </div>
				  <!--division list start-->
				  <div class="panel-body" id="items">
				    <ul class="list-group" id="searcheble">
					
					@foreach($divisions as $division)

				      <li class="list-group-item ouritem passid" id="allcategory" data-toggle="modal" data-target="#myModal">{!!$division->name!!}
							<input type="hidden" class="pull-right" name="id" id="id" value="{!!$division->id!!}" />

							<input type="hidden" class="pull-right countrid" id="contry_id" name="id"  value="{!!$division->country_id!!}" />
				      </li>
					@endforeach

				    </ul>
				  </div>
				   <!--division list end-->


					{{$divisions->links()}}
					

				</div>
			</div>

			

			<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="title">Add new division</h4>
			      </div>
			      <div class="modal-body">
			      	
			        <p><div class="form-group">
			            {{ Form::label('country', 'Country', ['class' => 'control-label']) }}
			            {{ Form::select('country', isset($country)?$country:['0'=>'0'], isset($empdes->country)?$empdes->country:NULL, ['placeholder' => 'select Country','class'=>'form-control'])}}
        			</div></p>
        			{{ Form::label('additem', 'Division', ['class' => 'control-label']) }}
			        <p><input type="text" class="form-control" name="name" placeholder="write division here" id="additem"></p>
			        <input type="hidden" name="" id="modalid" value="" />
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-warning" id="delete" data-dismiss="modal">Delete</button>
			        <button type="button" class="btn btn-primary" id="save" data-dismiss="modal" style="display:none;">Save changes</button>
			        <button type="button" class="btn btn-primary" id="addbutton" data-dismiss="modal" style="display: none;">Add Division</button>
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
			$('#title').text("Edit Division");
			var text = $.trim(text);
			$('#additem').val(text);
			$('#modalid').val(id);
			$('#delete').show();
			$('#save').show();
			$('#addbutton').hide();

			 });
//edit and delete view start..........	
//add division start........		

			$(document).on('click','#addnew', function() {
				$('#title').text("Add new division");
				$('#additem').val('');
				$('#delete').hide();
				$('#save').hide();
				$('#addbutton').show();
			});

//add division end........

//insert division start......				

			$('#addbutton').click(function() {
				var divisionname = $('#additem').val();
				//alert(additem);
				var countryid= $('#country').val();
				//alert(countryid);
				if (divisionname==""|| countryid == "") {
					alert('Please enter division');
				}else{
					


			$.ajax({
                type:'post',
                url:'{!!URL::to('inspector/managedivision')!!}',
                data:{'divisionname':divisionname, 'countryid':countryid,'action':'insertdivision'},
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
//insert division end.......			

//update division start.......				
			$('#save').click(function(event) {
				var savedivisionid = $('#modalid').val();
				var savedivision = $('#additem').val();
				var countryid= $('#country').val();
				if (savedivision==""|| countryid == "-1") {
					alert('Please enter division');
				}else{

						$.ajax({
		                type:'post',
		                url:'{!!URL::to('inspector/managedivision')!!}',
		                data:{'savedivisionid':savedivisionid, 'savedivision':savedivision,'countryid':countryid,'action':'updatedivision'},
		                success:function(data){		                   
						$('#items').load(location.href + ' #items');
		                },
		                error:function(){

		                }
		            });}
				
			});

//update division end.......

//delete division start.......
			$('#delete').click(function(event) {
				var deldivisionid = $('#modalid').val();
						$.ajax({
		                type:'post',
		                url:'{!!URL::to('inspector/managedivision')!!}',
		                data:{'deldivisionid':deldivisionid,'action':'deletedivision'},
		                success:function(data){
						$('#items').load(location.href + ' #items');
		                },
		                error:function(){

		                }
		            });
				
			});
//delete division end.......			

//select country start.............


		$(document).on('click','#addnew',function(){ 
           var countryid=$('.countrid').val();
           //alert(countryid);
            var opp=" ";
            $.ajax({
                type:'get',
                url:'{!!URL::to('inspector/showcountry')!!}',
                data:{'action':'showcountry'},
                success:function(data){
                    opp+='<option value="-1" selected disabled>Select country</option>';
                    for(var i=0;i<data.length;i++){
                    opp+='<option value="'+data[i].id +'">'+data[i].name+'</option>';
                   }
                   $('.modal-content').find('#country').html(" ");
                   $('.modal-content').find('#country').append(opp);
                },
                error:function(){

                }
            });
        });

//select country start for selected item.............


		$(document).on('click','#allcategory',function(){
           var countryid=$(this).find('#contry_id').val();
            var opp=" ";
            $.ajax({
                type:'get',
                url:'{!!URL::to('inspector/showcountry')!!}',
                data:{'action':'showcountry'},
                success:function(data){
                    console.log('success');
                    console.log(data);
                    opp+='<option value="-1" selected disabled>Select country</option>';
                    for(var i=0;i<data.length;i++){
                    if(data[i].id == countryid){
                    opp+='<option value="'+data[i].id +'" selected>'+data[i].name+'</option>';
                   }else{
                   		opp+='<option value="'+data[i].id +'">'+data[i].name+'</option>';
                   }}
                  
                   $('.modal-content').find('#country').html(" ");
                   $('.modal-content').find('#country').append(opp);
                },
                error:function(){

                }
            });
        });

//select country end for selected item.............


//select country end............


//ajax search start......

			$('#divisionsearch').on('keyup',function(){
				 $value = $(this).val();
				 $.ajax({
				 	type:'get',
				 	dataType:'html',
				 	url:'{!!URL::to('inspector/divisionsearch')!!}',
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