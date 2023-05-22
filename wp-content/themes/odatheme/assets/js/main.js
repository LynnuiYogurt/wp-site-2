'use strict';


$(document).ready(function(){
	$('.multiple-items').slick({
		arrows:true,
		infinite: true,
		slidesToShow: 3,
		slidesToScroll: 1,
		
	});
	// $(".multiple-items").slick({
	// 	dots: true,
	// 	infinite: true,
	// 	speed: 500,
	// 	slidesToShow: 3,
	// 	slidesToScroll: 1
	//   });

	$('.double-items').slick({
		arrows:true,
		dots: false,
		infinite: true,
		speed: 500,
		slidesToShow: 2,
		slidesToScroll: 1
	});
});


