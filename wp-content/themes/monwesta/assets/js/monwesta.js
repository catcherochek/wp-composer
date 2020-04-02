 
(function ($)
    { "use strict"


		/* 7.  Custom Sticky Menu  */
		$(window).on('scroll', function () {
		  var scroll = $(window).scrollTop();
		  if (scroll < 245) {
			$(".menu-wrapper-block").removeClass("sticky-bar");
		  } else {
			$(".menu-wrapper-block").addClass("sticky-bar");
		  }
		});

		$(window).on('scroll', function () {
		  var scroll = $(window).scrollTop();
		  if (scroll < 245) {
			  $(".header-sticky").removeClass("sticky");
		  } else {
			  $(".header-sticky").addClass("sticky");
		  }
		});


		
	}
)(jQuery);