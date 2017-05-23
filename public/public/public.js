$(document).ready(function(){

$("input:checkbox").click(
            function()
            {
               
                
                    $("#filterform").submit();
             
            }
        )

$("#shortby").change(
            function()
            {
              
               
                    $("#filterform").submit();
                
            }
        )
$(document).on('click','.rsubmit',function(){

$('#relatedform').submit();

})

})