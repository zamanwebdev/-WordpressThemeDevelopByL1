jQuery(document).ready(function () {
  jQuery(".slider").bxSlider({
    mode: 'fade',
    captions: true,
  });
  jQuery("#owl_slider").owlCarousel({
  	autoplay:true,
  	items:1,
  });
});