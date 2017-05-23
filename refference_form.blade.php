<div class="modal fade" id="refference_form" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add Refference Information</h4>
        </div>
        <div class="modal-body">





        <div class="row">
            <div class="col-md-12">
                <div class="well">
                    {{-- <h3 class="text-center">Other Relevent Informations</h3> --}}
                    <p class="text-center">Add Refference Information</p>
                    {!! Form::open(array('url' =>'/jobseeker/infoupdate', 'name' => '', 'method' => 'post', 'id' => 'refference_insert_form')) !!}
                    {{ Form::hidden('action', 'refference_insert', array('class' => 'form-control')) }}
                    <meta name="csrf-token" content="{{ csrf_token() }}">

                       
                        <div class="form-group">
                            {{ Form::label('refference_title', 'refference title:', ['class' => 'control-label']) }}
                            {{ Form::text('refference_title', null, array('class' => 'form-control')) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('topic', 'Topic:', ['class' => 'control-label']) }}
                            {{ Form::text('topic', null, array('class' => 'form-control')) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('institute', 'Institute:', ['class' => 'control-label']) }}
                            {{ Form::text('institute', null, array('class' => 'form-control')) }}
                        </div>
                        
                         <div class="form-group">
                            {{ Form::label('location', 'Location:', ['class' => 'control-label']) }}
                            {{ Form::text('location', null, array('class' => 'form-control')) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('country', 'country:', ['class' => 'control-label']) }}
                            {{ Form::text('country', null, array('class' => 'form-control')) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('year', 'Year:', ['class' => 'control-label']) }}
                            {{ Form::text('year', null, array('class' => 'form-control')) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('duration', 'Duration:', ['class' => 'control-label']) }}
                            {{ Form::text('duration', null, array('class' => 'form-control')) }}
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