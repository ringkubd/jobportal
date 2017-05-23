$(document).ready(function() {	
  $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
	});

  //refresh inbox menu
  	var i = 0;
  	function refreshInbox()
  	{
  	 	$('#employer_inbox').load(location.href+' #employer_inbox');
  	 	$('#messgaeTable').load(location.href+' #messgaeTable');
  	}

  var menuRefresh = setInterval(function(){ refreshInbox() }, 5000);

  //get details messgae
  $(document).on('click', '.messagerow', function(event) {
  	event.preventDefault();
  	/* Act on the event */
  	var id = $(this).attr('value');
  	var url = '/employer/messageoption';
  	$.ajax({
  		url: url,
  		type: 'POST',
  		data: {
  			action: 'messageView',
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
  			
  			$('#recepent_id').val(data.jobseeker_sender_id);
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
  		$(this).text('Close');
  	}, function() {
  		/* Stuff to do every *even* time the element is clicked */
  		$(this).text('Replay');
  	});
  	
  	$('#replayform').toggleClass('hidden');
  });


  //replay message employer to jobseeker
  $(document).on('submit', '#emp_replay_msg', function(event) {
  	event.preventDefault();
  	/* Act on the event */
  	var url = $(this).attr('action');
  	$.ajax({
  		url: url,
  		type: 'GET',
  		data: $(this).serialize(),
  		success:function(message)
  		{
  			$('#replayform').toggleClass('hidden');
  			console.log(message);
  			$('#emp_replay_msg').trigger("reset");

  			alert('Message send');
  		}
  	})
  	
  });
});