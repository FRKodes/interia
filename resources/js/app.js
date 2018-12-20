
/**
* First we will load all of this project's JavaScript dependencies which
* includes Vue and other libraries. It is a great starting point when
* building robust, powerful web applications using Vue and Laravel.
*/

require('./jquery');
require('./bootstrap.min');
require('./slick');

console.log('ok!');

$(document).ready(function(){
	$('.about-us-carousel').slick({
		infinite: true,
		dots: true,
		arrows: false,
		autoplay: true,
		slidesToShow: 1,
		slidesToScroll: 1
	});
});