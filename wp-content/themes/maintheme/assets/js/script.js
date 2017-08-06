jQuery(document).ready(function(){
  var menu = $('#mobileMenu');

  // Show and hidde mobile menu
  $('#nav-icon1').click(function(){
    $(this).toggleClass('open');
    menu.toggleClass('active');
  });

  // Prevent default on projects images in "About us" section
  $('.projectContainer a').click(function(event){
    event.preventDefault();
  });

  // Card functions
  $('.post-module').hover(function(){
    $(this).toggleClass('hover');
  });
});


  // Slideshow 1
  jQuery(function($) {
    $("#slider1").responsiveSlides({
        maxwidth: 500,
        speed: 2000
      });
    $("#slider2").responsiveSlides({
        maxwidth: 500,
        speed: 2000
      });
});