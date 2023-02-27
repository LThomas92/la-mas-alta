/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/dist/";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(1);
__webpack_require__(2);

/***/ }),
/* 1 */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),
/* 2 */
/***/ (function(module, exports) {

var $ = jQuery.noConflict();
var windowSize = window.innerWidth;
var windowHeight = $(window).height();
var gutenbergScrollAnims = false;
var blockTriggerHeight = $(window).height() * 0.33;

$(document).ready(function () {
  $('.single-product-container__text-container .price').after($('<button class="read-more-btn">Read More</button>'));

  $('select').select2();

  $('.read-more-btn').click(function () {
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
    cssEase: "linear"
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
    cssEase: "linear"
  });

  $(".search-icon").click(function () {
    $(".overlay-menu").addClass("show-overlay-menu");
    $(".close-icon").show();
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

  if (jQuery(".gutenberg-styles > *").length && !(window.location.hash != "" && jQuery(window.location.hash).length)) {
    gutenbergScrollAnims = true;
    jQuery(".gutenberg-styles > *").each(function () {
      let offset = jQuery(this).get(0).getBoundingClientRect().top;
      jQuery(this).data("offset", offset);
      jQuery(this).addClass("to-reveal");
    });

    let numRevealed = 0;
    jQuery(".gutenberg-styles .to-reveal").each(function () {
      if (jQuery(window).scrollTop() + windowHeight - blockTriggerHeight >= jQuery(this).data("offset")) {
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
      if (scrolled + windowHeight - blockTriggerHeight >= $(this).data("offset")) {
        $(this).removeClass("to-reveal");
        $(this).addClass("revealed");
      }
    });
  }
});

$(window).resize(() => {
  if (jQuery(".gutenberg-styles > *").length && !(window.location.hash != "" && jQuery(window.location.hash).length)) {
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
      if (jQuery(window).scrollTop() + (windowHeight - blockTriggerHeight) >= jQuery(this).data("offset")) {
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
  fadeSpeed: 3000
});

/***/ })
/******/ ]);
//# sourceMappingURL=main.js.map