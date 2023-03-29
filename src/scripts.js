var $ = jQuery.noConflict();
var windowSize = window.innerWidth;
var windowHeight = $(window).height();
var gutenbergScrollAnims = false;
var blockTriggerHeight = $(window).height() * 0.33;

$(document).ready(function () {
  $('.single-product-container__text-container .price').after( $('<button class="read-more-btn">Read More</button>') ); 

  $('select').select2();

  $('.read-more-btn').click(function() {
    $('.woocommerce-product-details__short-description').toggle(500);
  });

  $(".single-slick-container").slick({
    dots: false,
    arrows: false,
    infinite: false,
    slidesToShow: 1,
    autoplay: true,
    autoPlaySpeed: 2000,
    fade: true,
    cssEase: "linear",
  });

  $(".reviews-homepage-section-container").slick({
    dots: false,
    arrows: true,
    prevArrow: jQuery(".slick-prev"),
    nextArrow: jQuery(".slick-next"),
    infinite: false,
    slidesToShow: 1,
    autoplay: true,
    autoPlaySpeed: 2000,
    fade: true,
    cssEase: "linear",
  });

  $(".search-icon").click(function () {
    $(".overlay-menu").addClass("show-overlay-menu");
  });

  $(".close-icon").click(function () {
    $(".overlay-menu").removeClass("show-overlay-menu");
  });

  $(".mobile-menu-overlay .close-icon").click(function () {
      $('.mobile-menu-overlay').hide(300);
  });

  $(".hamburger-menu").click(function () {
    $(".mobile-menu-overlay").show();
  });

  $(".dashboard-open").click(function () {
    $(".dashboard-container__nav").addClass("expanded");
    $(".dashboard-open").hide();
    $(".dashboard-close").show();
  });

  $(".dashboard-close").click(function () {
    $(".dashboard-container__nav").removeClass("expanded");
    $(".dashboard-close").hide();
    $(".dashboard-open").show();
  });

  if (
    jQuery(".gutenberg-styles > *").length &&
    !(window.location.hash != "" && jQuery(window.location.hash).length)
  ) {
    gutenbergScrollAnims = true;
    jQuery(".gutenberg-styles > *").each(function () {
      let offset = jQuery(this).get(0).getBoundingClientRect().top;
      jQuery(this).data("offset", offset);
      jQuery(this).addClass("to-reveal");
    });

    let numRevealed = 0;
    jQuery(".gutenberg-styles .to-reveal").each(function () {
      if (
        jQuery(window).scrollTop() + windowHeight - blockTriggerHeight >=
        jQuery(this).data("offset")
      ) {
        numRevealed++;
        const thisRef = $(this);
        setTimeout(function () {
          thisRef.removeClass("to-reveal");
          thisRef.addClass("revealed");
        }, 700 + numRevealed * 600);
      }
    });
  }
});

$(window).scroll(() => {
  let scrolled = $(window).scrollTop();
  // gutenberg scroll anims
  if (gutenbergScrollAnims) {
    $(".gutenberg-styles .to-reveal").each(function () {
      if (
        scrolled + windowHeight - blockTriggerHeight >=
        $(this).data("offset")
      ) {
        $(this).removeClass("to-reveal");
        $(this).addClass("revealed");
      }
    });
  }
});

$(window).resize(() => {
  if (
    jQuery(".gutenberg-styles > *").length &&
    !(window.location.hash != "" && jQuery(window.location.hash).length)
  ) {
    gutenbergScrollAnims = true;
    // console.log(window.scrollY + $(window).height());
    // console.log($('.gutenberg-styles > *'));
    jQuery(".gutenberg-styles > *").each(function () {
      let offset = jQuery(this).get(0).getBoundingClientRect().top;
      jQuery(this).data("offset", offset);
      jQuery(this).addClass("to-reveal");
    });

    let numRevealed = 0;
    jQuery(".gutenberg-styles .to-reveal").each(function () {
      if (
        jQuery(window).scrollTop() + (windowHeight - blockTriggerHeight) >=
        jQuery(this).data("offset")
      ) {
        numRevealed++;
        const thisRef = $(this);
        setTimeout(function () {
          thisRef.removeClass("to-reveal");
          thisRef.addClass("revealed");
        }, 700 + numRevealed * 600);
      }
    });
  }
});

$('.single-product-container__img-container').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: true,
  dots: true,
  ceneterMode: true,
  autoplay: true,
  autoplaySpeed: 2000,
  fadeSpeed: 3000
});
