;(function() {
  //http://glide.jedrzejchalubek.com/

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
      console.log(data.index);

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
