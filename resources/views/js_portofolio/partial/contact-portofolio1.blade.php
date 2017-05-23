<!-- contact -->
<div class="contact" id="contact">
	<div class="container">
	<span class="about-top-w3">Send me a message</span>
		<h4 class="title-w3ls">Contact Me</h4>
		<div class="col-md-5 contact-agileits-w3layouts">
		<form action="#" method="POST">

			{{csrf_field()}}

			<input type="hidden" name="jobseekerid" value="{{$jid}}" id="jobseekerid">
			<input type="text" name="Your Name" placeholder="Name" id="sendername" />
			<input type="email" name="Your Email" placeholder="Email" id="senderemail" />
			<input type="text" Name="Phone Number" placeholder="Number" id="number" />
			<textarea name="Message" placeholder="Message" id="message" ></textarea>
			<input type="submit" value="Submit" id="submit">
		</form>






			<h5 class="sub">Looking for Address</h5>
			<p><span>Location</span> : 345 Setwant natrer,Washington,US.</p>
			<p><span>Phone</span> : +33 892 35 35 35</p>
			<p><span>Email</span><a href="mailto:example@mail.com"> : mail@example.com</a></p>
		</div>


		<div class="col-md-7 contact-map-right">
		<div id="map"></div>

			<!-- Map-JavaScript -->
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>        
			<script type="text/javascript">

				google.maps.event.addDomListener(window, 'load', init);
				function init() {
					var mapOptions = {
						zoom: 11,
						center: new google.maps.LatLng(40.6700, -73.9400),
						styles: [{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#000000"},{"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#000000"},{"lightness":16}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":17},{"weight":1.2}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":21}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":16}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":19}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":17}]}]
					};
					var mapElement = document.getElementById('map');
					var map = new google.maps.Map(mapElement, mapOptions);
					var marker = new google.maps.Marker({
						position: new google.maps.LatLng(40.6700, -73.9400),
						map: map,
					});
				}

				$(document).ready(function(){
					$.ajaxSetup({
				        headers: {
				            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				        }
					});
					$('#submit').on('click',function(e){
						e.preventDefault();
						var jobseekerid = $('#jobseekerid').val();
						var sendername = $('#sendername').val();
						var senderemail = $('#senderemail').val();
						var number = $('#number').val();
						var message = $('#message').val();
						$.ajax({
							url: '/jobseeker/porto/contact',
							type: 'POST',
							data: {
								action:'ajax',
								jobseekerid: jobseekerid,
								sendername:sendername,
								senderemail:senderemail,
								number:number,
								message:message
							},
							success:function(data){
								console.log(data);
							}
						})
						
					});
					
				});

			</script>
		<!-- //Map-JavaScript -->

		</div>
	</div>
</div>
<!-- //about -->