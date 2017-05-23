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
  		action:'inspector'
  	},
  	success:function(data){
  		console.log(data);
  	}
  })
  }
  $hi = setInterval(isOnline(), 3000);
  
  // get all online inspector
  function getAllonlineInspector(){
    $.ajax({
    url: '/getAllonlineUser',
    type: 'GET',
    data: {
      ajax: 'AJAX',
      action:'inspector'
    },
    success:function(data){
      console.log(data);
    }
  })
  }
  $jai = setInterval(getAllonlineInspector(), 3000);
  
});