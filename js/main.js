jQuery(document).ready(function($){

  // Hero Slider
  $('.flexslider').flexslider({
    animation: "fade"
  });


  // Sticky Header animation
  $(window).on('scroll touchmove', function () {
    $('.site-header').toggleClass('scrolled', $(document).scrollTop() > 100);
  }).scroll();
});
