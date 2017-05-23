$(document).ready(function() {	
  $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
	});
  $(document).on('submit', '#btnContactUs', function(event) {
  	event.preventDefault();
  	/* Act on the event */
  	var name=$('#support_name').val();
  	var email=$('#support_email').val();
  	var subject=$('#support_subject').val();
  	var message=$('#support_message').val();
  	$.ajax({
        type:'get',
        url:'contact_message',
       data: {"action": "contract_us","name": name,"email": email,"subject": subject,"message": message},
      success:function(data){ 
      alert(data);                   
      location.reload();
      },
      error:function(){

      }
});
  	
  	
  });
});