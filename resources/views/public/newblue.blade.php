<!DOCTYPE html>
<html>
	<head>
		<title>Basic Website</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="https://fonts.googleapis.com/css?family=Domine|Eagle+Lake|Lobster+Two" rel="stylesheet">
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		{{Html::style('newBlueAssets/style.css')}}
		
		<style>
			
			
			
		</style>
	</head>
	<body>
		
		
		<!--NABBAR SECTION START-->
		
		@include('public.newBluePartial.nav')
		
		<!--NABBAR SECTION END-->
		
		
		@include('public.newBluePartial.slider')
		
		
		
		<div class="container">			
			<div class="row">
				<div class="col-md-12">
					<hr>
				</div>
				
				<!--Functional AND Industrial CATEGORY SECTION START-->	
				<div class="col-md-8 well">
					<ul class="nav nav-tabs">
						<li class="active"><a data-toggle="tab" href="#home">Functional</a></li>
						<li><a data-toggle="tab" href="#menu1">Industrial</a></li>						
					</ul>					
					<div class="tab-content">
						<div id="home" class="tab-pane fade in active">
							<h3 style="font-family: 'Domine', serif;"><i class="fa fa-list-ul" aria-hidden="true"></i> BROWSE CATEGORY</h3>
							<div class="col-md-4 col-lg-4" style="padding:0;font-family: 'Domine', serif;">
								<ul style="list-style:none">
									<li><a target="_blank" href="" title="Accounting/Finance"><i class="fa fa-angle-right" aria-hidden="true"></i> Accounting/Finance <span>(5)</span></a></li>
									<li><a target="_blank" href="" title="Bank/ Non-Bank Fin. Institution"><i class="fa fa-angle-right"></i> Bank/ Non-Bank Fin. Institution <span>(5)</span></a></li>
									<li><a target="_blank" href="" title="Commercial/Supply Chain"><i class="fa fa-angle-right"></i> Commercial/Supply Chain <span>(5)</span></a></li>
									<li><a target="_blank" href="" title="Education/Training"><i class="fa fa-angle-right"></i> Education/Training <span>(5)</span></a></li>
									<li><a target="_blank" href="" title="Engineer/Architects"><i class="fa fa-angle-right"></i> Engineer/Architects <span>(5)</span></a></li>
									<li><a target="_blank" href="" title="Garments/Textile"><i class="fa fa-angle-right"></i> Garments/Textile <span>(5)</span></a></li>
									<li><a target="_blank" href="" title="HR/Org. Development"><i class="fa fa-angle-right"></i> HR/Org. Development <span>(5)</span></a></li>
									<li><a target="_blank" href="" title="Gen Mgt/Admin"><i class="fa fa-angle-right"></i> Gen Mgt/Admin <span>(5)</span></a></li>
									<li><a target="_blank" href="" title="Design/Creative"><i class="fa fa-angle-right"></i> Design/Creative <span>(5)</span></a></li>
								</ul>
							</div>							
							
						</div>
					</div>
				</div>
				<!--Functional AND Industrial CATEGORY SECTION END-->
				<!--Govt Jobs SLIDER SECTION START-->
				<div class="col-md-4" style="height:390px;">
					<h4 style="font-family: 'Eagle Lake', cursive;">Govt Jobs</h4>
					<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner" role="listbox">
							<div class="item active">
								<div class="govt-job-list">
									<ul style="list-style:none">
										<li><a target="_blank" href=""><span class="" title="">মৎস্য অধিদপ্তর<span class="">...</span></span><span class="" title="অফিস সহকারী কাম-কম্পিউটার মুদ্রাক্ষরিক" style="position: relative;">অফিস সহকারী কাম-কম্পিউটার মুদ্রাক্ষরিক</span></a></li>
										<li><a target="_blank" href=""><span class="" title="কন্ট্রোলার জেনারেল ডিফেন্স ফাইন্যান্স এর কার্যালয়" style="position: relative;">কন্ট্রোলার জেনারেল ডিফেন্স ফাইন্যান্স এর কার্যালয়<span class="">...</span></span><span class="des-bn" title="">অডিটর</span></a></li>
										<li><a target="_blank" href=""><span class="" title="কন্ট্রোলার জেনারেল ডিফেন্স ফাইন্যান্স এর কার্যালয়" style="position: relative;">কন্ট্রোলার জেনারেল ডিফেন্স ফাইন্যান্স এর কার্যালয়<span class="">...</span></span><span class="des-bn" title="জুনিয়র অডিটর (এলডিএ-কাম-টাইপিস্ট)" style="position: relative;">জুনিয়র অডিটর (এলডিএ-কাম-টাইপিস্ট)<span class="des-bn dots">...</span></span></a></li>
										<li><a target="_blank" href=""><span class="" title="">বেলকুচি পৌরসভা কার্যালয়<span class="">...</span></span><span class="" title="">স্বাস্থ্য সহকারী</span></a></li>
										<li><a target="_blank" href=""><span class="" title="চট্টগ্রাম মেট্রোপলিটন পুলিশ হেডকোয়ার্টার্স" style="position: relative;">চট্টগ্রাম মেট্রোপলিটন পুলিশ হেডকোয়ার্টার্স<span class="">...</span></span><span class="
										" title="">মেকানিক্যাল এসিসটেন্ট</span></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<a target="_blank" href="" class="btn btn-view-more no-border">View All (456)</a>
					<nav>
						<ul class="control-box pager"><li><a data-slide="prev" href="#carousel-example-generic"><i class="fa fa-angle-left"></i></a></li><li><a data-slide="next" href="#carousel-example-generic"><i class="fa fa-angle-right"></i></a></li></ul>
					</nav>
				</div>
				<!--Govt Jobs SLIDER SECTION END-->
				
				<div class="col-md-12">
					<hr>
				</div>
				<!--SPECIAL SKILLED JOBS SECTION START-->
				<div class="col-md-12 bg-success">
					<h4 class="" style="font-family: 'Eagle Lake', cursive;"><i class="fa fa-user-md" aria-hidden="true"></i>স্পেশাল স্কিল্‌ড জব্‌স</h4>
					<div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
						<ul style="list-style:none;">
							<li><a target="_blank" href="" title="ডাটা এন্ট্রি/ কম্পিউটার অপারেটর"><i class="fa fa-angle-right"></i> ডাটা এন্ট্রি/কম্পিউটার অপারেটর <span>(৬৮)</span></a></li>
							<li><a target="_blank" href="" title="মেকানিক/ টেকনিশিয়ান "><i class="fa fa-angle-right"></i>মেকানিক/টেকনিশিয়ান  <span>(৪১)</span></a></li>
							<li><a target="_blank" href="" title=" নার্স "><i class="fa fa-angle-right"></i> নার্স <span>(১১)</span></a></li>
							<li class=""><a target="_blank" href="" title="হাউজকিপার"><i class="fa fa-angle-right"></i> হাউজকিপার <span>(১)</span></a></li>
							
							
							
							
						</ul>
					</div>
					
				</div>
				<!--SPECIAL SKILLED JOBS SECTION END-->
				<div class="col-md-12">
					<hr>
				</div>
				
				<!--HOT JOBS SECTION START-->
				<div class="col-md-12" style="font-family: 'Domine', serif;">
					<h4 class="" style="font-family: 'Eagle Lake', cursive;"><i class="fa fa-empire" aria-hidden="true"></i><span class="text-danger">Hot</span> Jobs</h4>
					<div class="col-md-9 li-w">
						<div class="row">

							<div class="col-md-4 col-sm-4 col-xs-12 box-boder">
								<div class="row">
									<div class="col-md-3 pad1">
										{{Html::image('newBlueAssets/img/beol48.jpg','Bangladesh',array('title'=>"Bangladesh Edible Oil Limited"))}}											
									</div>
									<div class="col-md-9 pl">										
										<h5>Bangladesh Edible Oil Limited</h5>											
									</div>
									<div class="col-md-12">
										<ul class="disply">
											<li><a href="" target="_blank" title="Senior Manager, Communications &amp; Marketing">Senior Manager, Communications &amp; Marketing</a></li>
											<li><a href="" target="_blank" title="Senior Manager, Communications &amp; Marketing">Senior Manager, Communications &amp; Marketing</a></li>
											<li><a href="" target="_blank" title="Senior Manager, Communications &amp; Marketing">Senior Manager, Communications &amp; Marketing</a></li>
											
											
										</ul>
									</div>
								</div>
							</div>

						</div>
						<div class="row">

							<div class="col-md-4 col-sm-4 col-xs-12 box-boder">
								<div class="row">										
									<div class="col-md-3 pad1">										
										{{Html::image('newBlueAssets/img/jamespbrac48.jpg','James',array('title'=>"James P Grant School of Public Health (JPGSPH)"))}}
									</div>
									<div class="col-md-9">											
										<h5>James P Grant School of Public Health (JPGSPH)</h5>
																						
									</div>
									<div class="col-md-12">
										<ul class="disply">
											<li><a href="" target="_blank" title="Senior Manager, Communications &amp; Marketing">Senior Manager, Communications &amp; Marketing</a></li>
											<li><a href="" target="_blank" title="Senior Manager, Communications &amp; Marketing">Senior Manager, Communications &amp; Marketing</a></li>
											<li><a href="" target="_blank" title="Senior Manager, Communications &amp; Marketing">Senior Manager, Communications &amp; Marketing</a></li>
										</ul>
									</div>
								</div>
							</div>

						</div>
						<div class="row">

							<div class="col-md-4 col-sm-4 col-xs-12 box-boder">
								<div class="row">
									<div class="col-md-3 pad1">
									{{Html::image('newBlueAssets/img/generalpharma48.jpg','General Pharmaceuticals',array('title'=>"General Pharmaceuticals Ltd."))}}
									</div>
									<div class="col-md-9">
										<h5>General Pharmaceuticals Ltd.</h5>
										
									</div>
									<div class="col-md-12">
										<ul class="disply">
											<li><a href="" target="_blank" title="Senior Manager, Communications &amp; Marketing">Senior Manager, Communications &amp; Marketing</a></li>
											<li><a href="" target="_blank" title="Senior Manager, Communications &amp; Marketing">Senior Manager, Communications &amp; Marketing</a></li>
											<li><a href="" target="_blank" title="Senior Manager, Communications &amp; Marketing">Senior Manager, Communications &amp; Marketing</a></li>
											
											
										</ul>
									</div>
								</div>
							</div>

						</div>
					</div>
					
					<!--ADD SIDEBAR SECTION START-->
					<div class="col-md-3">
						<div class="">
							<a href="" target="_blank">{{Html::image('newBlueAssets/img/armyhome.gif')}}</a>
						</div>
						<hr>
						<div class="">
							<a href="" target="_blank">{{Html::image('newBlueAssets/img/BAT.png')}}</a>
						</div>
						<hr>
						<div class="">
							<a href="" title="Click here to visit GrameenPhone Ad" target="_blank">{{Html::image('newBlueAssets/img/260x80_GP-Logo.jpg')}}</a>
						</div>
					</div>
					<!--ADD SIDEBAR SECTION END-->	
					
				</div>
				
				<!--HOT JOBS SECTION END-->
				
				<div class="col-md-12">
					<hr>
				</div>
				
				<!--TENDER/EOI SECTION START-->
				<div class="col-md-12" style="font-family: 'Domine', serif;">
					<h4 class="" style="font-family: 'Eagle Lake', cursive;"><i class="fa fa-briefcase"></i>&nbsp;Tender/ Eoi</h4>
					<div class="row">


						<div class="col-md-4 box-boder col-sm-12 col-xs-12">
							<div class="tender-card" style="height: 105px;">
								<div class="row">
									<div class="col-md-3 pad1">
									{{Html::image('newBlueAssets/img/junction48.png',null,array('title'=>"Junction Bangladesh Limited"))}}
									</div>
									<div class="col-md-9"><h5 class="">Junction Bangladesh Limited</h5><a href="" target="_blank" title="Entrepreneurship Research Fellowship" class=""> <i class="fa fa-caret-right" aria-hidden="true"></i> Entrepreneurship Research Fellowship</a>
									</div>
								</div>
							</div>
						</div>

					</div>
					<div class="row">


						<div class="col-md-4 box-boder col-sm-12 col-xs-12">
							<div class="" style="height: 120px;">
								<div class="row">
									<div class="col-md-3 pad1">
									{{Html::image('newBlueAssets/img/msh48.jpg',null,array('title'=>"Management Sciences for Health (MSH)"))}}
									</div>
									<div class="col-md-9">
										<h5 class="">Management Sciences for Health (MSH)</h5><a href="" target="_blank" title="RFQ - MIS Consultant under Outsource Service Contract (SIAPS Project)" class=""> <i class="fa fa-caret-right" aria-hidden="true"></i> RFQ - MIS Consultant under Outsource Service Contract (SIAPS...</a>
									</div>
								</div>
							</div>
						</div>

					</div>
					<div class="row">


						<div class="col-md-4 box-boder col-sm-12 col-xs-12">
							<div class="" style="height: 105px;">
								<div class="row">
									<div class="col-md-3 pad1">
											{{Html::image('newBlueAssets/img/helennew48.jpg',null,array('title'=>"Helen Keller International (HKI)"))}}
									</div>
									<div class="col-md-9">
										<h5 class="">Helen Keller International (HKI)</h5><a href="" target="_blank" title="TOT on Microenterprise Development  " class=""> <i class="fa fa-caret-right" aria-hidden="true"></i> TOT on Microenterprise Development  </a>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
				<!--TENDER/EOI SECTION END-->
				<div class="col-md-12">
					<hr>
				</div>
			</div>
			
		</div>
		
		
		
		<!--2ND SLIDER START-->
		<div class="container-fluid bg-primary">
            <div class="row">
				<div id="promotional-carousal" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner text-center pad" role="listbox">
						<div class="item people">
							<h2 style="font-family: 'Domine', serif;">Join the Largest Job Site of Bangladesh</h2>
							<p style="font-family: 'Domine', serif;">
								Be a member of a family of more than one million job seekers<br> and apply to any of the 3000+ live jobs
							</p>
							<a href=""  class="btn btn-success btn-sign-up">Sign Up</a>
						</div>
						<div class="item android-app">
							<h2 style="font-family: 'Domine', serif;">Download Idb-Jobportal.com Android App</h2>
							<p style="font-family: 'Domine', serif;">
								Never miss a single opportunity. Search and apply on the go<br> and get the perfect job for you.
							</p>
							<a href="" class="btn btn-success btn-sign-up">Download Now</a>
						</div>
						<div class="item mybdjobs">
							<h2 style="font-family: 'Domine', serif;">Customize Everything</h2>
							<p style="font-family: 'Domine', serif;">
								Customize your profile, job preference and everything<br> to get the better job in shorter time.
							</p>
							<a href="" class="btn btn-success btn-sign-up">My Idb-Jobportal</a>
						</div>
						<div class="item training active">
							<h2 style="font-family: 'Domine', serif;">Develop Yourself for better career</h2>
							<p style="font-family: 'Domine', serif;">
								Get relevant trainings and develop yourself as a keen professional<br> to stand out in this competitive job market. 
							</p>
							<a href="" class="btn btn-success btn-sign-up">Visit Idb-Jobportal Training</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--2ND SLIDER END-->
		<div class="col-md-12">
			<hr>
		</div>
		<!--FOOTER SECTION START-->
			@include('public.newBluePartial.footer')
		<!--FOOTER SECTION END-->
		
		<!--ALL MODAL HERE **START**-->

		
		<!--ALL MODAL HERE **END**-->
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script>
			$(document).ready(function(){
				alert(5);

				//alert("ok");
				$('.elm').mouseenter(
				   function(){ $(this).addClass('fa-spin') },
			)
				$('.elm').mouseleave(
				   function(){ $(this).removeClass('fa-spin') },
			)
			
			$('.box-boder').hover(
			  function () {
				$(this).find('.disply').addClass('indx');
				$(this).find('.disply').show();
			  }, 
			  function () {
				$('.disply').hide();
			  }
			);
			
			});
		</script>
		<script>
			$('.counter').each(function(){
				$(this).prop('Counter',0).animate({
					Counter: $(this).text()
					}, {
					duration:2500,
					easing:'swing',
					step: function(now){
						$(this).text(Math.ceil(now));
					}
				});
			});
		</script>
		<script>
			$(document).ready(function(){

/**
 * This object controls the nav bar. Implement the add and remove
 * action over the elements of the nav bar that we want to change.
 *
 * 
 */
var myNavBar = {

    flagAdd: true,

    elements: [],

    init: function (elements) {
        this.elements = elements;
    },

    add : function() {
        if(this.flagAdd) {
            for(var i=0; i < this.elements.length; i++) {
                document.getElementById(this.elements[i]).className += " fixed-theme";
            }
            this.flagAdd = false;
        }
    },

    remove: function() {
        for(var i=0; i < this.elements.length; i++) {
            document.getElementById(this.elements[i]).className =
                    document.getElementById(this.elements[i]).className.replace( /(?:^|\s)fixed-theme(?!\S)/g , '' );
        }
        this.flagAdd = true;
    }

};

/**
 * Init the object. Pass the object the array of elements
 * that we want to change when the scroll goes down
 */
myNavBar.init(  [
    "header",
    "header-container",
    "brand"
]);

/**
 * Function that manage the direction
 * of the scroll
 */
function offSetManager(){

    var yOffset = 0;
    var currYOffSet = window.pageYOffset;

    if(yOffset < currYOffSet) {
        myNavBar.add();
    }
    else if(currYOffSet == yOffset){
        myNavBar.remove();
    }

}

/**
 * bind to the document scroll detection
 */
window.onscroll = function(e) {
    offSetManager();
}

/**
 * We have to do a first detectation of offset because the page
 * could be load with scroll down set.
 */
offSetManager();
});
							</script>
						</body>
					</html>					