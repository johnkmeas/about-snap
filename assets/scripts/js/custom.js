jQuery(document).ready(function($) {

  console.log('about to slick');
  $('.event-gallery').slick({
    slidesToShow: 5,
    slidesToScroll: 2,
    autoplay: true,
    autoplaySpeed: 2000,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });

 
   $(document).ready(function(){
     $(window).bind('scroll', function() {
     var navHeight = $( window ).height() - 70;
       if ($(window).scrollTop() > navHeight) {
         $('.js-fix-scroll').addClass('stick-top-nav');
       }
       else {
         $('.js-fix-scroll').removeClass('stick-top-nav');
       }
    });
  });
});
