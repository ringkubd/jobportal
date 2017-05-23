$(document).ready(function() {	
	  $.ajaxSetup({
	        headers: {
	            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	        }
		});

	$(document).on('click','#postjobbtn',function(){
		$('#postjobsubmit').trigger('reset');
		$('#submit_job_button').val('Insert');
	$.ajax({

	type:'get',
	url:$(this).val(),
	success:function(d){
	  $('#postjob').modal('show');
	}
	});
	});

	$(document).on('submit','#postjobsubmit',function(e){
		e.preventDefault();
		$.ajax({
			type:'get',
			url:$(this).attr('action'),
			data:$(this).serialize(),
			success:function(data){
				$('#postjobsubmit').trigger('reset');
				$('#postjob').modal('hide');
				 $('#posted_jobs').load(location.href+' #posted_jobs');

				//console.log(data);
			}
		});
	});


	//edit job 


	function show_data_emp_dashboard(){
		var url = $('#showdata').val();
		//alert(url);
		$.ajax({
			type:'get',
			url:url,
			//data:$(this).serialize(),
			success:function(data){
				//console.log(data);
			}
		});
	}
	show_data_emp_dashboard();



//edit job

$(document).on('click','.job_id',function(){
	var id 	= $(this).find('.job_edit_id').attr('value');
	//alert(id);
	var url = $(this).attr('url');
	//alert(url);
	$.ajax({
		type: 'get',
		url: url,
		data:{
			'jobid': id
		},
		success:function(data){
			//console.log(data);
			$('.jobtitle').val(data.jobtitle);
			$('#edit_post_id').val(data.id);
			$('.catagory_id').val(data.catagory_id);
			$('.industrytype_id').val(data.industrytype_id);
			$('.vacancies_amount').val(data.vacancies);
			$('.salaryrange').val(data.salaryrange);
			$('.instruction').val(data.instruction);
			$('.contactEmail').val(data.email);
			$('.contactperson').val(data.contactperson);
			$('.applicationdeadline').val(data.deadline);
			$('.designation').val(data.designation);
			$('.submit_job_button').val('Update');
			$('#editjob').modal('show');
		}
	});
	
})

$(document).on('submit','#editjobsubmit',function(e){
		e.preventDefault();
		var id 	= $('.job_edit_id').attr('value');
		var url = $('#edit_jobs').val();
		//alert(url);
		$.ajax({
			type:'get',
			url:url,
			data:$(this).serialize(),
			success:function(data){
				$('#editjob').modal('hide');
				$('#posted_jobs').load(location.href+ ' #posted_jobs');

				//console.log(data);
			}
		});
	});
	


//date picker

$( function() {
    $( "#applicationdeadline" ).datepicker();
    $( "#age-range" ).slider({
      range: true,
      min: 15,
      max: 50,
      values: [ 18, 30 ],
      slide: function( event, ui ) {
        $( "#agerange" ).val(ui.values[ 0 ] + " -" + ui.values[ 1 ] );
      }
    });
    $( "#agerange" ).val( $( "#age-range" ).slider("values", 0 ) +
      "-" + $( "#age-range" ).slider( "values", 1 ) );

    
    $( "#slider-range" ).slider({
      range: true,
      min: 5000,
      max: 200000,
      values: [ 20000, 30000 ],
      slide: function( event, ui ) {
        $( "#salaryrange" ).val('৳'+ui.values[ 0 ] + " -৳ " + ui.values[ 1 ] );
      }
    });
    $( "#salaryrange" ).val( $( "#slider-range" ).slider("values", 0 ) +
      " -৳" + $( "#slider-range" ).slider( "values", 1 ) );
  } );


//edit job date picker

$( function() {
    $( ".applicationdeadline" ).datepicker();
    $( ".slider" ).slider();
    
    $( ".slider-range" ).slider({
      range: true,
      min: 5000,
      max: 200000,
      values: [ 20000, 30000 ],
      slide: function( event, ui ) {
        $( ".salaryrange" ).val('৳'+ui.values[ 0 ] + " -৳ " + ui.values[ 1 ] );
      }
    });
    $( ".salaryrange" ).val( $( ".slider-range" ).slider("values", 0 ) +
      " -৳" + $( ".slider-range" ).slider( "values", 1 ) );
  } );


	//delelet job

	$(document).on('click','.delete_job',function(){
		if(confirm('Are you sure you want to delete??'))
		{
			var id 	= $(this).find('.delete_job_id').attr('value');
			var url = $(this).find('.delete_job_id').attr('url');
			$.ajax({
				url:url,
				type: 'get',
				data:{
					'job_id':id
				},
				success:function(data){
					$('#posted_jobs').load(location.href+ ' #posted_jobs');
					alert(data);
				}
			});
			
		};
	})

	// show job details in modal
	// show job details in modal
	$(document).on('click','.show_job_details',function(){
		var job_id = $(this).find('.job_id').attr('value');
		var url= $(this).find('.job_id').attr('url');
		$.ajax({
			url:url,
			type:'get',
			data:{
				'job_id' :job_id
			},
			success:function(returndata){
				//console.log(returndata[0]);
				var data = returndata[0];
				$('.company_name').html(data.companyname);
				$('.job_title').html(data.jobtitle);
				$('.job_category').html(data.catagoryname);
				$('.Industry_type').html(data.industrytypename);
				$('.job_instructions').html(data.instruction);
				$('.job_vacancies').html(data.vacancies);
				$('.job_salary').html(data.salaryrange);
				$('.job_created_at').html(data.created_at);
				$('.job_deadline').html(data.deadline);
				$('.contact_person').html(data.contactperson);
				$('.designation').html(data.designation);

				$('.age_limit').html(data.agerange);
				$('.job_type').html(data.jobtype);
				$('.job_level').html(data.joblevel);
				$('.educational_qualification').html(data.educational_qualification);
				$('.job_responsibilities').html(data.job_responsibilities);
				$('.job_experiences_year').html(data.job_experiences_year);
				$('.job_experiences_field').html(data.job_experiences_field);


				$('.email_address').attr('href','mailto:'+data.email);
				$('.email_address').html(data.email);

				$('#single_job_details').modal('show')
			}
		});
	});

	//job show
	$(document).on('click', '.apply_now', function(event) {
		event.preventDefault();
		/* Act on the event */
		$('#myModal').modal('show');
	});




	// $(document).on('click', '.apply_now', function(event) {
	// 	event.preventDefault();
	// 	/* Act on the event */
	// 	$('#myModal').modal('show');
	// });
	
	$(document).on('submit','#short_list_form',function(e){
		e.preventDefault();
		//alert($("#remove").val());
		url='/employer/shorted_list';
		$.ajax({
			type:"post",
			url:url,
			data:$(this).serialize(),
			
			success:function(d){
				$('.all_applicant').load(location.href+ ' .all_applicant');
				$('.short_applicant').load(location.href+ ' .short_applicant');
				$('.am').show();
				
				$('.am').fadeOut(4000);
			console.log(d);

			}
		})


	});

$(document).on('submit','#short_list_remove_form',function(e){
		e.preventDefault();
		//alert($("#remove").val());
		url='/employer/shorted_list';
		$.ajax({
			type:"post",
			url:url,
			data:$(this).serialize(),
			
			success:function(d){
				$('.short_applicant').load(location.href+ ' .short_applicant');
				$('.all_applicant').load(location.href+ ' .all_applicant');
				$('.rm').show();
				
				
				$('.rm').fadeOut(4000);
			console.log(d);

			}
		})


	})

});