// OnLoad
jQuery(document).ready(function ($) {
  // Homepage hero slider

  $('.banner-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    arrows: false
  });

  $('.slider-1').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: false,
    autoplaySpeed: 2000,
    arrows: false,
    infinite: false,
  });

  
  $('.product-slider').slick({
      centerMode:true,
      slidesToShow: 1,
      slidesToScroll: 1,
      dots: true,
      arrows: false,
      infinite: false,
      cssEase: 'linear',
      variableWidth: true,
      variableHeight: true,
      responsive: [{
        breakpoint: 480,
        settings: {
          arrows: false,
          centerMode: true,
          //centerPadding: '40px',
          slidesToShow: 1
        }
      }
    ]
    });

    $('.best-products').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
      arrows: true,
      prevArrow: $('.fa-arrow-left'),
      nextArrow: $('.fa-arrow-right'),
      responsive: [{
        breakpoint: 768,
        settings: {
          slidesToShow: 2
        }
      }
    ]
    });
  

  $(".woof_reset_button_2").insertAfter(".woof_container_inner_productcategories h4");
  
    
    

  // Search Bar Header placeholder text
  headerSearchBar();
  function headerSearchBar() {
    var headerSearchBarField =
      document.getElementsByClassName("search-field")[0];

    if (headerSearchBarField) {
      if (document.querySelector("[placeholder='Search …']")) {
        document.querySelector("[placeholder='Search …']").placeholder =
          "Search something here!";
      }
    }
  }

  $(".hamburger-menu").click(function() {
    $(this).toggleClass('active');
    $('.w-100.mt-3').toggleClass('mob-header');
    $('nav').toggleClass('d-none');
    $('body').toggleClass('overflow');
    $('.mob-account-details').toggleClass('d-none');
    $('.banner').toggleClass('d-none');
});
});
