jQuery(document).ready(function($){

  $('.service').first().addClass('active');

  // ScrollTo navigation
  $(document).on("scroll", onScroll);

    $('a[href^="#"]').on('click', function (e) {
      e.preventDefault();
      $(document).off("scroll");

      $('a').each(function () {
        $(this).removeClass('active');
      })

      $(this).addClass('active');

      var target = this.hash;
      $target = $(target);

      $('html, body').stop().animate({
        'scrollTop': $target.offset().top+2
      }, 500, 'swing', function () {
        window.location.hash = target;
        $(document).on("scroll", onScroll);
      });
    });

    function onScroll(event){
      var scrollPosition = $(document).scrollTop();
      $('nav a').each(function () {
        var currentLink = $(this),
            menu = $('.main-navigation .menu'),
            refElement = $(currentLink.attr("href")),
            refElementId = refElement.attr('id');

        if (refElement.position().top - 100 <= scrollPosition && refElement.position().top + refElement.height() > scrollPosition) {
          $('nav ul li').removeClass("active");
          currentLink.parent('li').addClass("active");
          //menu.addClass();
        }
        else{
          currentLink.parent('li').removeClass("active");
        }
      });
    }

  // Hero Slider
  $('.flexslider').flexslider({ animation: "fade" });



  // Contact form
  $("#contact-form").submit(function(event) {
      /* stop form from submitting normally */
      event.preventDefault();

      /* get some values from elements on the page: */
      var $form = $( this ),
          $submit = $form.find( 'button[type="submit"]' ),
          name_value = $form.find( 'input[name="name"]' ).val(),
          email_value = $form.find( 'input[name="email"]' ).val(),
          message_value = $form.find( 'textarea[name="message"]' ).val(),
          url = $form.attr('action');

      /* Send the data using post */
      var posting = $.post( url, {
          name: name_value,
          email: email_value,
          message: message_value
      });

      posting.done(function( data ) {
        /* Put the results in a div */
        $( "#contactResponse" ).html(data);

        /* Change the button text. */
        $submit.text('MESSAGE SENT');

        /* Disable the button. */
        $submit.attr("disabled", true);
      });
 });


  // Sticky Header animation
  $(window).on('scroll touchmove', function () {
    $('.site-header').toggleClass('scrolled', $(document).scrollTop() > 100);
  }).scroll();


  // Fancy Input labels
  // https://github.com/ENFOS/FlowupLabels.js?files=1
  $('.FlowupLabels').FlowupLabels();

  // Mobile navigation
	var menuOpen = false,
		  mainNav = $('.main-navigation'),
		  menuButton = $('.menu-btn'),
  		closeNav = function(){
				menuButton.removeClass('active');
				mainNav.removeClass('active');
        mainNav.find('li').removeClass('anim');
				menuOpen = false;
  		},
  		menuBtnFn = function(){
				menuButton.bind( 'touchstart, click', function(event){
					event.stopPropagation();
					event.preventDefault();

					if (menuOpen) {
						closeNav();
					} else {
						mainNav.addClass('active');
						$(this).addClass('active');

            mainNav.find('li').each(function(i) {
              var $el = $(this);
              setTimeout(function() {
                $el.addClass('anim');
              }, i * 33);
            });
						menuOpen = true;
					}
				});
  		};

  	menuBtnFn();

    $('.main-navigation').find('a').on('click', function(){
      closeNav();
    });



    (function() {
    	var mails = document.querySelectorAll('[data-mail-user][data-mail-domain]');

      Array.prototype.forEach.call(mails, function(el) {
      	var user    = el.dataset.mailUser;
        var domain  = el.dataset.mailDomain;
        var pattern =  user + '@' + domain;

    		el.textContent = pattern;

        if(el.getAttribute('href'))
        	el.setAttribute('href', 'mailto:' + pattern);
    	});
    }());
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
  var ibg4 = TweenMax.to('.image-4 .p-background', 1, { top: -40, ease: Linear.easeNone});
  var ifg4 = TweenMax.to('.image-4 .p-foreground', 1, { top: -70, ease: Linear.easeNone});

  var scene1 = new ScrollMagic.Scene({triggerElement: "#target1", duration: 900})
      .setTween(ibg1)
      .addTo(controller);

  var scene2 = new ScrollMagic.Scene({triggerElement: "#target1", duration: 900})
      .setTween(ifg1)
      .addTo(controller);

  var scene3 = new ScrollMagic.Scene({triggerElement: "#target2", duration: 750})
      .setTween(ibg2)
      .addTo(controller);

  var scene4 = new ScrollMagic.Scene({triggerElement: "#target2", duration: 750})
      .setTween(ifg2)
      .addTo(controller);

  var scene5 = new ScrollMagic.Scene({triggerElement: "#target3", duration: 800})
      .setTween(ibg3)
      .addTo(controller);

  var scene6 = new ScrollMagic.Scene({triggerElement: "#target3", duration: 800})
      .setTween(ifg3)
      .addTo(controller);

  var scene7 = new ScrollMagic.Scene({triggerElement: "#target4", duration: 1000})
      .setTween(ibg4)
      .addTo(controller);

  var scene8 = new ScrollMagic.Scene({triggerElement: "#target4", duration: 1000})
      .setTween(ifg4)
      .addTo(controller);

  //var scene3 = new ScrollMagic.Scene({triggerElement: "#target2", duration: 500})
  //    .setTween(".text.first", {top: -375})
  //    .addTo(controller);

});


// Fancy Labels + Gallery + Test Stuff
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



  // Glide Slider
  //http://glide.jedrzejchalubek.com/
  ;(function() {

  	function widthChanged(mq) {
  		if (mq.matches) slider.glide($.extend(options, {}));
  		else slider.glide(options);
  	}

  	function coverflow(data) {
  		data.current.removeClass('pre following')
  			.nextAll()
  				.removeClass('pre following')
  				.addClass('following')
  			.end()
  			.prevAll()
  				.removeClass('pre following')
  				.addClass('pre');
  	}

  	var slider = $('#carousel');
  	var options = {
  		type: 'carousel',
  		startAt: 1,
  		autoplay: 5000,
  		hoverpause: true,
  		animationDuration: 500,
  		afterInit: function (data) {
  			coverflow(data);
  		},
      beforeTransition: function(){
        $('.slider-copy .slider-wrap .service').removeClass('active');
      },
  		afterTransition: function (data) {
  			coverflow(data);
        //console.log(data.index);

        $(".slider-copy .slider-wrap").find("[data-slide='" + data.index + "']").addClass('active');

  		}
  	};

  	// media query event handler
  	if (matchMedia) {
  		var mq = window.matchMedia("(max-width: 768px)");
  		mq.addListener(widthChanged);
  		widthChanged(mq);
  	} else {
  		slider.glide(options);
  	}

  	$(window).load(function() {
  		setTimeout(function () {
  			slider.removeClass('is-loading').addClass('is-visible');
  		}, 100);
  	});
  })();


  // trigger scroll and resize functions
  $(window).trigger('scroll', 'resize');
})( jQuery );
