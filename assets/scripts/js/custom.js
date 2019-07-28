jQuery(document).ready(function($) {
  console.log('about to slick');
  $('.event-gallery').slick({
  slidesToShow: 5,
  slidesToScroll: 2,
  autoplay: true,
  autoplaySpeed: 2000,
  });
});
