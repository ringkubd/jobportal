<div class="modal fade common-modal" id="education_form_edit" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Academics Information update</h4>
        </div>
        <div class="modal-body">

	









		<div class='row'>
		<div class="col-md-12">
		<div class='well'>
                    <p class="pull-right"><span style="color:red; font-size: 14px; ">*</span>Required Fields <span style="color:green; font-size: 14px;">*</span>Special Instructions</p> 
                    {!! Form::open(array('url' =>'/jobseeker/infoupdate', 'name' => '', 'method' => 'post', 'id' => '','class'=>'academicupdate')) !!}
                    {{ Form::text('action', 'education_editandupdate', array('class' => 'form-control hidden',)) }}
                    <meta name="csrf-token" content="{{ csrf_token() }}">



                  <div class="form-group">
                    {{ Form::label('lavelofeducation_id', 'Levelofeducation:', ['class' => 'control-label']) }}
                    {{ Form::select('lavelofeducation_id',$levelofeducation,NULL,['class' => 'form-control', 'id' => 'lavelofeducation_id_edit']) }}
                  </div>
                
                <div class="form-group">
                {{ Form::label('exam_title_id', 'Examtitle:', ['class' => 'control-label']) }}
                {{Form::select('exam_title_id',$getexamtitle,NULL,['class' => 'form-control', 'id' => 'exam_title_id_edit'])}}
                </div>
                <div class="form-group">
                {{ Form::label('groupormajor_id', 'Group or major:', ['class' => 'control-label']) }}
                {{Form::select('groupormajor_id',$getgroup,NULL,['class' => 'form-control','id'=>'groupormajor_id_edit'])}}
                </div>
                
                <div class="form-group">
                {{ Form::label('result', 'Result:', ['class' => 'control-label']) }}
                {{Form::text('result',NULL,['class' => 'form-control',"id"=>"result_edit"])}}
                </div>
                <div class="form-group">
                {{ Form::label('marks','Marks:', ['class' => 'control-label']) }}
                {{Form::text('marks','',['class' => 'form-control','id'=>'marks_edit'])}}
                </div>
                <div class="form-group">
                {{ Form::label('institute','Institute:', ['class' => 'control-label']) }}
                {{Form::text('institute','',['class' => 'form-control','id'=>'institute_edit'])}}
                </div>
                <div class="form-group">
                {{ Form::label('passing_year','Passing_year:', ['class' => 'control-label']) }}
                {{Form::text('passing_year','',['class' => 'form-control','id'=>'passing_year_edit'])}}
                </div>
         
                  <div class="form-group">
                      {{ Form::label('duration','Duration:', ['class' => 'control-label']) }}
                      {{ Form::text('duration',"", array('class' => 'form-control', 'placeholder'=>'Amount in BDT','id'=>'duration_edit')) }} Tk./Month
                  </div>
                  <div class="form-group">
                      {{ Form::label('achievment', 'Achievment:', ['class' => 'control-label']) }}
                      {{ Form::text('achievment','', array('class' => 'form-control', 'placeholder'=>'Amount in BDT','id'=>'achievment_edit')) }} Tk./Month
                  </div>
                    
                  <br>
            <div class="form-group">
                {{ Form::button('<span class="glyphicon glyphicon-retweet"> Update information</span>', array('class' => 'btn btn-success pull-right btn-md ','type'=>'submit','id'=>'')) }} 
            </div>

        {!! Form::close() !!}  
      </div>
     
      
  </div>

  </div>
  </div>

  <div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>

</div>

</div>

</div>

 <script type="text/javascript">
        //onchange level start .........
        $(document).ready(function($) {
          $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
          });
          
       
      $(document).on('change','#lavelofeducation_id',function(){
      var id = $(this).val();
      //alert(id);
            var opp=" ";

            $.ajax({
                type:'put',
                url:'{!!URL::to('jobseeker/infoupdate')!!}',
                data:{'id':id,'action':'showexamtitle'},
                success:function(data){
                  console.log(data);
                    opp+='<option value="-1" selected disabled>Select  exam</option>';
                    for(var i=0;i<data.length;i++){
                    opp+='<option value="'+data[i].id +'">'+data[i].name+'</option>';
                   }
                  
                   $('.modal-content').find('#exam_title_id').html(" ");
                   $('.modal-content').find('#exam_title_id').append(opp);
                },
                error:function(){

                }
            });
        });
      $(document).on('change','#lavelofeducation_id_edit',function(){
      var id = $(this).val();
      //alert(id);
            var opp=" ";

            $.ajax({
                type:'put',
                url:'{!!URL::to('jobseeker/infoupdate')!!}',
                data:{'id':id,'action':'showexamtitle'},
                success:function(data){
                  console.log(data);
                    opp+='<option value="-1" selected disabled>Select  exam</option>';
                    for(var i=0;i<data.length;i++){
                    opp+='<option value="'+data[i].id +'">'+data[i].name+'</option>';
                   }
                  
                   $('.modal-content').find('#exam_title_id_edit').html(" ");
                   $('.modal-content').find('#exam_title_id_edit').append(opp);
                },
                error:function(){

                }
            });
        });

       $(document).on('change','#exam_title_id',function(){
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
                  
                   $('.modal-content').find('#groupormajor_id').html(" ");
                   $('.modal-content').find('#groupormajor_id').append(opp);
                },
                error:function(){

                }
            });
        });



       });

//onchange level end .........



      </script>