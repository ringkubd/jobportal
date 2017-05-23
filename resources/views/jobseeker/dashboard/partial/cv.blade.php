{{-- <script src="{{ asset('html2doc/FileSaver.js') }}"></script>  --}}
{!! Html::script('js/FileSaver.js') !!}
{!! Html::script('js/jquery.wordexport.js') !!}

<script type="text/javascript">
    jQuery(document).ready(function($) {
        $("a.word-export").click(function(event) {
            $("#page-content").wordExport();
        });
    });
    </script>
	
<div class="row">
	<div class="col-md-12">
		<div class="panel">
		    <div class="panel-heading"><i class="glyphicon glyphicon-eye-open icon-padding"></i>View Resume</div>
			
		    <div class="panel-body" id='export-content'>
				<span style="font-weight:bold;margin-left:19px;">Download Resume:</span>
				<a class="word-export" href="javascript:void(0)"> Click here </a> 
                   

				<img src="http://mybdjobs.bdjobs.com/mybdjobs/images/Word.gif" Title="save cv in word"  width="18" height="15" hspace="4" vspace="10" align="absmiddle" /></a>
				<div class="well" id="page-content">
				<div class="table-responsive">
					<table border="0" cellpadding="0" cellspacing="0" align="center" width="750" >
						<tr>
							<td colspan="6">
								<table border="0" align="center" cellpadding="0" cellspacing="0" width="100%">
									<tr>
										<td width="73%" height="" align="left" valign="bottom" class="">
										<!--Applicant's Name:-->
										{{ isset($personalDetails->name)?$personalDetails->name:null}}
										</td>											
										<td width="27%" rowspan="2" align="right" valign="bottom">
										<!--Photograph:-->												
											<table width="140" height="140" border="0" align="center" cellpadding="0" cellspacing="7" bgcolor="#dadce1">
												<tr> 
												<td width="126" height="135" align="center" bgcolor="#e2e4e5" valign="middle"> 
												@if(isset($personaldetails->profile_img))
												  {!!Html::image('/storage/jobseeker_img/'.$personaldetails->profile_img,'default-image',array("width"=>"124",'height'=>'135'))!!}
												@else
												<img src="https://cdn2.iconfinder.com/data/icons/rcons-users-color/32/boy-512.png" width="124" height="135">
												@endif
				</td>
												</tr>
											</table>												
										</td>
									</tr>									
									<tr>
										<td align="left" valign="middle">
										<!--Contact Address:-->												
											 Address: {{ !isset($personaldetails['message'])?$personaldetails->jobseeker_current_address:null}}
										<!--Home Phone:-->												
											 <br />
											 Mobile No 1: {{ !isset($personaldetails['message'])? $personaldetails->jobseeker_phone1:null}}
										<!--Office Phone:-->												
											 <br />
											 Mobile No 2 : {{ !isset($personaldetails['message'])?$personaldetails->jobseeker_phone:null}}
										<!--Email:-->												
											 <br />		
											 e-mail : {{ !isset($personaldetails['message'])?$personaldetails->jobseeker_email:null }}, {{ !isset($personaldetails['message'])?$personaldetails->jobseeker_email2:null }}
										</td>
									</tr>
								</table>
							</td>
						</tr>
					</table>
				{{-- CAREER OBJECTIVE --}}
				
						<table border="0" cellpadding="0" cellspacing="0" align="center" width="750">	
							<tr>
								<td colspan="6" style="border-bottom:1px solid #000000;">&nbsp;</td>
							</tr>									  
							<tr>
								<td colspan="6">&nbsp;</td>
							</tr>									 
							<tr>
								<td colspan="6" class="BDJHeadline01"><U>Career Objective:</U></td>
							</tr>									 
							<tr>
								<td colspan="6" align="left" style="padding-left:5px;" class="">{{isset($items[0]->career_objective)?$items[0]->career_objective:null}}</td>
							</tr>		
						</table>

					
				{{-- CAREER SUMMARY : --}}
				

					
					{{-- SPECIAL QUALIFICATION : --}}
					<table border="0" cellpadding="0" cellspacing="0" style="margin-top:3px;" align="center" width="750">	
						 <tr>
							<td colspan="6" class=""><U>Special Qualification:</U></td>
						 </tr>							
						 <tr>
							 <td colspan="6" align="left" style="padding-left:5px;" class="BDJNormalText01">
								<ul>
								@if(isset($extraActivities))
								@foreach($extraActivities as $extraActivity)
									<li>{{ $extraActivity }}</li>
								@endforeach	
								@endif
								</ul>
							 </td>
						 </tr>
					 </table>
						
				<!-------------------------------------------
				EMPLOYMENT HISTORY, TOTAL YEAR OF EXPERIENCE:
				--------------------------------------------->
					
				<!----------------------
				'ACADEMIC QUALIFICATION:
				------------------------>
				<table border="0" cellpadding="0" style="margin-top:3px;" cellspacing="0" align="center" width="750">
				 	<tr>
					 	<td colspan="6" class=""><U>Academic Qualification:</U></td>
					</tr>
				
					<tr>
						<td colspan="6" align="left" style="padding-left:5px;" class="">
					<table border="0" cellpadding="0" cellspacing="0" align="center" width="100%" style="border:1px solid #666666">
						<tr class="">
							<td width="20%" align="center" style="border-right:1px solid #666666"><STRONG>Exam Title</STRONG></td>
							<td width="20%" align="center" style="border-right:1px solid #666666"><STRONG>Concentration/Major</STRONG></td>
							<td width="20%" align="center" style="border-right:1px solid #666666"><STRONG>Institute</STRONG></td>
							<td width="12.5%" align="center" style="border-right:1px solid #666666"><STRONG>Result</STRONG></td>
							<td width="12.5%" align="center" style="border-right:1px solid #666666"><STRONG>Pas.Year</STRONG></td>
							<td width="15%" align="center"><STRONG>Duration</STRONG></td>
						</tr>
                   @if(!isset($academicsdata['message']))
			      @foreach($academicsdata as $academic)
				        <tr class="">
							<!--Exam Title:-->
						    <td width="20%" align="center" style="border-right:1px solid #666666;border-top:1px solid #666666;">
								{{isset($examtitlename)?$examtitlename[$academic->exam_title_id][0]:null}}
								&nbsp;
							</td>
						    <!--Concentration/Major:-->
							<td width="20%" align="center" style="border-right:1px solid #666666;border-top:1px solid #666666;">
								{{ isset($examtitlename)?$majorename[$academic->groupormajor_id][0]:null }}
								&nbsp;
							</td>
						    <!--Institute:-->
							<td width="20%" align="center" style="border-right:1px solid #666666;border-top:1px solid #666666;">
								{{ isset($academic->institute)?$academic->institute:null }}	
								&nbsp;				
							</td>
						    <!--Result:-->
							<td width="12.5%" align="center" style="border-right:1px solid #666666;border-top:1px solid #666666;">
								{{ isset($academic->result)?$academic->result:null }}
								&nbsp;					
							</td>
						    <!--Passing Year:-->					
							<td width="12.5%" style="border-right:1px solid #666666;border-top:1px solid #666666;" align="center">
							    {{ isset($academic->passing_year)?$academic->passing_year:null }}
								&nbsp;
						    </td>			
							<!--Duration:-->
							<td width="15%" style="border-top:1px solid #666666" align="center">
								{{ isset($academic->duration)?$academic->duration:null}}
								&nbsp;					
							</td>				
				        
						</tr>
				        @endforeach		
				        @endif					 
					 </table> 
					 </td>
					 </tr>
				 </table>




