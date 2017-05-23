
@extends('jobseeker.ample.index')

@section('content')
@include('jobseeker.dashboard.partial.personalinformation')
@include('jobseeker.dashboard.partial.career')
{{-- @include('jobseeker.dashboard.partial.personal') --}}
@include('jobseeker.dashboard.partial.skill_insert')
@include('jobseeker.dashboard.partial.education')
@include('jobseeker.dashboard.partial.edit_edu_form')
@include('jobseeker.dashboard.partial.training')
@include('jobseeker.dashboard.partial.refference')
	
	<div class="containersd">
		<div class="row">
			<div class="col-md-12" id="jobseeker_details_primary">
				<div>{{--Tab menu start--}}
					<div class="stats-tab">
						<div class="btn-group " role="group" aria-label="">
							<ul class="nav nav-tabs">
								<li class="active refresh"><a href="#personal-tab" data-toggle="tab">Personal</a></li>
								<li class="refresh"><a data-toggle="tab" href="#education-tab">Education</a></li>
								<li class="refresh"> <a data-toggle="tab" href="#career-tab">Career & Objective</a></li>
								<li class="refresh"><a data-toggle="tab" href="#other-tab">Other Information</a></li>
								<li class="refresh"><a data-toggle="tab" href="#refference-tab">Refference Information</a></li>
								<li class="refresh"><a data-toggle="tab" href="#photo-tab">Photo</a></li>
								<li class="refresh"><a data-toggle="tab" href="#cv-tab">cv</a></li>
							</ul>
						</div>
					</div>

					<div class="tab-content" id="refresh">
						<div id="personal-tab" class="tab-pane fade in active">
							@include('jobseeker.dashboard.partial.personal_tab_info')
						</div>
						<div id="education-tab" class="tab-pane fade ">

		
							@include('jobseeker.dashboard.partial.education_view')
						</div>
						<div id="career-tab" class="tab-pane fade ">
							@include('jobseeker.dashboard.partial.careerandobjective')
						</div>
						<div id="other-tab" class="tab-pane fade ">
							@include('jobseeker.dashboard.partial.other_view')

						</div>
						<div id="refference-tab" class="tab-pane fade ">
							@include('jobseeker.dashboard.partial.refference_view')

						</div>
						<div id="photo-tab" class="tab-pane fade ">
							@include('jobseeker.dashboard.partial.profile_pic')
						</div>
						<div id="cv-tab" class="tab-pane fade ">
							@include('jobseeker.dashboard.partial.cv')
						</div>
					</div>


				</div> {{--Tab menu end--}}
				






			</div>
		</div>
	</div>
<script>
	$(document).ready(function(){
		$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
		});
		// $('.acs,.ags,.bas').hide();
		// $('#add-district-box').hide();
		// $('input:radio[name="bd"]').change(function(){
		// 	//alert(5);
		// 	$('#add-district-box').toggle();
		// })

	
		// $('#ac').click(function(){
		// 	$('.acs').toggle();
		// })
		// $('#ag').click(function(){
		// 	$('.ags').toggle();
		// })
		// $('#ba').click(function(){
		// 	$('.bas').toggle();
		// })

		// $('.acs').click(function(){
		// 	$(this).hide();
		// 	$('#ac').prop('checked',false)
		// })

		// $('.ags').click(function(){
		// 	$(this).hide();
		// 	$('#ag').prop('checked',false)
		// })

		// $('.bas').click(function(){
		// 	$(this).hide();
		// 	$('#ba').prop('checked',false)
		// })


		// update by ajax
// 		$('#pinfoupdate').on('submit',function(e) {
//         e.preventDefault();

// 		var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
// 		var data=$(this).serialize();

// 		//alert(data);

// $.ajax({
//     url: '/jobseeker/infoupdate',
//     type: 'post',
//     data: {_token: CSRF_TOKEN,
//     		data:data},
//     dataType: 'JSON',
//     success: function (data) {
//         console.log(data);
//     },
    
// });
$(document).on('submit','.careerupdate',function(e){
  e.preventDefault();
  var type=$(this).attr('method');
  var url=$(this).attr('action');
  // if ($('#lavelofeducation_id').val() !== "-1" && $('#exam_title_id').val() !=="-1" && $('#groupormajor_id').val() !=="-1") {
  $.ajax({
    type:'put',
    url:url,
    data:$(this).serialize(),
    success:function(d){
    	//return(d);
      console.log(d);
    alert(d);
    $('.modal').modal('hide');
     // $('#employer_industrytype').load(location.href+ ' #employer_industrytype');
     // $('#company_primary_inf').load(location.href+ ' #company_primary_inf');
     // getdata();carrer_table
     $('#carrer_table').load(location.href+ ' #carrer_table');

		
    
    }
  })
// }else {
// 	$('#lavelofeducation_id').val()==('-1')?$('#lavelofeducation_id').addClass('text-danger'):'True';
// 	$('#exam_title_id').val()==('-1')?$('#exam_title_id').addClass('has-warning'):'True';
// 	$('#groupormajor_id').val()==('-1')?$('#groupormajor_id').addClass('text-danger'):'True';
// 	alert('Dont Left Blank');
// }

})

// personal data update

$(document).on('submit','.pinfoupdate',function(e){
  e.preventDefault();
  var type=$(this).attr('method');
  var url=$(this).attr('action');
  $.ajax({
    type:'put',
    url:url,
    data:$(this).serialize(),
    success:function(d){
    	//return(d);
      console.log(d);
    alert(d);
    $('.modal').modal('hide');
     // $('#employer_industrytype').load(location.href+ ' #employer_industrytype');
     // $('#company_primary_inf').load(location.href+ ' #company_primary_inf');
     // getdata();carrer_table
     $('#carrer_table').load(location.href+ ' #carrer_table');

		
    
    }
  })

})

//end personal data


$(document).on('submit','#profile_pic',function(e){
  e.preventDefault();
  var urlw=$(this).attr('action');
  var img=$("#profile_image").val();
  //alert(img);

$.ajax({

    url: urlw,  
    method:"post",  
    data:new FormData(this),
    contentType:false,
    processData:false,
     success:function(d){
    console.log(d);
     }

})

})



	});
</script>
@endsection
