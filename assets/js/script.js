// Script.js


jQuery(document).ready(function() {

	var windowHeight = jQuery(window).height();
	var windowScrollPosTop = jQuery(window).scrollTop();
	var windowScrollPosBottom = windowHeight + windowScrollPosTop;

	jQuery.fn.revealOnScroll = function(direction, speed) {

		return.this.each(function() {

			var objectOffset = jQuery(this).offset();
			var objectOffsetTop = objectOffset.top;

			if(!jQuery(this).hasClass("hidden")) {

				if(direction == "right") {

					jQuery(this).css({
						"opacity"	: 0,
						"right"		: "700px"
					});

				} else {

					jQuery(this).css({
						"opacity"	: 0,
						"right"		: "-700px"
					});

				}

				jQuery(this).addClass("hidden");	
			}
			
			if( !jQuery(this).hasClass("animation-complete") ) {

				if( windowScrollPosBottom > objectOffsetTop ) {
					jQuery(this).animate({ "opacity" : 1, "right" : 0 }, speed).addClass("animation-complete");
				}
			}

		});

	} // end our function here


	jQuery(window).scroll(function() {

		windowHeight = jQuery(window).height();
		windowScrollPosTop = jQuery(window).scrollTop();
		windowScrollPosBottom = windowHeight + windowScrollPosTop;

		jQuery("section").revealOnScroll("right", 4000);

	});

});