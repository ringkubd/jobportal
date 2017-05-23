$(document).ready(function() {	
  $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
	});

  $(document).on('change','#sender_id',function(){
  	$.ajax({
  		url: '/employer/getAppliedJobseekerList',
  		type: 'post',
  		data: {
  			action: 'jobid',
  			jobid: $(this).val()
  		},
  		success:function(data){
  			if (data.length>0) 
  			{
  				var option = '<option value="-1">Select One</option>';
		        for (var i = 0 ; i < data.length; i++) {
		            option += '<option value="'+data[i].id +'">'+data[i].name+'</option>';
		          }
		        $(document).find('#recepent_id').html(option);
  			}
  		}
  	})
  	
  	
  });
  $(document).on('submit', '#emp_send_msg', function(event) {
  	event.preventDefault();
  	/* Act on the event */
  	var url = $(this).attr('action');
  	$.ajax({
  		url: url,
  		type: 'GET',
  		data: $(this).serialize(),
  		success:function(message)
  		{
  			$('#emp_send_msg').trigger("reset");

  			alert('Message send');
  		}
  	})
  	
  });


  // jobseeker inbox



  //refresh inbox menu
  	var i = 0;
  	function refreshInbox()
  	{
  		$('#unreadcount').val(i++);
  	 	$('#jobseeker_inbox').load(location.href+' #jobseeker_inbox');
  	 	$('#messgaeTable').load(location.href+' #messgaeTable');
  	}

  var menuRefresh = setInterval(function(){ refreshInbox() }, 1000);


  //get details messgae
  $(document).on('click', '.messagerow', function(event) {
  	event.preventDefault();
  	/* Act on the event */
  	var id = $(this).attr('value');
  	var url = '/jobseeker/messageoption';
  	$.ajax({
  		url: url,
  		type: 'POST',
  		data: {
  			action: 'jsmessageView',
  			id:id,
  		},
  		success:function(data)
  		{
  			$('#messgaeTable').load(location.href+' #messgaeTable');

  			$('#messagetitle').html(data.name);
  			$('#messsgesubject').html(data.subject);
  			$('#messagesubject').html(data.subject);
  			$('#messagefrom').html(data.name);
  			$('#messageBody').html(data.messages);
  			
  			$('#recepent_id').val(data.employer_sender_id);
  			$('#replaysubject').val(data.subject);
  		}
  	})
  	
  });

  //replay form open
  $(document).on('click', '#replaybutton', function(event) {
  	event.preventDefault();
  	/* Act on the event */
  	//$('#replaybutton').toggle(slow/400/fast);
  	$(this).toggle(function() {
  		/* Stuff to do every *odd* time the element is clicked */
  		$(this).html('Close');
  	}, function() {
  		/* Stuff to do every *even* time the element is clicked */
  		$(this).html('Replay');
  	});
  	
  	$('#replayform').toggleClass('hidden');
  });


  //replay message jobseeker to employer
  $(document).on('submit', '#js_replay_msg', function(event) {
  	event.preventDefault();
  	/* Act on the event */
  	var url = $(this).attr('action');
  	$.ajax({
  		url: url,
  		type: 'GET',
  		data: $(this).serialize(),
  		success:function(message)
  		{
  			console.log(message);
  			$('#js_replay_msg').trigger("reset");

  			alert('Message send');
  		}
  	})
  	
  });
});