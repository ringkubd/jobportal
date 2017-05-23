$(document).ready(function() {	
  $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
	});
  function employer(){
  	$.ajax({
  	url: '/public/statastics',
  	type: 'GET',
  	data: {
  		request: 'AJAX',
  		action:'employer'
  	},
  	success:function(data){
  		$('#totalemployer').text(data);
  		//$('#totalemployer').load(location.href+' #totalemployer');
  	}
  })
  }
  var menuRefresh = setInterval(function(){ employer() }, 2000);

  function jobseeker(){
  	$.ajax({
  	url: '/public/statastics',
  	type: 'GET',
  	data: {
  		request: 'AJAX',
  		action:'jobseeker'
  	},
  	success:function(data){
  		$('#totaljobseeker').text(data);
  		//$('#totaljobseeker').load(location.href+' #totaljobseeker');
  	}
  })
  }
setInterval(function(){ jobseeker() }, 2000);

  function job(){
  	$.ajax({
  	url: '/public/statastics',
  	type: 'GET',
  	data: {
  		request: 'AJAX',
  		action:'job'
  	},
  	success:function(data){
  		$('#totaljob').text(data);
  		//$('#totaljobseeker').load(location.href+' #totaljobseeker');
  	}
  })
  }
setInterval(function(){ job() }, 2000);

  // get all online inspector
  function getAllonlineJobseeker(){
    $.ajax({
    url: '/getAllonlineUser',
    type: 'GET',
    data: {
      ajax: 'AJAX',
      action:'jobseeker'
    },
    success:function(data){
      $('#jobseekeronline').text(data);
    }
  })
  }
  setInterval(function(){ getAllonlineJobseeker() }, 2000);




});