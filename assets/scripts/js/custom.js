jQuery(document).ready(function($) {
  console.log('about to slick');
  $('.event-gallery').slick({
    infinite: true,
    slidesToShow: 5,
    slidesToScroll: 3,
    centerMode: true,
    autoplaySpeed: 2000,
  });
});
