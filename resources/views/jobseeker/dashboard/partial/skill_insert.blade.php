
 <div class="modal fade" id="othrelin" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Other Informations</h4>
        </div>
        <div class="modal-body">





        <div class="row">
            <div class="col-md-12">
                <div class="well">
                    {{-- <h3 class="text-center">Other Relevent Informations</h3> --}}
                    <p class="text-center">Your other  Informations</p>
                    {!! Form::open(array('url' =>'/jobseeker/infoupdate', 'name' => '', 'method' => 'post', 'id' => 'skill_insert_form')) !!}
                    {{ Form::hidden('action', 'skill_insert', array('class' => 'form-control')) }}
                    <meta name="csrf-token" content="{{ csrf_token() }}">

                        <div class="form-group">
                            {{ Form::hidden('jobseeker_id',Auth::guard('jobseeker')->user()->id, array('class' => 'form-control')) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('specializationorskill', 'Skill Name:', ['class' => 'control-label']) }}
                            {{ Form::text('specializationorskill', null, array('class' => 'form-control')) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('skilldescription', 'Skill Description:', ['class' => 'control-label']) }}
                            {{ Form::textarea('skilldescription', null, array('class' => 'form-control')) }}
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