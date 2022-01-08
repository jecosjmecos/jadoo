jQuery(document).ready(function($){	
	/* img to svg code */
	$('img.svg').each(function() {
	var $img = $(this);
	var imgID = $img.attr('id');
	var imgClass = $img.attr('class');
	var imgURL = $img.attr('src');

	$.get(imgURL, function(data) {
			// Get the SVG tag, ignore the rest
			var $svg = jQuery(data).find('svg');

			// Add replaced image's ID to the new SVG
			if (typeof imgID !== 'undefined') {
				$svg = $svg.attr('id', imgID);
			}
			// Add replaced image's classes to the new SVG
			if (typeof imgClass !== 'undefined') {
				$svg = $svg.attr('class', imgClass + ' replaced-svg');
			}

			// Remove any invalid XML tags as per http://validator.w3.org
			$svg = $svg.removeAttr('xmlns:a');

			// Check if the viewport is set, if the viewport is not set the SVG wont't scale.
			if (!$svg.attr('viewBox') && $svg.attr('height') && $svg.attr('width')) {
				$svg.attr('viewBox', '0 0 ' + $svg.attr('height') + ' ' + $svg.attr('width'))
			}

			// Replace image with new SVG
			$img.replaceWith($svg);

	}, 'xml');

	});


	/* reviews slider */
	$('#reviewsSlider').slick({
		slidesToShow: 2,
		vertical: true,
		infinite: false,
		arrows: true,
		dots: true,
		responsive: [
			{
				breakpoint: 576,
				settings: {
					slidesToShow: 1,
					adaptiveHeight: true
				}
			},
		]
	});

	/* partners slider */
	$('#partnersSlider').slick({
		slidesToShow: 5,
		arrows: false,
		dots: false,
		autoplay: true,
		responsive: [
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 3
				}
			},
			{
				breakpoint: 576,
				settings: {
					slidesToShow: 2
				}
			},
		]
	});

	/* burger menu */
	$('#headerBurger').click(function(){
		$('.header__options').toggleClass('active');
		$('body').toggleClass('overflow-hidden');
		$(this).toggleClass('active');
	});
});