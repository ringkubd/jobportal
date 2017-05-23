<div class="row">
		<div class="col-sm-8 table-responsive">
			<div class="row">
				<div class="col-sm-6 pull-left">
					<h4>Carrer and Application Information</h4>
				</div>
				<div class="col-sm-6">
				@if(isset($levelNames) && count($levelNames)>=1)
					<span class="pull-right"><button class="btn btn-default " data-target="#education_form" data-toggle="modal">Add more information <i class="fa fa-plus"></i></button></span>
				</div>
				@endif
				
				
			</div>
    <div class="well well-sm">
		
		
		@if(!isset($academicsdata['message']))
		@php $i = 1; $k = 1; @endphp
		@foreach($academicsdata as $acadata)
			
			
				  <div class="well" data-toggle="collapse" data-target="#demo{{$i++}}"><h2 class="btn btn-block btn-default icon">{{isset($levelNames)?$levelNames[$acadata->lavelofeducation_id][0]:'level'}}<i id='#imran' class="fa fa-angle-double-down pull-right" style="font-size:28px;"></i></h2></div>
				  <div id="demo{{$k++}}" class="collapse" imran="sweet">
				  <div class="well"><button value="{{$acadata->id}}" data-target="#education_form_edit" data-toggle="modal" id="editacademic"><i class="fa fa-pencil-square-o text-info"  aria-hidden="true"></i>Edit</button></div>
				    <table class="table table-bordered" id="carrer_table">
								<tbody>
						
									<tr>
										<th width="30%">Level:</th>
										<td>{{isset($levelNames)?$levelNames[$acadata->lavelofeducation_id][0]:null}}</td>
									</tr>
									<tr>
										<th>Exam Title:</th>
										<td>{{isset($examtitlename)?$examtitlename[$acadata->exam_title_id][0]:null}}</td>
									</tr>
									<tr>
										<th>Group/Major :</th>
										<td>{{isset($examtitlename)?$majorename[$acadata->groupormajor_id][0]:null}}</td>
									</tr>
									<tr>
										<th>Result :</th>
										<td>{{$acadata->result}}</td>
									</tr>
									<tr>
										<th>Marks :</th>
										<td>{{$acadata->marks}}</td>
									</tr>
									<tr>
										<th>Institute :</th>
										<td>{{$acadata->institute}}</td>
									</tr>
									<tr>
										<th>Passing year :</th>
										<td>{{$acadata->passing_year}}</td>
									</tr>									
									<tr>
									<th>Duration :</th>
										<td>{{$acadata->duration}}</td>
									</tr>
									<tr>
										<th>Achievment :</th>
										<td>{{$acadata->achievment}}</td>
									</tr>
									
									
								</tbody>
						</table>
								
				  </div>
			@endforeach
	    	@endif
		</div>
		</div>
	</div>



<script type="text/javascript">
	$(document).ready(function($){
		$(document).on('click','.icon',function(){
			if($(this).children('i').attr('class')=="fa fa-angle-double-down pull-right"){
				$(this).children('i').attr('class',"fa fa-angle-double-up pull-right");
			}
			else{
				$(this).children('i').attr('class',"fa fa-angle-double-down pull-right");
			}
		})

		$(document).on('click', '#editacademic', function(event) {
			
			var edit_academicid=$(this).val();
			
			$.ajax({
				url:'{!!URL::to('jobseeker/infoupdate')!!}',
				type: 'put',
				data: {'edit_academicid': edit_academicid,'action':'update_academic'},
				success:function(data) {
					//console.log(data[0]);
				$('#lavelofeducation_id_edit').val(data[0].lavelofeducation_id);
				$('#exam_title_id_edit').val(data[0].exam_title_id);	
				$('#groupormajor_id_edit').val(data[0].groupormajor_id);	
				$('#result_edit').val(data[0].result);	
				$('#marks_edit').val(data[0].marks);	
				$('#institute_edit').val(data[0].institute);	
				$('#passing_year_edit').val(data[0].passing_year);	
				$('#duration_edit').val(data[0].duration);	
				$('#achievment_edit').val(data[0].achievment);
					
				}
			})			
			
		});


		$(document).on('click', '#editacademic', function(event) {
			var edit_academicid=$(this).val();;
			$.ajax({
				url:'{!!URL::to('jobseeker/infoupdate')!!}',
				type: 'put',
				data: {'edit_academicid': edit_academicid,'action':'update_academic'},
				success:function(data) {
					
				
					
				}
			})			
			
		});
		$(document).on('submit','.academicupdate',function(e){
		  e.preventDefault();
		  		var edit_academicid=$('#editacademic').val();
		  		if ($('#lavelofeducation_id_edit').val() !=="" || $('#exam_title_id_edit').val() !=="" || $('#groupormajor_id_edit').val() !=="") {
		  			var lavelofeducation_id= $('#lavelofeducation_id_edit').val();
					var exam_title_id=$('#exam_title_id_edit').val();	
					var groupormajor_id=$('#groupormajor_id_edit').val();	
					var result=$('#result_edit').val();	
					var marks=$('#marks_edit').val();	
					var institute=$('#institute_edit').val();	
					var passing_year=$('#passing_year_edit').val();	
					var duration=$('#duration_edit').val();	
					var achievment=$('#achievment_edit').val();

					$.ajax({
						    type:'put',
						    url:'{!!URL::to('jobseeker/infoupdate')!!}',
						    data:{'action':'education_editandupdate','edit_academicid':edit_academicid,'lavelofeducation_id':lavelofeducation_id,'exam_title_id':exam_title_id,'groupormajor_id':groupormajor_id,'result':result,'marks':marks,'institute':institute,'duration':duration,'achievment':achievment},
						    success:function(d){
						    	//return(d);
						      console.log(d);
						     $('#carrer_table').load(location.href+ ' #carrer_table');
								
				    
				    }
				  })


		  		}else {
		  			alert('Dont Left Blank On Red Star Field');
		  		}

})

		 $(document).on('change','#exam_title_id_edit',function(){
      var exam_title_id = $(this).val();
      //alert(id);
            var opp=" ";

            $.ajax({
                type:'put',
                url:'{!!URL::to('jobseeker/infoupdate')!!}',
                data:{'exam_title_id':exam_title_id,'action':'showgroup_mejor'},
                success:function(data){
                  console.log(data);
                    opp+='<option value="-1" selected disabled>Select groupormejor</option>';
                    for(var i=0;i<data.length;i++){
                    opp+='<option value="'+data[i].id +'">'+data[i].groupname+'</option>';
                   }
                  
                   $('.modal-content').find('#groupormajor_id_edit').html(" ");
                   $('.modal-content').find('#groupormajor_id_edit').append(opp);
                },
                error:function(){

                }
            });
        });
		
	});
</script>