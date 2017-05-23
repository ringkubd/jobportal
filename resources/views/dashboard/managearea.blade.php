@extends('dashboard.layout.dashboard_layout')
@extends('dashboard.modal.manage_area_modal')
@section('content')
	<div class="col-md-9">
		<div class="row">
			<div class="col-lg-offset-2 col-lg-8">
				<h1 class="text-center">Manage Area</h1>
					<form action="" method="get" class="form-inline">
						<div class="form-group search_div">
							<input type="text" class="form-control" name="term" id="areasearch" placeholder="Search">
						</div>
					</form>
				<div class="panel panel-default">
				  <div class="panel-heading">
				    <h3 class="panel-title">area lists:<a href="#" id="addnew" class="pull-right" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus" aria-hidden="true"></i>
</a></h3>
				  </div>
				  <!--list start-->
				  <div class="panel-body" id="items">
				    <ul class="list-group" id="searcheble">
					
					@foreach($areas as $area)

				      <li class="list-group-item ouritem passid" id="allcategory" data-toggle="modal" data-target="#myModal">{!!$area->name!!}
							<input type="hidden" class="pull-right" name="id" id="areaid" value="{!!$area->id!!}" />

							<input type="hidden" class="pull-right countrid" name="id"  value="{!!$area->country_id!!}" />

							<input type="hidden" class="pull-right divisid" name="id"  value="{!!$area->division_id!!}" />

							<input type="hidden" class="pull-right disisid" name="id"  value="{!!$area->district_id!!}" />

				      </li>
					@endforeach

				    </ul>
				  </div>
				  <!--list end-->

					
					{{$areas->links()}}


				</div>
			</div>

			

			


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
//edit and delete area view....start.....
			$(document).on('click', '.ouritem', function(){
			var text = $(this).text();
			var areaid = $(this).find('#areaid').val();
			$('#title').text("Edit area");
			var text = $.trim(text);
			$('#additem').val(text);
			$('#modalid').val(areaid);
			$('#delete').show();
			$('#save').show();
			$('#addbutton').hide();
			 });

//edit and delete area view....end.....

//add area start......
			$(document).on('click','#addnew', function() {
				$('#title').text("Add new area");
				$('#additem').val('');
				$('#delete').hide();
				$('#save').hide();
				$('#addbutton').show();
			});

//add area end......			
//insert area start.........
			$('#addbutton').click(function() {
				var addarea = $('#additem').val();
				var countryid= $('#country').val();
				var divisionid= $('#division').val();
				var districtid= $('#district').val();
				//alert(countryid);
				if (addarea==""|| countryid == "-1"||divisionid=="-1"|| districtid == "-1") {
					alert('Please enter area');
				}else{
					


			$.ajax({
                type:'post',
                url:'{!!URL::to('inspector/managearea')!!}',
                data:{'addarea':addarea, 'countryid':countryid,'divisionid':divisionid,'districtid':districtid,'action':'insertarea'},
                success:function(data){                    
				$('#items').load(location.href + ' #items');
                },
                error:function(){

                }
            });





				}
				
			});

//insert area end......			

//area update start........
			
			$('#save').click(function(event) {
				var saveareaid = $('#modalid').val();
				var saveareaname = $('#additem').val();
				var countryid= $('#country').val();
				var divisionid= $('#division').val();
				var districtid= $('#district').val();
				if (saveareaname==""|| countryid == "-1"||divisionid=="-1"|| districtid == "-1") {
					alert('Please enter area');
				}else{

						$.ajax({
		                type:'post',
		                url:'{!!URL::to('inspector/managearea')!!}',
		                data:{'saveareaid':saveareaid, 'saveareaname':saveareaname,'countryid':countryid,'divisionid':divisionid,'districtid':districtid,'action':'updatearea'},
		                success:function(data){
						$('#items').load(location.href + ' #items');
		                },
		                error:function(){

		                }
		            });}
				
					});

//update area end ..........			


//delete area start 

			$('#delete').click(function(event) {
				var delareaid = $('#modalid').val();
						$.ajax({
		                type:'post',
		                url:'{!!URL::to('inspector/managearea')!!}',
		                data:{'delareaid':delareaid,'action':'deletearea'},
		                success:function(data){		                    
						$('#items').load(location.href + ' #items');
		                },
		                error:function(){

		                }
		            });
				
			});


//delete area end........			

//select country start.............

		//select country start.............


			$(document).on('click','#addnew',function(){
           var countryid=$('.countrid').val();
           $('.modal-content').find('#division').html('<option value="-1" selected disabled>Select division</option>');
            $('.modal-content').find('#district').html('<option value="-1" selected disabled>Select District</option>');
            var opp=" ";

            $.ajax({
                type:'get',
                url:'{!!URL::to('inspector/showcountry')!!}',
                data:{'action':'showcountry'},
                success:function(data){
                    opp+='<option value="" selected disabled>Select country</option>';
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

//onchange country and show division...........
			$(document).on('change','#country',function(){
			var id = $(this).val();
           var countryid=$('.countrid').val();
            var opp=" ";

            $.ajax({
                type:'get',
                url:'{!!URL::to('inspector/showcountry')!!}',
                data:{'id':id,'action':'showdivision'},
                success:function(data){
                    opp+='<option value="0" selected disabled>Select division</option>';
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

//onchange country and show division.end..........

//onchange division and show district.start..........

			 $(document).on('change','#division',function(){
			var divisionid = $(this).val();
           //var countryid=$('.countrid').val();
            var opp=" ";

            $.ajax({
                type:'get',
                url:'{!!URL::to('inspector/showcountry')!!}',
                data:{'id':divisionid,'action':'showdistrict'},
                success:function(data){
                    opp+='<option value="-1" selected disabled>Select division</option>';
                    for(var i=0;i<data.length;i++){
                    opp+='<option value="'+data[i].id +'">'+data[i].name+'</option>';
                   }
                  

                   $('.modal-content').find('#district').html(" ");
                   $('.modal-content').find('#district').append(opp);
                },
                error:function(){

                }
            });
        });
        
//onchange division and show district.end..........


//update selected item show..........


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

            		var distid=$(this).find('.disisid').val();
            		var opppdist=" ";

					$.ajax({
		                type:'get',
		                url:'{!!URL::to('inspector/showcountry')!!}',
		                data:{'id':divisionid,'action':'showdistrict'},
		                success:function(disrespone){
		                	//console.log(disrespone);
		                	//alert(distid);
		                    for(var i=0;i<disrespone.length;i++){
		                    	
		                    if(disrespone[i].id == distid){
		                    opppdist+='<option value="'+disrespone[i].id +'" selected>'+disrespone[i].name+'</option>';
		                   }else{
		                   		opppdist+='<option value="'+disrespone[i].id +'">'+disrespone[i].name+'</option>';
		                   }}
		                  

		                   $('.modal-content').find('#district').html(" ");
		                   $('.modal-content').find('#district').append(opppdist);
		                },
		                error:function(){

		                }
		            });            
        });







//select country end............


//ajax search start......

			$('#areasearch').on('keyup',function(){
				 $value = $(this).val();
				 $.ajax({
				 	type:'get',
				 	dataType:'html',
				 	url:'{!!URL::to('areasearch')!!}',
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