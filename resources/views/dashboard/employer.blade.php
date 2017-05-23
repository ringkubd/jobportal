@extends('dashboard.layout.dashboard_layout')

@section('content')
@include('dashboard.modal.employer_profile_modal')
        <div class="col-md-9">
                  
                  <h1 class="text-center">Manage Employer</h1>
                    <form action="" method="get" class="form-inline">
                      <div class="form-group search_div">
                        <input type="text" class="form-control" name="term" id="employersearch" placeholder="Search">
                      </div>
                    </form>
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h3 class="panel-title">Employer lists:<a href="#" id="addnew" class="pull-right" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus" aria-hidden="true"></i>
        </a></h3>           
                          </div>
                          <div class="panel-body table-responsive" id="items">   

                            <table class="table table-responsive table-striped" id="example">
                                <thead>
                                        <tr>
                                                <th>SL no.</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>job statistics</th>
                                                <th>Action</th>
                                                <th>Reject or View</th>
                                              
                                        </tr>
                                </thead>
                                <tbody id="searcheble">
                                    @php
                                        $i=1;
                                    @endphp
                                    @foreach($employers as $employer)
                                        <tr class="odd gradeX all_data">
                                            <td>{{$i++}}</td>
                                            <td class="employer_name">{{$employer->name}}</td>
                                            <td class="employer_email">{{$employer->email}}</td>
                                            
                                            <td><a class="btn btn-danger btn-sm  total_job_post" data-viewpostjob="{{$employer->id}}" href="{!!URL::to('inspector/view_posted_job')!!}/{{$employer->id}}" target="_blank">Pending job</a><a class="btn btn-info btn-sm  total_job_published" data-viewpublishedjob="{{$employer->id}}" href="{!!URL::to('inspector/view_published_job')!!}/{{$employer->id}}" target="_blank">Published job</a><a class="btn btn-success btn-sm  total_job_trashed" data-viewtrashedjob="{{$employer->id}}" href="{!!URL::to('inspector/view_trashed_job')!!}/{{$employer->id}}" target="_blank">Trashed job</a></td>
                                            <td><button class="btn btn-primary btn-sm editproduct editbtn"  data-toggle="modal" data-target="#myModal" data-edit="{{$employer->id}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button><button class="btn btn-danger btn-sm delemployer" data-delid="{{$employer->id}}"><i class="fa fa-trash-o" aria-hidden="true"></i></button></td>

                                            <td>@if($employer->status== 0)<button class="btn btn-success btn-sm approvedemployer" data-approved="{{$employer->id}}">Approved</button>@elseif($employer->status== 1)<button class="btn btn-warning btn-sm rejectemployer" data-reject="{{$employer->id}}">Reject</button>@endif<button class="btn btn-primary btn-sm viewemployer" data-toggle="modal" data-target="#emp_profile" data-viewemployer="{{$employer->id}}">View</button></td>

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
                            <h4 class="modal-title" id="title">Add new employer</h4>
                          </div>
                          <div class="modal-body">
                            {!!Form::open()!!}
                            {!!Form::hidden('employerid',null,['id'=>'employerid'])!!}
                              {{-- <input type="hidden" name="" id="modalid" /> --}}
                              {!!Form::label('name');!!}
                              <p>{!!Form::text('name',null, array('class' => 'form-control', 'placeholder' => 'Write name here', 'id' => 'employer_name'))!!}</p>
                              {!!Form::label('email');!!}
                              <p>{!!Form::email('email',null, array('class' => 'form-control', 'placeholder' => 'Write email here', 'id' => 'employer_email'))!!}</p>
                              {!!Form::label('slug');!!}
                              <p>{!!Form::text('slug',null, array('class' => 'form-control', 'placeholder' => 'Write slug here', 'id' => 'employer_slug'))!!}</p>
                              <div id="password_field">
                                {!!Form::label('password');!!}
                                <p>{!!Form::text('password',null, array('class' => 'form-control', 'placeholder' => 'Write password here', 'id' => 'employer_password'))!!}</p>
                              </div>
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
          var employerid=$(this).attr("data-edit");
          //alert(edit);
      var employername=$(this).parent().parent().find("td.employer_name").html();
      var employeremail=$(this).parent().parent().find("td.employer_email").html();
      var employerslug=$(this).parent().parent().find("td.employer_slug").html();
      // var name = $(this).parents('.all_data').children('.employer_name').html();
        //alert(name);
        $('#title').text("Edit employer");
        $('#employer_name').val(employername);
        $('#employer_email').val(employeremail);
        $('#employer_slug').val(employerslug);
        $('#employerid').val(employerid);
        $('#save').show();
        $('#addbutton').hide();
        $('#password_field').hide();
        $('#employer_name').val();
      });

        // capture edit value end

        //add new value start


        $(document).on('click','#addnew', function() {
        $('#title').text("Add employer");
        $('#employerid').val('');
        $('#employer_name').val('');
        $('#employer_email').val('');
        $('#additem').val('');
        $('#employer_password').val('');
        $('#save').hide();
        $('#addbutton').show();
        $('#password_field').show();
      });

//add new value end


