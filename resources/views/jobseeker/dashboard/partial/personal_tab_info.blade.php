<div>{{--personal tab information start--}}
<div class="well well-sm" id="">
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
					<th>Name:</th>
						<td>{{ isset($personaldetails['message'])?$personaldetails['message']:$personaldetails->full_name }}</td>
					</tr>
					<tr>
					<th>Father's Name:</th>
						<td>{{ isset($personaldetails['message'])?$personaldetails['message']:$personaldetails->jobseeker_father_name }}</td>
					</tr>
					<tr>
						<th>Mother's Name:</th>
						<td>{{!isset($personaldetails['message'])?$personaldetails->jobseeker_mother_name:$personaldetails['message']}}</td>
					</tr>
					<tr>
						<th>Date of Birth:</th>
						<td>{{ !isset($personaldetails['message'])?$personaldetails->jobseeker_dob:$personaldetails['message']}}</td>
					</tr>
					<tr>
						<th>Gender:</th>
						<td>{{ !isset($personaldetails['message'])?$personaldetails->jobseeker_gender:$personaldetails['message'] }}</td>
					</tr>
					<tr>
						<th>Marital Status:</th>
						<td>{{ !isset($personaldetails['message'])?$personaldetails->jobseeker_maritalstatus:$personaldetails['message'] }}</td>
					</tr>
					<tr>
						<th>Nationality:</th>
						<td>{{ !isset($personaldetails['message'])?$personaldetails->jobseeker_nationality:$personaldetails['message'] }}</td>
					</tr>
					<tr>
						<th>Religion:</th>
						<td>{{ !isset($personaldetails['message'])?$personaldetails->jobseeker_religion:$personaldetails['message'] }}</td>
					</tr>									
					<tr>
					<tr>
						<th>Permanent Address:</th>
						<td>{{ !isset($personaldetails['message'])?$personaldetails->jobseeker_permanent_address:$personaldetails['message'] }}</td>
					</tr>
					<tr>
						<th>Current Location:</th>
						<td>{{ !isset($personaldetails['message'])?$personaldetails->jobseeker_current_location:$personaldetails['message'] }}</td>
					</tr>
					<tr>
						<th>Mobile:</th>
						<td>{{ !isset($personaldetails['message'])?$personaldetails->jobseeker_phone1:$personaldetails['message'] }}</td>
					</tr>
					<tr>
						<th>Mobile 2:</th>
						<td>{{ !isset($personaldetails['message'])?$personaldetails->jobseeker_phone2:$personaldetails['message'] }}</td>
					</tr>
					<tr>
						<th>Email:</th>
						<td>{{ !isset($personaldetails['message'])?$personaldetails->jobseeker_email:$personaldetails['message'] }}</td>
					</tr>
					<tr>
						<th>Email 2:</th>
						<td>{{ isset($personaldetails['message'])?$personaldetails['message']:$personaldetails->jobseeker_email2}}</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>


</div>


</div>{{--personal tab information end--}}