<!--------
TRAINING:
-------!-->
<table border="0" cellpadding="0" cellspacing="0" align="center" width="750" style="margin-top:3px;">
<tr>
<td colspan="6" class="BDJHeadline01"><U>Training Summary:</U></td>
</tr>

<tr>
<td colspan="6" align="left" style="padding-left:5px;" class="BDJNormalText01">
<table border="0" cellpadding="0" cellspacing="0" align="center" width="100%" style="border:1px solid #666666">
	 <tr class="BDJNormalText02">
 <td width="19%" align="center" style="border-right:1px solid #666666"><STRONG>Training Title</STRONG></td>
 <td width="19%" align="center" style="border-right:1px solid #666666"><STRONG>Topic</STRONG></td>
 <td width="15%" align="center" style="border-right:1px solid #666666"><STRONG>Institute</STRONG></td>
 <td width="15%" align="center" style="border-right:1px solid #666666"><STRONG>Country</STRONG></td>
 <td width="15%" align="center" style="border-right:1px solid #666666"><STRONG>Location</STRONG></td>
 <td width="2%" align="center" style="border-right:1px solid #666666"><STRONG>Year</STRONG></td>
 <td width="15%" align="center"><STRONG>Duration</STRONG></td>
 </tr>
   @if(($get_training!=false))
    @foreach($get_training as $training)
	   <tr class="BDJNormalText02">
	   <td width="15%" align="center" style="border-right:1px solid #666666;border-top:1px solid #666666;">
	   {{ isset($training->training_title)?$training->training_title:null }}
	   &nbsp;
	   </td>
	   <td width="15%" align="center" style="border-right:1px solid #666666;border-top:1px solid #666666; padding-left:1px;">
	  {{ isset($training->topic)?$training->topic:null }}
	   &nbsp;			   
	   </td>
	   <td width="15%" align="center" style="border-right:1px solid #666666;border-top:1px solid #666666;">
	   {{ isset($training->institute)?$training->institute:null }}
	   &nbsp;
	   </td>
	   <td width="15%" align="center" style="border-right:1px solid #666666;border-top:1px solid #666666;">
	   {{ isset($training->country)?$training->country:null }}
	   &nbsp;
	   </td>
	   <td width="15%" align="center" style="border-right:1px solid #666666;border-top:1px solid #666666;">
	   {{ isset($training->location)?$training->location:null }}
	   &nbsp;
	   </td>
	   <td width="10%" align="center" style="border-right:1px solid #666666;border-top:1px solid #666666;">
	   {{ isset($training->year)?$training->year:null }}
	   &nbsp;
	   </td>
	   <td width="15%" align="center" style="border-top:1px solid #666666;">
	   {{ isset($training->duration)?$training->duration:null }}
	   &nbsp;
	   </td>
	   </tr>
	   @endforeach
	   @endif


	 


 
