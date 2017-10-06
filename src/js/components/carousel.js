/**
 * Карусель
 * @module Carousel
 */

let carousel;

/**
 * Инициализация карусели
 */
function init(){
  carousel = $(".owl-carousel");

  carousel.owlCarousel({
    items: 1,
    nav: true,
    navText: ['', ''],
    dots: false,
    lazyLoad: true,
    loop: true,
    mouseDrag: false,
    animateOut: 'fadeOut'
  });
}

module.exports = {init};