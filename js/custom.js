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

  $('.gallery').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    arrows: false,
    dots: true,
    centerMode: true,
    responsive: [{
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        //centerPadding: '40px',
        slidesToShow: 2,
        centerMode: false,
      }
    }
  ]
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
    responsive: [
      {
        breakpoint: 650,
        settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        }
      }
    ]        
  });
  

  $(".woof_reset_button_2").insertAfter(".woof_container_inner_productcategories h4");

  // Create a new h2 element
  var paymentMethods = $('<div class="payment-methods p-3"><h2 class="mb-4">Payment Methods</h2><div class="methods"><p>1.Pay over the phone</p><p>2.Crypto</p><p>3.Send cash</p></div></div>');

  // Insert the new h2 element before the .woocommerce-terms-and-conditions-wrapper
  paymentMethods.insertBefore('#payment');





  // buy now button
  var buyNowButton = $('.single_add_to_cart_button');
    
    // Find the .d-flex.flex div
    var flexDiv = $('.payment');
    
    // Move the buyNowButton inside the flexDiv
    flexDiv.append(buyNowButton);
  
    
    

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
    $('.header-div').toggleClass('mob-header');
    $('.header-div').toggleClass('d-none');
    $('nav').toggleClass('d-none');
    $('body').toggleClass('overflow');
    $('.mob-account-details').toggleClass('d-none');
    $('.banner').toggleClass('d-none');
  });

  $(".details").click(function() {
    $(".details .content").toggleClass('d-none');
    $(".details .title").toggleClass('active');
  });

  $(".shipping").click(function() {
    $(".shipping .content").toggleClass('d-none');
    $(".shipping .title").toggleClass('active');
  });

  $(".returns").click(function() {
    $(".returns .content").toggleClass('d-none');
    $(".returns .title").toggleClass('active');
  });

  $(".filter-toggle").click(function() {
    $(".filter").toggleClass('d-none');
    $(".filter-toggle").toggleClass('active');
  });


  var $termsWrapper = $('.woocommerce-terms-and-conditions-wrapper');
  var $h2Element = $('<h2>Your Heading Text</h2>'); // Replace 'Your Heading Text' with your desired heading text
  
  $termsWrapper.before($h2Element);
})