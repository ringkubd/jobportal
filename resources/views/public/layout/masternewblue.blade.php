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
		
		
		@include('public.newBluePartial.nav')

		<div class="container">


		@include('public.newBluePartial.search')


		@yield('content')
		
		</div>
		</div>
		
		<!--FOOTER SECTION START-->
			@include('public.newBluePartial.footer')
		<!--FOOTER SECTION END-->
		
		<!--ALL MODAL HERE **START**-->

		
		<!--ALL MODAL HERE **END**-->
		
		<script src="{{ asset('js/jquery-3.2.1.min.js')}}"></script>
		<script src="{{ asset('public/js/bootstrap.min.js')}}"></script>
		<script src="{{ asset('public/public.js')}}"></script>
		<script>
			$(document).ready(function(){
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