</table>
</td>
</tr>
</table>


					
			

<!--referencess table-->


@if($get_refference != FALSE)
@php $i=1; @endphp

@foreach($get_refference as $refference)
   <table border="0" cellpadding="0" cellspacing="0" align="center" width="750" style="margin-top:3px;">
	
		<tr>
			<td colspan="6" class="BDJHeadline01"><U>Reference {{$i++}}</U></td>
		</tr>

		<tr>
			<td colspan="6" align="left" class="BDJNormalText01">
				<table border="0" cellpadding="0" cellspacing="0" align="center" width="100%">
				<!--Looking For:-->
				@if(isset($refference->reference_name))

					<tr class="BDJNormalText03">
						<td width="32%" align="left" style="padding-left:5px;">Name</td>
						<td width="2%" align="center">:</td>
						<td width="66%" align="left"> {{$refference->reference_name}}</td>
					</tr>
				@endif

				@if(isset($refference->organization))

					<tr class="BDJNormalText03">
						<td width="32%" align="left" style="padding-left:5px;">Organigation</td>
						<td width="2%" align="center">:</td>
						<td width="66%" align="left"> {{$refference->organization}}</td>
					</tr>
				@endif


				@if(isset($refference->disignation))

					<tr class="BDJNormalText03">
						<td width="32%" align="left" style="padding-left:5px;">Designation</td>
						<td width="2%" align="center">:</td>
						<td width="66%" align="left"> {{$refference->disignation}}</td>
					</tr>
				@endif

                @if(isset($refference->address))

					<tr class="BDJNormalText03">
						<td width="32%" align="left" style="padding-left:5px;">Address</td>
						<td width="2%" align="center">:</td>
						<td width="66%" align="left"> {{$refference->address}}</td>
					</tr>
				@endif


				@if(isset($refference->office_phone))

					<tr class="BDJNormalText03">
						<td width="32%" align="left" style="padding-left:5px;">Office phone</td>
						<td width="2%" align="center">:</td>
						<td width="66%" align="left"> {{$refference->office_phone}}</td>
					</tr>
				@endif


					@if(isset($refference->home_phone))

					<tr class="BDJNormalText03">
						<td width="32%" align="left" style="padding-left:5px;">Home phone</td>
						<td width="2%" align="center">:</td>
						<td width="66%" align="left"> {{$refference->home_phone}}</td>
					</tr>
				@endif


				@if(isset($refference->mobile))

					<tr class="BDJNormalText03">
						<td width="32%" align="left" style="padding-left:5px;">Mobile</td>
						<td width="2%" align="center">:</td>
						<td width="66%" align="left"> {{$refference->mobile}}</td>
					</tr>
				@endif

					@if(isset($refference->email))

					<tr class="BDJNormalText03">
						<td width="32%" align="left" style="padding-left:5px;">Email</td>
						<td width="2%" align="center">:</td>
						<td width="66%" align="left"> {{$refference->reference_name}}</td>
					</tr>
				@endif

					@if(isset($refference->relation))

					<tr class="BDJNormalText03">
						<td width="32%" align="left" style="padding-left:5px;">Relation</td>
						<td width="2%" align="center">:</td>
						<td width="66%" align="left"> {{$refference->relation}}</td>
					</tr>
				@endif
				


				</table>
			</td>
		</tr>
	</table>
	@endforeach
	@endif
          
		
		    	



 


