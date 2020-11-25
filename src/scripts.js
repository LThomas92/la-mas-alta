var $ = jQuery.noConflict();
let windowSize = false;
let windowHeight= $(window).height();
let gutenbergScrollAnims = false;
let blockTriggerHeight = $(window).height()*.33;

$(document).ready(function(){
  $('.single-slick-container').slick({
    dots: false,
    arrows: false,
    infinite: false,
    slidesToShow: 1,
    autoplay: true,
    autoPlaySpeed: 2000,
    fade: true,
    cssEase: 'linear'
    // prevArrow: jQuery('.slick-prev'),
    // nextArrow: jQuery('.slick-next')
  });


  $('.search-icon').click(function() {
    $('.overlay-menu').show();
    $('.close-icon').show();
  });

  $('.close-icon').click(function() {
    $('.overlay-menu').hide();
  });

  $('.mobile-menu-overlay .close-icon').click(function() {
    $('.mobile-menu-overlay').hide();
  });

  $('.hamburger-menu').click(function() {
    $('.mobile-menu-overlay').show();
  });

  $('.dashboard-open').click(function() {
    $('.dashboard-container__nav').show();
    $('.dashboard-open').hide();
    $('.dashboard-close').show();
  });

  $('.dashboard-close').click(function() {
    $('.dashboard-container__nav').hide();
    $('.dashboard-close').hide();
    $('.dashboard-open').show();
  });



  if ( jQuery('.gutenberg-styles > *').length && (!( window.location.hash != "" && jQuery(window.location.hash).length )) ) {
    gutenbergScrollAnims = true;
    jQuery('.gutenberg-styles > *').each(function(){
      let offset = jQuery(this).get(0).getBoundingClientRect().top;;
      jQuery(this).data('offset', offset);
      jQuery(this).addClass('to-reveal');
    });

    let numRevealed = 0;
    jQuery('.gutenberg-styles .to-reveal').each(function() {
      if (jQuery(window).scrollTop() + windowHeight - blockTriggerHeight >= jQuery(this).data('offset')) {
        numRevealed++;
        const thisRef = $(this);
        setTimeout(function(){
          thisRef.removeClass('to-reveal');
          thisRef.addClass('revealed');
        }, 700 + (numRevealed * 600));
      }
    });
  }
  
});

$(window).scroll(()=>{
  let scrolled = $(window).scrollTop();

  // gutenberg scroll anims
  if (gutenbergScrollAnims) {
   $('.gutenberg-styles .to-reveal').each(function() {
    console.log($(this).data('offset'));
    console.log(scrolled + windowHeight - blockTriggerHeight);
     if (scrolled + windowHeight - blockTriggerHeight >= $(this).data('offset')) {
       $(this).removeClass('to-reveal');
       $(this).addClass('revealed');

     }
   });
  }
});

$(window).resize(() => {

  if ( jQuery('.gutenberg-styles > *').length && (!( window.location.hash != "" && jQuery(window.location.hash).length )) ) {
    gutenbergScrollAnims = true;
    // console.log(window.scrollY + $(window).height());
    // console.log($('.gutenberg-styles > *'));
    jQuery('.gutenberg-styles > *').each(function(){
      let offset = jQuery(this).get(0).getBoundingClientRect().top;
      // console.log(offset);
      jQuery(this).data('offset', offset);
      jQuery(this).addClass('to-reveal');
    });

    let numRevealed = 0;
    jQuery('.gutenberg-styles .to-reveal').each(function() {
      if (jQuery(window).scrollTop() + (windowHeight - blockTriggerHeight) >= jQuery(this).data('offset')) {
        numRevealed++;
        const thisRef = $(this);
        setTimeout(function(){
          thisRef.removeClass('to-reveal');
          thisRef.addClass('revealed');
        }, 700 + (numRevealed * 600));
      }
    });
  }


});
