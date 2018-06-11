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
							<table class="table table-bordered" id="carrer_table">
								<tbody>
								@if(!isset($personaldetails['message']) && !empty($items))
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
										<td>{{$items[0]->presentsalary}} <span></span></td>
									</tr>
									<tr>
										<th>Expected salary :</th>
										<td>{{$items[0]->expectedsalary}} <span></span></td>
									</tr>
									@else
									<tr>
										<td colspan="2">No data Found</td>
									</tr>
									@endif
									
								</tbody>
							</table>
						</div>
					</div>


				</div>