<!--------------------------
PROFESSIONAL QUALIFICATION:
--------------------------->

<!---------------------------------
CAREER AND APPLICATION INFORMATION:
------------------------------------>
	<table border="0" cellpadding="0" cellspacing="0" align="center" width="750" style="margin-top:3px;">
	<!--
	Career and Application Information:
	-->
		<tr>
			<td colspan="6" class="BDJHeadline01"><U>Career and Application Information:</U></td>
		</tr>

		<tr>
			<td colspan="6" align="left" class="BDJNormalText01">
				<table border="0" cellpadding="0" cellspacing="0" align="center" width="100%">
				<!--Looking For:-->

					<tr class="BDJNormalText03">
						<td width="32%" align="left" style="padding-left:5px;">Looking For</td>
						<td width="2%" align="center">:</td>
						<td width="66%" align="left">{{ isset($items[0]->lookingfor)?$items[0]->lookingfor:null }}</td>
					</tr>

				<!--Available For:-->

					<tr class="BDJNormalText03">
						<td width="32%" align="left" style="padding-left:5px;">Available  For</td>
						<td width="2%" align="center">:</td>
						<td width="66%" align="left">{{ isset($items[0]->availablefor)?$items[0]->availablefor:null }}</td>
					</tr>

				<!--Present Salary:-->

				<!--Expected Salary:-->

				<!--Preferred Job Category:-->
					<tr class="BDJNormalText03">
						<td width="32%" align="left" style="padding-left:5px;">Preferred  Job Category</td>
						<td width="2%" align="center">:</td>
						<td width="66%" align="left">{{ isset($items[0]->preferred_job_category)?$items[0]->preferred_job_category:null}}</td>
					</tr>
				<!--Preferred District:-->

					<tr class="BDJNormalText03">
						<td width="32%" align="left" style="padding-left:5px;">Preferred  District </td>
						<td width="2%" align="center">:</td>
						<td width="66%" align="left">{{ isset($items[0]->preferred_district)?$items[0]->preferred_district:null }}</td>
					</tr>

				<!--Preferred Country:-->

					<tr class="BDJNormalText03">
						<td width="32%" align="left" style="padding-left:5px;">Preferred  Division </td>
						<td width="2%" align="center">:</td>
						<td width="66%" align="left">{{ isset($items[0]->preferred_division)?$items[0]->preferred_division:null}}</td>
					</tr>

				<!--Preferred Organization Types:-->

					<tr class="BDJNormalText03">
						<td width="32%" align="left" style="padding-left:5px;" valign="top">Preferred  Organization Types</td>
						<td width="2%" align="center" valign="top">:</td>
						<td width="66%" align="left">{{ isset($items[0]->preferred_organization_type)?$items[0]->preferred_organization_type:null }}</td>
					</tr>

				</table>
			</td>
		</tr>
	</table>


