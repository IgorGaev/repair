$(document).ready(function () {

  $('.portfolio-slider').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    prevArrow: $('.arrow-left'),
    nextArrow: $('.arrow-right'),
    responsive: [
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 606,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
      
    ]
  });

})