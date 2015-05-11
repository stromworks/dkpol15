$(document).ready(function(){
  owlInit();
});

function owlInit() {
  var owlTop = $('.owl-carousel-top');
  owlTop.owlCarousel({
    loop: true,
    margin: 0,
    nav: false,
    items: 1,
		autoplay: true,
		autoplayTimeout: 3000,
		lazyload: true
  });
	
	var owlMiddle = $('.owl-carousel-middle');
  owlMiddle.owlCarousel({
    loop: true,
    margin: 0,
    nav: false,
    items: 1,
		autoplay: true,
		autoplayTimeout: 5000,
		rtl: true,
		lazyload: true
  });
	
	var owlBottom = $('.owl-carousel-bottom');
  owlBottom.owlCarousel({
    loop: true,
    margin: 0,
    nav: false,
    items: 1,
		autoplay: true,
		autoplayTimeout: 4000,
		lazyload: true
  });
}