<!--
Specialization:
-->

<!--
EXTRA CURRICULAR ACTIVITIES, LANGUAGE PROFICIENCY:
-->

<!--
Language Proficiency:
-->

<!--
PERSONAL DETAILS:
--> 	<table border="0" cellpadding="0" cellspacing="0" align="center" width="750" style="margin-top:3px;">
<!--
Personal Details
-->
	<tr>
		<td colspan="6" class="BDJHeadline01"><U>Personal Details :</U></td>
	</tr>

	<tr>
		<td colspan="6" align="left" class="BDJNormalText01">
		<table border="0" cellpadding="0" cellspacing="0" align="center" width="100%">
	<!--Fathers Name:-->

			<tr class="BDJNormalText03">
				<td width="32%" align="left" style="padding-left:5px;">Father's Name </td>
				<td width="2%" align="center">:</td>
				<td width="66%" align="left">{{ isset($personaldetails['message'])?null:$personaldetails->jobseeker_father_name }}</td>
			</tr>

	<!--Mothers Name:-->

			<tr class="BDJNormalText03">
				<td width="32%" align="left" style="padding-left:5px;">Mother's Name </td>
				<td width="2%" align="center">:</td>
				<td width="66%" align="left">{{ !isset($personaldetails['message'])?$personaldetails->jobseeker_mother_name:null }}</td>
			</tr>

	<!--Date of Birth:-->
			<tr class="BDJNormalText03">
				<td width="32%" align="left" style="padding-left:5px;">Date  of Birth</td>
				<td width="2%" align="center">:</td>
				<td width="66%" align="left">{{ !isset($personaldetails['message'])?$personaldetails->jobseeker_dob:null }}</td>
			</tr>
	<!--Gender:-->
			<tr class="BDJNormalText03">
				<td width="32%" align="left" style="padding-left:5px;">Gender</td>
				<td width="2%" align="center">:</td>
				<td width="66%" align="left">{{!isset($personaldetails['message'])?$personaldetails->jobseeker_gender:null }}</td>
			</tr>
	<!--Marital Status:-->
			<tr class="BDJNormalText03">
				<td width="32%" align="left" style="padding-left:5px;">Marital  Status </td>
				<td width="2%" align="center">:</td>
				<td width="66%" align="left">{{ isset($personaldetails['message'])?$personaldetails->jobseeker_maritalstatus:null }}</td>
			</tr>
	<!--Nationality:-->
			<tr class="BDJNormalText03">
				<td align="left" style="padding-left:5px;">Nationality</td>
				<td align="center">:</td>
				<td align="left">{{ !isset($personaldetails['message'])?$personaldetails->jobseeker_nationality:null }}</td>
			</tr>

			<tr class="BDJNormalText03">
				<td align="left" style="padding-left:5px;">National Id No.</td>
				<td align="center">:</td>
				<td align="left">{{ isset($personaldetails['message'])?$personaldetails->jobseeker_national_id_no:null }}</td>
			</tr>

	<!--Religion:-->

			<tr class="BDJNormalText03">
				<td align="left" style="padding-left:5px;">Religion</td>
				<td align="center">:</td>
				<td align="left">{{  !isset($personaldetails['message'])?$personaldetails->jobseeker_religion:null }}</td>
			</tr>

	<!--Permanent Address:-->

			<tr class="BDJNormalText03">
				<td align="left" style="padding-left:5px;">Permanent  Address</td>
				<td align="center">:</td>
				<td align="left">{{ !isset($personaldetails['message'])?$personaldetails->jobseeker_permanent_address:null }}</td>
			</tr>

	<!--Current Location:-->
			<tr class="BDJNormalText03">
				<td align="left" style="padding-left:5px;">Current  Location</td>
				<td align="center">:</td>
				<td align="left">{{ !isset($personaldetails['message'])?$personaldetails->jobseeker_current_location:null }}</td>
			</tr>

</table>
</tr>
</table>

<!--
REFERENCE:
-->
				
				
				</div>
				</div>
		    </div>
		</div>
	</div>
</div>
