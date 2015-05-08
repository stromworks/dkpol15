$(document).ready(function(){
  owlInit();
});

function owlInit() {
  var owl = $('.owl-carousel');
  owl.owlCarousel({
    loop: true,
    margin: 0,
    nav: false,
    items: 1
  });
}
