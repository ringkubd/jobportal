@extends('dashboard.layout.dashboard_layout')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-lg-offset-2 col-lg-8">
			<h1 class="text-center">Industry Type</h1>
			{{Form::open(array('url' => 'foo/bar', 'method' => 'PUT'))}}
				
				{{Form::hidden('name',url('locate') , array('class' => 'name', "id"=>"id"))}}
				{{Form::select('name', isset($countries)? $countries:[0=>0], 'key', array('class' => 'name','id'=>"country"))}}
				<select class="division">
					<option value="0" disabled="true" selected="true">Division Names</option>
				</select>
				<select class="district">
					<option value="0" disabled="true" selected="true">District Names</option>
				</select>
				{{Form::select('name', array('key' => 'value'), 'key', array('class' => 'name',"id"=>"district"))}}
				{{Form::select('name', array('key' => 'value'), 'key', array('class' => 'name', "id"=>"area"))}}


			{{Form::close()}}

			<script type="text/javascript">
				$(document).ready(function() {

						$.ajaxSetup({
	        headers: {
	            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	        }
		});

				// function getCountry(){
				// 	var url = $('#id').val();
				// 	$.ajax({
				// 		url: url,
				// 		type: 'get',
				// 		data: {action: 'country'},
				// 		success:function(d){
				// 			console.log(d);
				// 		}
				// 	})
					
					
				// }
				//  getCountry();
		$(document).on('change','#country',function(){
     var url = $('#id').val();
   var cid=$(this).val();
    $.ajax({
						url: url,
						type: 'get',
						data: {action: 'division'},
						success:function(d){
							$('#division').val(d);
							console.log(d);
						}
					})

		})		 
		
				
				});
			</script>

</div>
	</div>
</div>
	{{csrf_field()}}
	@endsection