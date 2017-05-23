@extends('employer.ample.index')
@section('title')
Employer Inbox
@endsection
@section('style')
{{-- {!!Html::style('css/managejobs.css')!!}  --}}
@endsection
@section('script')
{!!Html::script('js/managejob.js')!!}
{!!Html::script('js/empMessage.js')!!}
@endsection
@section('unreadcount')
<span class="badge">{{ $countUnread }}</span>
@endsection

@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">
{{-- {{ dump($allMessage) }} --}}
{{-- {{ dump($allMessage) }} --}}
<div class="row">
	<div class="col-sm-10 col-sm-offset-1">
		<ul  class="nav nav-pills">
			<li class="active">
        <a  href="#1a" data-toggle="tab">Messages</a>
			</li>
		</ul>

			<div class="tab-content clearfix">
			  	<div class="tab-pane active table-responsive" id="1a">
          <table class="table table-striped" id="messgaeTable">
            <tbody>
						@forelse($allMessage as $message)
						  <tr value="{{ $message->id }}" data-toggle="modal" data-target="#myModal" @if($message->read_status == 0) class="active bg-primary messagerow" bgcolor: #337ab7; style="color: black; font-weight: 300%; cursor: pointer" @else class="messagerow" style="cursor: pointer" @endif>
                <td><input type="checkbox" name="select[]"></td>      
                <td>{{ $message->name }}</td>      
                <td>{{ $message->subject }}</td>      
                <td>{{ $message->created_at }}</td>      
              </tr>
            @empty
            <span class="text-warning">No New Message</span>
            @endforelse
            </tbody>
          </table>

      				{{ $allMessage->links() }}
				</div>
			</div>
		
	</div>
</div>

{{-- Modal Message view and replay --}}
<!-- Trigger the modal with a button -->

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content well">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" id="messagetitle"></h4>
      </div>
      <div class="modal-body">
        <div class="panel panel-info">
          <div class="panel-heading">
            <span class="panel-title" id="messsgesubject"></span>
          </div>
          <div class="panel-body">
            <div class="row"> {{-- subject --}}
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <span class="title h5">Subject:</span>
              </div>
              <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                  <span id="messagesubject"></span>
              </div>
            </div>{{-- subject --}}
            <hr>
            <div class="row"> {{-- from --}}
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <span class="h5">From</span>
              </div>
              <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12" id="messagefrom"></div>
            </div>{{-- from --}}
            <hr>
            <span class="h5">Message</span>
            <hr>
            <span id="messageBody"></span>
            <hr>
            <div id="replaybutton" class="btn pull-right btn-primary">Replay</div>
            <hr>
            <div id="replayform" class="hidden">
                 {!! Form::open(array('url' =>'/employer/replay', 'name' => '', 'method' => 'get', 'id' =>'emp_replay_msg')) !!}
                   {{ csrf_field() }}
                   {{ Form::hidden('recepent_id',Null,['id' => 'recepent_id']) }}

                    {{ Form::label('subject', 'Subject:', ['class' => 'control-label']) }}

                    <div class="input-group form-group">        
                      <span class="input-group-addon" id="basic-addon3">Subject</span>
                                  {{ Form::text('subject',Null, array('class' => 'form-control','id'=>'replaysubject','aria-describedby'=>"basic-addon3")) }}
                    </div>




                    <label for="message" class="input-addon">Message::</label>
                    <div class="form-group">
                      {{ Form::textarea('message', null, array('class' => 'form-control','id'=>"replaymessage")) }}
                    </div>

                    <div class="button-group">
                      {{ Form::submit('Send', array('class' => 'btn btn-primary btn-block')) }}
                    </div>
                    
                  {!! Form::close() !!}
              
            </div>
          </div>
          <div class="panel-footer"></div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
@endsection

