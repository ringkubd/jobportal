@extends('dashboard.layout.dashboard_layout')


@section('content')
    <div class="col-md-8">
		  
          <h1 class="text-center">Public Option Lists</h1>
            <form action="" method="get" class="form-inline">
              <div class="form-group search_div">
                <input type="text" class="form-control" name="term" id="publicoptionsearch" placeholder="Search">
              </div>
            </form>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h3 class="panel-title">Public Option lists:<a href="#" id="addnew" class="pull-right" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus" aria-hidden="true"></i>
</a></h3>           
                  </div>
                  <div class="panel-body" id="items">	

            			<table class="table table-responsive table-striped" id="example">
                        <thead>
                                <tr>
                                        <th>Serial No.</th>
                                        <th>Option Name</th>
                                        <th>Option Value</th>
                                        <th>Published</th>
                                        <th>Action</th>
                                      
                                </tr>
                        </thead>
                        <tbody id="searcheble">
                            @php
                                $i=1;
                            @endphp
                            @foreach($allpublicoptions as $allpublicoption)
                                <tr class="odd gradeX all_data">
                                    <td>{{$i++}}</td>
                                    <td class="publicoption_name">{{$allpublicoption->option_name}}</td>
                                    <td class="publicoption_email">{{$allpublicoption->option_value}}</td>
                                    <td class="publicoption_created">{{$allpublicoption->created_at}}</td>
                                    

                                    <td><button class="btn btn-primary btn-sm editproduct editbtn"  data-toggle="modal" data-target="#myModal" data-edit="{{$allpublicoption->id}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button> || <button class="btn btn-danger btn-sm delpublicoption" data-delid="{{$allpublicoption->id}}"><i class="fa fa-trash-o" aria-hidden="true"></i></button>@if($allpublicoption->status== 0)||<button class="btn btn-success btn-sm approvedpublicoption" data-approved="{{$allpublicoption->id}}">Approved</button>@elseif($allpublicoption->status== 1)||<button class="btn btn-warning btn-sm rejectpublicoption" data-reject="{{$allpublicoption->id}}">Reject</button>@endif<button class="btn btn-default btn-sm publicoptiondetails"  data-toggle="modal" data-target="#publicoptionview" data-viewdetails="{{$allpublicoption->id}}">View</button></td>

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
                    <h4 class="modal-title" id="title">Add new Public Option</h4>
                  </div>
                  <div class="modal-body">
                    {!!Form::open()!!}
                    {!!Form::hidden('jobseekerid',null,['id'=>'jobseekerid'])!!}
                      {{-- <input type="hidden" name="" id="modalid" /> --}}
                      {!!Form::label('Public Option Name');!!}
                      <p>{!!Form::text('optionname',null, array('class' => 'form-control', 'placeholder' => 'Write option name here', 'id' => 'optionname'))!!}</p>
                      {!!Form::label('Public Option Value');!!}
                      <p>{!!Form::text('optionvalue',null, array('class' => 'form-control', 'placeholder' => 'Write option value here', 'id' => 'optionvalue'))!!}</p>
                    </div>
                   
                    <div class="modal-footer">
                      {!!Form::button('Delete',['class'=>'btn btn-warning', 'id'=>'delete', 'style'=>'display:none','data-dismiss'=>'modal'])!!}
                      {!!Form::button('Save changes',['class'=>'btn btn-primary', 'id'=>'save', 'style'=>'display:none','data-dismiss'=>'modal'])!!}
                      {!!Form::button('Add item',['class'=>'btn btn-primary', 'id'=>'addbutton','data-dismiss'=>'modal'])!!}
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
</div>
	{{csrf_field()}}
	


	<script type="text/javascript">
		$(document).ready(function() {

      $.ajaxSetup({
         headers: {
               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });

            // capture edit value start
              $(document).on('click','.editbtn', function() {
                var jobseekerid=$(this).attr("data-edit");
                //alert(edit);
            var jobseekername=$(this).parent().parent().find("td.jobseeker_name").html();
            var jobseekeremail=$(this).parent().parent().find("td.jobseeker_email").html();
            // var name = $(this).parents('.all_data').children('.jobseeker_name').html();
              //alert(name);
              $('#title').text("Edit jobseeker");
              $('#jobseeker_name').val(jobseekername);
              $('#jobseeker_email').val(jobseekeremail);
              $('#jobseekerid').val(jobseekerid);
              $('#save').show();
              $('#addbutton').hide();
              $('#password_field').hide();
              $('#jobseeker_name').val();
            });

              // capture edit value end

              //add new value start


              $(document).on('click','#addnew', function() {
              $('#title').text("Add jobseeker");
              $('#jobseekerid').val('');
              $('#jobseeker_name').val('');
              $('#jobseeker_email').val('');
              $('#additem').val('');
              $('#save').hide();
              $('#addbutton').show();
              $('#password_field').show();
            });

      //add new value end


      //insert start

        $('#addbutton').click(function() {
            var jobseeker_name = $('#jobseeker_name').val();
            var jobseeker_email = $('#jobseeker_email').val();
            var jobseeker_password = $('#jobseeker_password').val();
            //alert(jobseeker_name);
            //alert(jobseeker_email);
            if (jobseeker_name=="" || jobseeker_email==""|| jobseeker_password=="") {
              alert('Filed must not be empty');
            }else{
              


              $.ajax({
                        type:'post',
                        url:'{!!URL::to('inspector/managejobseeker')!!}',
                        data:{'jobseeker_name':jobseeker_name,'jobseeker_email':jobseeker_email,'jobseeker_password':jobseeker_password,'action':'insertjobseeker'},
                        success:function(data){
                            // console.log('success');
                            // console.log(data);
                            //console.log(data.length);
                        $('#jobseeker_password').val('');
                $('#items').load(location.href + ' #items');
                        },
                        error:function(){

                        }
                    });


              }
              
          });

      //insert end





  });


	</script>

@endsection

