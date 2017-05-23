
 <div class="modal fade" id="othrelin" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Other Relevent Informations</h4>
        </div>
        <div class="modal-body">





        <div class="row">
            <div class="col-md-12">
                <div class="well">
                    {{-- <h3 class="text-center">Other Relevent Informations</h3> --}}
                    <p class="text-center">Your Personal Informations</p>
                    {!! Form::open(array('url' =>'/jobseeker/infoupdate', 'name' => '', 'method' => 'post', 'id' => '','class'=>'pinfoupdate')) !!}
                    {{ Form::text('action', 'oinfoupdate', array('class' => 'form-control hidden',)) }}
                    <meta name="csrf-token" content="{{ csrf_token() }}">

                        <div class="form-group">
                            {{ Form::label('career_summary', 'Career Summary:', ['class' => 'control-label']) }}
                            {{ Form::textarea('career_summary', null, array('class' => 'form-control')) }}
                        </div>
                        <div class="form-group">
                            <a href="">What is Career?</a>
                            <h3>Example: </h3><a href="">Good Example </a><a href="">Bad Example </a>
                        </div>
                        <div class="form-group">
                            {{ Form::label('special_qualification', 'Special Qualification:', ['class' => 'control-label']) }}
                            {{ Form::textarea('special_qualification', null, array('class' => 'form-control')) }}
                        </div>
                        <div class="form-group">
                            <a href="">What is Special Qualification?</a>
                            <h3>Example: </h3><a href="">Good Example </a><a href="">Bad Example </a>
                        </div>
                        <div class="form-group">
                            {{ Form::label('keyowrds', 'Keywords:', ['class' => 'control-label']) }}
                            {{ Form::text('keyowrds', null, array('class' => 'form-control')) }}
                        </div>
                        <div class="form-group">
                            <a href="">What is Keywords?</a>
                        </div>
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