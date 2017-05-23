$(document).ready(function() {	
	  $.ajaxSetup({
	        headers: {
	            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	        }
		});
	  $(document).on('submit','#uploadCv',function(event){
	  	event.preventDefault();
	  	var url = "/jobseeker/cvUpload";
	  	$.ajax({
	  		url: url,
	  		type: 'POST',
	  		data: new FormData(this),
	  		contentType:false,
    		processData:false,
	  		success:function(returnData){
  				console.log(returnData);
	  		}
	  	})
	  	
	  	
	  });
	  $('#uploadCvbtn').addClass('disabled');
	  $(document).on('change','#inputCv',function(){
	  	var file = $('#inputCv').val();
	  	var fileExtention = file.split('.').pop();
	  	//console.log($fileExtention);
	  	if(fileExtention =="doc" || fileExtention =="pdf"){
	  		$('#uploadCvbtn').removeClass('disabled');
	  		if (fileExtention =="pdf") {
	  			$("#preview2").attr('src','/icon-img/file_pdf.png');
	  		}else{
	  			$("#preview2").attr('src','/icon-img/file_doc.png');
	  		}
	  	}else{
	  		$('#uploadCvbtn').addClass('disabled');
	  		alert('Your file is not ".pdf"/".doc"');
	  	}
	  });
});