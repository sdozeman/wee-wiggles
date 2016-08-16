jQuery(document).ready(function($){

  // Hero Slider
  $('.flexslider').flexslider({
    animation: "fade"
  });


  // Sticky Header animation
  $(window).on('scroll touchmove', function () {
    $('.site-header').toggleClass('scrolled', $(document).scrollTop() > 100);
  }).scroll();


  // Fancy Input labels
  // https://github.com/ENFOS/FlowupLabels.js?files=1
  $('.FlowupLabels').FlowupLabels();
});


// Scroll Magic
jQuery(function(){
  var controller = new ScrollMagic.Controller();

  var ibg1 = TweenMax.to('.image-1 .p-background', 1, { top: 0, ease: Linear.easeNone});
  var ifg1 = TweenMax.to('.image-1 .p-foreground', 1, { top: 0, ease: Linear.easeNone});
  var ibg2 = TweenMax.to('.image-2 .p-background', 1, { top: 60, ease: Linear.easeNone});
  var ifg2 = TweenMax.to('.image-2 .p-foreground', 1, { top: -60, ease: Linear.easeNone});
  var ibg3 = TweenMax.to('.image-3 .p-background', 1, { top: 80, ease: Linear.easeNone});
  var ifg3 = TweenMax.to('.image-3 .p-foreground', 1, { top: -10, ease: Linear.easeNone});

  var scene1 = new ScrollMagic.Scene({triggerElement: "#target1", duration: 750})
      .setTween(ibg1)
      .addTo(controller);

  var scene1 = new ScrollMagic.Scene({triggerElement: "#target1", duration: 750})
      .setTween(ifg1)
      .addTo(controller);

  var scene1 = new ScrollMagic.Scene({triggerElement: "#target2", duration: 750})
      .setTween(ibg2)
      .addTo(controller);

  var scene1 = new ScrollMagic.Scene({triggerElement: "#target2", duration: 750})
      .setTween(ifg2)
      .addTo(controller);

  var scene1 = new ScrollMagic.Scene({triggerElement: "#target3", duration: 750})
      .setTween(ibg3)
      .addTo(controller);

  var scene1 = new ScrollMagic.Scene({triggerElement: "#target3", duration: 750})
      .setTween(ifg3)
      .addTo(controller);

  //var scene3 = new ScrollMagic.Scene({triggerElement: "#target2", duration: 500})
  //    .setTween(".text.first", {top: -375})
  //    .addTo(controller);

});


// Fancy Labels
(function($) {
	$.fn.FlowupLabels = function( options ){

		var defaults = {
        		// Useful if you pre-fill input fields or if localstorage/sessionstorage is used.
				feature_onLoadInit:	true,
				// Class names used for focus and populated statuses
				class_focused: 		'focused',
				class_populated: 	'populated'
			},
			settings = $.extend({}, defaults, options);


		return this.each(function(){
			var $scope  = $(this);

			$scope.on('focus.flowupLabelsEvt', '.fl_input', function() {
				$(this).closest('.fl_wrap').addClass(settings.class_focused);
			})
			.on('blur.flowupLabelsEvt', '.fl_input', function() {
				var $this = $(this);

				if ($this.val().length) {
					$this.closest('.fl_wrap')
						.addClass(settings.class_populated)
						.removeClass(settings.class_focused);
				}
				else {
					$this.closest('.fl_wrap')
						.removeClass(settings.class_populated + ' ' + settings.class_focused);
				}
			});


			// On page load, make sure it looks good
			if (settings.feature_onLoadInit) {
				$scope.find('.fl_input').trigger('blur.flowupLabelsEvt');
			}
		});
	};

  // Scroll Stuff
  $(window).scroll(function(){
    $("#test").html($(window).scrollTop());
  });


  // on resize functions
  $(window).resize(function(){});

  // trigger scroll and resize functions
  $(window).trigger('scroll', 'resize');
})( jQuery );
