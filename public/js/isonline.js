$(document).ready(function() {	
  $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
	});
  function isOnline(){
  	$.ajax({
  	url: '/setonline',
  	type: 'GET',
  	data: {
  		ajax: 'AJAX',
  		action:'employer'
  	},
  	success:function(data){
  		console.log(data);
  	}
  })
  }
  $hi = setInterval(isOnline(), 3000);

  // get all online Employer
  function getAllonlineEmployer(){
    $.ajax({
    url: '/getAllonlineUser',
    type: 'GET',
    data: {
      ajax: 'AJAX',
      action:'employer'
    },
    success:function(data){
      console.log(data);
    }
  })
  }
  $jai = setInterval(getAllonlineEmployer(), 3000);
  
  
});