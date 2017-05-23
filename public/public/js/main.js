$(window).load(function() { // makes sure the whole site is loaded
      $('#status').fadeOut(); // will first fade out the loading animation
      $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
      $('body').delay(350).css({'overflow':'visible'});
    })

$(document).ready(function() {
 
  $("#bg-slider").owlCarousel({
      navigation : false, // Show next and prev buttons
      slideSpeed : 100,
      autoPlay: 5000,
      paginationSpeed : 100,
      singleItem:true,
      mouseDrag: false,
      transitionStyle : "fade"
 
      // "singleItem:true" is a shortcut for:
      // items : 1, 
      // itemsDesktop : false,
      // itemsDesktopSmall : false,
      // itemsTablet: false,
      // itemsMobile : false 
  });

  $("#testimonial-slider").owlCarousel({
      navigation : false, // Show next and prev buttons
      slideSpeed : 100,
      pagination : true,
      paginationSpeed : 100,
      singleItem:true,
      mouseDrag: false,
      transitionStyle : "goDown"
 
      // "singleItem:true" is a shortcut for:
      // items : 1, 
      // itemsDesktop : false,
      // itemsDesktopSmall : false,
      // itemsTablet: false,
      // itemsMobile : false 
  });

    $('.more-jobs a').click(function(e){
      e.preventDefault();
      var $this = $(this);
      $this.toggleClass('more-jobs a');
      if($this.hasClass('more-jobs a')){
        $this.text('View less jobs');     
      } else {
        $this.text('View more jobs');
      }
    });

    $('.more-jobs a').click(function(){
      $('.table tr.hide-jobs').toggle();
    });


 
})

// Initializing WOW.JS

 new WOW().init();