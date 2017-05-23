@extends('dashboard.layout.dashboard_layout')

@section('content')
	<div class="container main_content">
		<div class="row">
		  
          <h1 class="text-center">Jobseeker Lists</h1>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h3 class="panel-title">Jobseeker lists:<a href="#" id="addnew" class="pull-right" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus" aria-hidden="true"></i>
</a></h3>           
                  </div>
                  <div class="panel-body" id="items">	

            			<table class="table table-responsive table-striped" id="example">
                        <thead>
                                <tr>
                                        <th>Serial No.</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Published</th>
                                        <th>Action</th>
                                      
                                </tr>
                        </thead>
                        <tbody>
                            @php
                                $i=1;
                            @endphp
                            @foreach($jobseekers as $jobseeker)
                                <tr class="odd gradeX">
                                    <td>{{$i++}}</td>
                                    <td>{{$jobseeker->name}}</td>
                                    <td>{{$jobseeker->email}}</td>
                                    <td>{{$jobseeker->created_at}}</td>
                                    

                                    <td><button class="btn btn-primary btn-sm editproduct" data-editid="">+</button> || <button class="btn btn-danger btn-sm delproduct" data-delid="">x</button></td>

                                </tr>

                            @endforeach
                          
                        </tbody>

                    </table>
                </div>
            </div>


            <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="title">Add new jobseeker</h4>
                  </div>
                  <div class="modal-body">
                    {!!Form::open(array('url' => 'foo/bar', 'method' => 'POST', 'id'=>'form-insert'))!!}
                    {{-- {!!Form::hidden('id',$industrytype->id,['id'=>'modalid'])!!} --}}
                      {{-- <input type="hidden" name="" id="modalid" /> --}}
                      {!!Form::label('name:');!!}
                      <p>{!!Form::text('name',null, array('class' => 'form-control', 'placeholder' => 'Write name here', 'id' => 'additem'))!!}</p>
                      {!!Form::label('email:');!!}
                      <p>{!!Form::email('email',null, array('class' => 'form-control', 'placeholder' => 'Write email here', 'id' => 'additem'))!!}</p>
                    </div>
                    <div class="modal-footer">
                      {!!Form::submit('Delete',['class'=>'btn btn-warning', 'id'=>'delete', 'style'=>'display:none','data-dismiss'=>'modal'])!!}
                      {!!Form::submit('Save changes',['class'=>'btn btn-primary', 'id'=>'save', 'style'=>'display:none','data-dismiss'=>'modal'])!!}
                      {!!Form::submit('Add item',['class'=>'btn btn-primary', 'id'=>'addbutton','data-dismiss'=>'modal'])!!}
                      {{-- <button type="button" class="" id="delete" data-dismiss="modal">Delete</button> --}}
                      {{-- <button type="button" class="btn btn-primary" id="save" data-dismiss="modal" style="display:none;">Save changes</button>
                      <button type="button" class="btn btn-primary" id="addbutton" data-dismiss="modal" style="display: none;">Add item</button> --}}
                      {!!Form::close()!!}
                  </div>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->

    </div>
</div>                

	{{csrf_field()}}
	


	<script type="text/javascript">
		$(document).ready(function() {

      $("#form-insert").on('submit', function(e){
          e.preventDefault();
          console.log($(this).serializeArray());
      });
		
		});
	</script>

@endsection