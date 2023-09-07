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
