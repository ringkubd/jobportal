@extends('dashboard.layout.dashboard_layout')

@section('content')
	<div class="col-md-9">
		<div class="row">
			<div class="col-lg-offset-2 col-lg-8">
				<h1 class="text-center">Manage district</h1>
					<form action="" method="get" class="form-inline">
						<div class="form-group search_div">
							<input type="text" class="form-control" name="term" id="districtsearch" placeholder="Search">
						</div>
					</form>
				<div class="panel panel-default">
				  <div class="panel-heading">
				    <h3 class="panel-title">district lists:<a href="#" id="addnew" class="pull-right" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus" aria-hidden="true"></i>
</a></h3>
				  </div>
				  <!--list start-->
				  <div class="panel-body" id="items">
				    <ul class="list-group" id="searcheble">
					
					@foreach($districts as $district)

				      <li class="list-group-item ouritem passid" id="allcategory" data-toggle="modal" data-target="#myModal">{!!$district->name!!}
							<input type="hidden" class="pull-right" name="id" id="districtid" value="{!!$district->id!!}" />

							<input type="hidden" class="pull-right countrid" name="id"  value="{!!$district->country_id!!}" />
							<input type="hidden" class="pull-right divisid" name="id"  value="{!!$district->division_id!!}" />
				      </li>
					@endforeach

				    </ul>
				    <!--list end-->
				  </div>


					{{$districts->links()}}

				</div>
			</div>

			

			<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="title">Add new district</h4>
			      </div>
			      <div class="modal-body">
			      	
			        <p><div class="form-group">
			            {{ Form::label('country', 'Country:', ['class' => 'control-label']) }}
			            {{ Form::select('country', isset($country)?$country:['0'=>'0'], isset($empdes->country)?$empdes->country:NULL, ['placeholder' => 'select Country','class'=>'form-control'])}}

			            {{ Form::label('division', 'Division:', ['class' => 'control-label']) }}
			            {{ Form::select('division', isset($division)?$division:['0'=>'0'], isset($empdes->division)?$empdes->division:NULL, ['placeholder' => 'select division','class'=>'form-control'])}}

        			</div></p>
        			{{ Form::label('additem', 'District:', ['class' => 'control-label']) }}
			        <p><input type="text" class="form-control" name="name" placeholder="write district here" id="additem"></p>
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
			var districtid = $(this).find('#districtid').val();
			//alert(id);
			$('#title').text("Edit district");
			var text = $.trim(text);
			$('#additem').val(text);
			$('#modalid').val(districtid);
			$('#delete').show();
			$('#save').show();
			$('#addbutton').hide();
			 });
//edit and delete view end.........

//add district start.........
			$(document).on('click','#addnew', function() {
				$('#title').text("Add new district");
				$('#additem').val('');
				$('#delete').hide();
				$('#save').hide();
				$('#addbutton').show();
			});
//add district end.........

//insert district start.........
			$('#addbutton').click(function() {
			var add_district = $('#additem').val();
			var countryid= $('#country').val();				
       		var divistionid= $('#division').val();
				if (add_district==""|| countryid == "-1"|| divistionid=="-1") {
					alert('Please enter district');
				}else{
			$.ajax({
                type:'post',
                url:'{!!URL::to('inspector/managedistrict')!!}',
                data:{'add_district':add_district,'countryid':countryid,'divistionid':divistionid, 'action':'insertdistrict'},
                	success:function(data){
				$('#items').load(location.href + ' #items');
                },
                error:function(){

                }
            });

				}
				
			});
			

//insert district end......

//update district start ....			
			$('#save').click(function(event) {
				var savedistrictid = $('#modalid').val();
				var savedistrict = $('#additem').val();
				var countryid= $('#country').val();				
				var divistionid = $('#division').val();
						if (savedistrict==""|| countryid == "-1"|| divistionid=="-1") {
							alert('Please enter district');
							}else{
						$.ajax({
		                type:'post',
		                url:'{!!URL::to('inspector/managedistrict')!!}',
		                data:{'savedistrictid':savedistrictid, 'savedistrict':savedistrict,'countryid':countryid,'divistionid':divistionid,'action':'updatedistrict'},
		                success:function(data){
		                    console.log('success');
		                    console.log(data);
		                    //console.log(data.length);

						$('#items').load(location.href + ' #items');
		                },
		                error:function(){

		                }
		            });}
				
			});

//update district end ....

//delete district start.....

			$('#delete').click(function(event) {
				var deldistrictid = $('#modalid').val();
						$.ajax({
		                type:'post',
		                url:'{!!URL::to('inspector/managedistrict')!!}',
		                data:{'deldistrictid':deldistrictid,'action':'deletedistrict'},
		                success:function(data){
						$('#items').load(location.href + ' #items');
		                },
		                error:function(){

		                }
		            });
				
			});
//delete district end.....

//select country start.............


			$(document).on('click','#addnew',function(){
           var countryid=$('.countrid').val();
           $('.modal-content').find('#division').html('<option value="-1" selected disabled>Select division</option>');
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

//select country end.............

//onchange country start .........
			$(document).on('change','#country',function(){
			var id = $(this).val();
           var countryid=$('.countrid').val();
            var opp=" ";

            $.ajax({
                type:'get',
                url:'{!!URL::to('inspector/showcountry')!!}',
                data:{'id':id,'action':'showdivision'},
                success:function(data){
                    opp+='<option value="-1" selected disabled>Select division</option>';
                    for(var i=0;i<data.length;i++){
                    opp+='<option value="'+data[i].id +'">'+data[i].name+'</option>';
                   }
                  
                   $('.modal-content').find('#division').html(" ");
                   $('.modal-content').find('#division').append(opp);
                },
                error:function(){

                }
            });
        });

//onchange country end .........

//edit selected option start.......

		$(document).on('click','.passid',function(){            
           var countryid=$(this).find('.countrid').val();
            var opp=" ";

            $.ajax({
                type:'get',
                url:'{!!URL::to('inspector/showcountry')!!}',
                data:{'action':'showcountry'},
                success:function(response){
                    for(var i=0;i<response.length;i++){
                    if(response[i].id == countryid){
                    opp+='<option value="'+response[i].id +'" selected>'+response[i].name+'</option>';
                   }else{
                   		opp+='<option value="'+response[i].id +'">'+response[i].name+'</option>';
                   }}
                  

                   $('.modal-content').find('#country').html(" ");
                   $('.modal-content').find('#country').append(opp);
                },
                error:function(){

                }
            });
        
           var divisionid=$(this).find('.divisid').val();
            var oppp=" ";

            $.ajax({
                type:'get',
                url:'{!!URL::to('inspector/showcountry')!!}',
                data:{'id':countryid,'action':'showdivision'},
                success:function(data){
                    for(var i=0;i<data.length;i++){
                    if(data[i].id == divisionid){
                    oppp+='<option value="'+data[i].id +'" selected>'+data[i].name+'</option>';
                   }else{
                   		oppp+='<option value="'+data[i].id +'">'+data[i].name+'</option>';
                   }}
                  

                   $('.modal-content').find('#division').html(" ");
                   $('.modal-content').find('#division').append(oppp);
                },
                error:function(){

                }
            });
        });


//edit selected option start.......

//ajax search start......

			$('#districtsearch').on('keyup',function(){
				 $value = $(this).val();
				 $.ajax({
				 	type:'get',
				 	dataType:'html',
				 	url:'{!!URL::to('inspector/districtsearch')!!}',
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