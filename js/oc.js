(function ($) {
  Drupal.behaviors.yourBehaviorName = {
    attach: function (context, settings) {

	$('.join-us').parent().addClass('btn');

    $('.view-display-id-blog_listing .view-content').slick({
      dots: false,
      infinite: false,
      speed: 300,
      slidesToShow: 4,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
            infinite: true,
            dots: true,
            arrows: true
          }
        },
        {
          breakpoint: 600,
          settings: {
            dots: true,
            slidesToShow: 2,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 480,
          settings: {
            dots: true,
            arrows: false,
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
      ]
    });

    $('.view-id-our_members .view-content').slick({
      dots: true,
      infinite: false,
      speed: 300,
      slidesToShow: 5,
      slidesToScroll: 1,
      arrows: false,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
            infinite: true,
          }
        },
        {
          breakpoint: 600,
          settings: {
            centerMode: true,
            infinite: false,
            speed: 300,
            slidesToShow: 2,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 480,
          settings: {
            centerMode: true,
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
      ]
    });
        

  }
}
})(jQuery);