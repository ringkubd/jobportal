<div class="modal fade" id="refference_form" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add Reference Information</h4>
        </div>
        <div class="modal-body">





        <div class="row">
            <div class="col-md-12">
                <div class="well">
                    {{-- <h3 class="text-center">Other Relevent Informations</h3> --}}
                    <p class="text-center">Add Reference Information</p>
                    {!! Form::open(array('url' =>'/jobseeker/infoupdate', 'name' => '', 'method' => 'post', 'id' => 'refference_insert_form')) !!}
                    {{ Form::hidden('action', 'refference_insert', array('class' => 'form-control')) }}
                    <meta name="csrf-token" content="{{ csrf_token() }}">

                       
                        <div class="form-group">
                            {{ Form::label('reference_name', 'Refference Name:', ['class' => 'control-label']) }}
                            {{ Form::text('reference_name', null, array('class' => 'form-control')) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('organization', 'Organization:', ['class' => 'control-label']) }}
                            {{ Form::text('organization', null, array('class' => 'form-control')) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('disignation', 'Disignation:', ['class' => 'control-label']) }}
                            {{ Form::text('disignation', null, array('class' => 'form-control')) }}
                        </div>
                        
                         <div class="form-group">
                            {{ Form::label('address', 'Address:', ['class' => 'control-label']) }}
                            {{ Form::text('address', null, array('class' => 'form-control')) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('office_phone', 'Office Phone:', ['class' => 'control-label']) }}
                            {{ Form::text('office_phone', null, array('class' => 'form-control')) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('home_phone', 'Home Phone:', ['class' => 'control-label']) }}
                            {{ Form::text('home_phone', null, array('class' => 'form-control')) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('mobile', 'Mobile:', ['class' => 'control-label']) }}
                            {{ Form::text('mobile', null, array('class' => 'form-control')) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('email', 'Email:', ['class' => 'control-label']) }}
                            {{ Form::text('email', null, array('class' => 'form-control')) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('relation', 'Relation:', ['class' => 'control-label']) }}
                            {{ Form::text('relation', null, array('class' => 'form-control')) }}
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