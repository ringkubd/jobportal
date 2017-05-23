@extends('jobseeker.ample.index')

@section('content')
@include('jobseeker.personalinformation')
@include('jobseeker.career')
@include('jobseeker.personal')
@include('jobseeker.other')
	<div class="containersd">
		<div class="row">
			<div class="col-md-12" id="jobseeker_details_primary">
			<h1 class="text-center">This is Dashboard</h1>

			
			<div class="well well-sm">
				<div class="row">
					<div class="">
					<div class="col-md-10">
						<h4>Personal Information</h4>
					</div>
					<div class="col-md-2">
					<button type="button" class="btn btn-info btn-sm pull-right" data-toggle="modal" data-target="#perinfo">
					<span class="glyphicon glyphicon-edit"></span> edit</button>
					</div>
					</div>
				</div>

				<div class="row">
					<div class="col-sm-12">
						<table class="table table-bordered">
							<tbody>
								<tr>
								<th>Father's Name:</th>
									<td>{{ $personaldetails->jobseeker_father_name }}</td>
								</tr>
								<tr>
									<th>Mother's Name:</th>
									<td>{{ $personaldetails->jobseeker_mother_name }}</td>
								</tr>
								<tr>
									<th>Date of Birth:</th>
									<td>{{ $personaldetails->jobseeker_dob }}</td>
								</tr>
								<tr>
									<th>Gender:</th>
									<td>{{ $personaldetails->jobseeker_gender }}</td>
								</tr>
								<tr>
									<th>Marital Status:</th>
									<td>{{ $personaldetails->jobseeker_maritalstatus }}</td>
								</tr>
								<tr>
									<th>Nationality:</th>
									<td>{{ $personaldetails->jobseeker_nationality }}</td>
								</tr>
								<tr>
									<th>Religion:</th>
									<td>{{ $personaldetails->jobseeker_religion }}</td>
								</tr>									
								<tr>
								<tr>
									<th>Permanent Address:</th>
									<td>{{ $personaldetails->jobseeker_permanent_address }}</td>
								</tr>
								<tr>
									<th>Current Location:</th>
									<td>{{ $personaldetails->jobseeker_current_location }}</td>
								</tr>
								<tr>
									<th>Mobile:</th>
									<td>{{ $personaldetails->jobseeker_phone1 }}</td>
								</tr>
								<tr>
									<th>Mobile 2:</th>
									<td>{{ $personaldetails->jobseeker_phone2 }}</td>
								</tr>
								<tr>
									<th>Email:</th>
									<td>{{ $personaldetails->jobseeker_email }}</td>
								</tr>
								<tr>
									<th>Email 2:</th>
									<td>{{ $personaldetails->jobseeker_email2 }}</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>


			</div>
			<div class="well well-sm">
				<div class="row">
					<div class="col-md-10">
						<h4>Carrer and Application Information</h4>
					</div>
					<div class="col-md-2">
					<button type="button" class="btn btn-info btn-sm pull-right" data-toggle="modal" data-target="#carapp">
					<span class="glyphicon glyphicon-edit"></span> edit</button>
					</div>
				</div>

				<div class="row">
					<div class="col-sm-12">
						<table class="table table-bordered">
							<tbody>
								<tr>
									<th>Objective:</th>
									<td>{{$items[0]->career_objective}}</td>
								</tr>
								<tr>
									<th>Career Summary :</th>
									<td>{{$items[0]->career_summary}}</td>
								</tr>
								<tr>
									<th>Special qualification :</th>
									<td>{{$items[0]->special_qualification}}</td>
								</tr>
								<tr>
									<th>Preferred organization :</th>
									<td>{{$items[0]->preferred_organization_type}}</td>
								</tr>
								<tr>
									<th>Preferred division :</th>
									<td>{{$items[0]->preferred_division}}</td>
								</tr>
								<tr>
									<th>Preferred district :</th>
									<td>{{$items[0]->preferred_district}}</td>
								</tr>
								<tr>
									<th>Available for :</th>
									<td>{{$items[0]->availablefor}}</td>
								</tr>									
								<tr>
								<tr>
								<th>Looking for :</th>
									<td>{{$items[0]->lookingfor}}</td>
								</tr>
								<tr>
									<th>Present salary :</th>
									<td>{{$items[0]->presentsalary}} <span>TK.</span></td>
								</tr>
								<tr>
									<th>Expected salary :</th>
									<td>{{$items[0]->expectedsalary}} <span>TK.</span></td>
								</tr>
								
							</tbody>
						</table>
					</div>
				</div>


			</div>
			<div class="well well-sm">
				<div class="row">
					<div class="col-md-10">
						<h4>Prefered Area</h4>
					</div>
					<div class="col-md-2">
					<button type="button" class="btn btn-info btn-sm pull-right" data-toggle="modal" data-target="#jobarea">
					<span class="glyphicon glyphicon-edit"></span> edit</button>
					</div>
				</div>
			</div>
			<div class="well well-sm">
				<div class="row">
					<div class="col-md-10">
						<h4>Other Relevent Information</h4>
					</div>
					<div class="col-md-2">
					<button type="button" class="btn btn-info btn-sm pull-right" data-toggle="modal" data-target="#othrelin">
					<span class="glyphicon glyphicon-edit"></span> edit</button>
					</div>
				</div>
			</div>






			</div>
		</div>
	</div>
<script>
	$(document).ready(function(){
		$('.acs,.ags,.bas').hide();
		$('#add-district-box').hide();
		$('input:radio[name="bd"]').change(function(){
			//alert(5);
			$('#add-district-box').toggle();
		})

	
		$('#ac').click(function(){
			$('.acs').toggle();
		})
		$('#ag').click(function(){
			$('.ags').toggle();
		})
		$('#ba').click(function(){
			$('.bas').toggle();
		})

		$('.acs').click(function(){
			$(this).hide();
			$('#ac').prop('checked',false)
		})

		$('.ags').click(function(){
			$(this).hide();
			$('#ag').prop('checked',false)
		})

		$('.bas').click(function(){
			$(this).hide();
			$('#ba').prop('checked',false)
		})


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
$(document).on('submit','.pinfoupdate',function(e){
  e.preventDefault();
  var type=$(this).attr('method');
  var url=$(this).attr('action');
  //alert(url+":"+type);
  $.ajax({
    type:'put',
    url:url,
    data:$(this).serialize(),
    success:function(d){
    	//return(d);
      console.log(d);
    alert(d);
      $('#jobseeker_details_primary').load(location.href+ ' #jobseeker_details_primary');
     // $('#employer_industrytype').load(location.href+ ' #employer_industrytype');
     // $('#company_primary_inf').load(location.href+ ' #company_primary_inf');
     // getdata();
    }
  })

})




	});
</script>
@endsection