//insert start

  $('#addbutton').click(function() {
      var employer_name = $('#employer_name').val();
      var employer_email = $('#employer_email').val();
      var employer_password = $('#employer_password').val();
      var employer_slug = $('#employer_slug').val();
      //alert(employer_name);
      //alert(employer_email);
      if (employer_name=="" || employer_email==""|| employer_password==""|| employer_slug=="") {
        alert('Filed must not be empty');
      }else{
        


        $.ajax({
                  type:'post',
                  url:'{!!URL::to('inspector/manageemployer')!!}',
                  data:{'employer_name':employer_name,'employer_email':employer_email, 'employer_slug':employer_slug, 'employer_password':employer_password,'action':'insertemployer'},
                  success:function(data){
                      // console.log('success');
                      // console.log(data);
                      //console.log(data.length);
                  $('#employer_password').val('');
          $('#items').load(location.href + ' #items');
                  },
                  error:function(){

                  }
              });


        }
        
    });

//insert end

//save start.....

    $('#save').click(function(event) {
        var employerid = $('#employerid').val();
        //alert(saveid);
        var employername = $('#employer_name').val();
        var employeremail= $('#employer_email').val();
        var employerslug= $('#employer_slug').val();
            $.ajax({
                    type:'post',
                    url:'{!!URL::to('inspector/manageemployer')!!}',
                    data:{'employerid':employerid, 'employername':employername,'employeremail':employeremail,'employerslug':employerslug,'action':'updateemployer'},
                    success:function(data){
                        console.log('success');
                        console.log(data);
                        //console.log(data.length);

            $('#items').load(location.href + ' #items');
                    },
                    error:function(){

                    }
                });
        
      });
    //save end


    //Parmanently delete start
 $(document).on('click','.delemployer', function() {
       var employerdelid=$(this).attr("data-delid");
            $.ajax({
                    type:'post',
                    url:'{!!URL::to('inspector/manageemployer')!!}',
                    data:{'employerdelid':employerdelid,'action':'deleteemployer'},
                    success:function(data){
                        //console.log('success');
                        //console.log(data);
                        //console.log(data.length);

            $('#items').load(location.href + ' #items');
                    },
                    error:function(){

                    }
                });
        
      });

    //parmanent delete end

//reject sobseeker start
 $(document).on('click','.rejectemployer', function() {
       var employerrejectid=$(this).attr("data-reject");
            $.ajax({
                    type:'post',
                    url:'{!!URL::to('inspector/manageemployer')!!}',
                    data:{'employerrejectid':employerrejectid,'action':'rejectemployer'},
                    success:function(data){
                        //console.log('success');
                        //console.log(data);
                        //console.log(data.length);

            $('#items').load(location.href + ' #items');
                    },
                    error:function(){

                    }
                });
        
      });



//end employer reject



//approved sobseeker start
$(document).on('click','.approvedemployer', function() {
       var approveemployerid=$(this).attr("data-approved");
            $.ajax({
                    type:'post',
                    url:'{!!URL::to('inspector/manageemployer')!!}',
                    data:{'approveemployerid':approveemployerid,'action':'approvedemployer'},
                    success:function(data){

                        //console.log('success');
                        //console.log(data);
                        //console.log(data.length);

            $('#items').load(location.href + ' #items');
                    },
                    error:function(){

                    }
                });
        
      });



//end employer approved

//view employer profile start

$(document).on('click','.viewemployer', function() {
       var viewemployerid=$(this).attr("data-viewemployer");
       //alert(viewemployerid);
            $.ajax({
                    type:'post',
                    url:'{!!URL::to('inspector/manageemployer')!!}',
                    data:{'viewemployerid':viewemployerid,'action':'viewemployerprofile'},
                    success:function(data){
                     console.log(data);
                      $('#empprofileid').val(data[0].employer_id);
                      $('#username').val(data[0].username);
                      $('#useremail').val(data[0].useremail);
                       $('#division').val(data[0].dname);
                       $('#companyname').val(data[0].companyname);
                       $('#company_name').html(data[0].companyname);
                       $('#altcompanyname').val(data[0].altcompanyname);
                       $('#contact_person').val(data[0].contactperson);
                       $('#desig').val(data[0].designation);
                       $('#indtype').val(data[0].industrytype);
                       $('#companyaddress').val(data[0].companyaddress);
                       $('#country').val(data[0].cname);
                       $('#division').val(data[0].dname);
                       $('#district').val(data[0].disname);
                       $('#area').val(data[0].aname);
                       $('#billingaddress').val(data[0].billingaddress);
                       $('#ContactPhone').val(data[0].ContactPhone);                       
                       $('#ContactEmail').val(data[0].ContactEmail);
                       $('#websiteaddress').val(data[0].websiteaddress);
                       $('#created_at').val(data[0].created_at);
                       $('#updated_at').val(data[0].updated_at);
                       //alert(data[0].dname);
            $('#items').load(location.href + ' #items');
             $('#items').load(location.href + ' #items');
                    },
                    error:function(){

                    }
                });
        
      });



//ajax search start......

      $('#employersearch').on('keyup',function(){
         $value = $(this).val();
         $.ajax({
          type:'get',
          dataType:'html',
          url:'{!!URL::to('inspector/employersearch')!!}',
          data:{'search':$value},
          success:function(data){
              $('#searcheble').html(data);
              console.log(data);
            
          }
         });
      });

//ajax search start......
//view employer profile end 
  });


	</script>

@endsection