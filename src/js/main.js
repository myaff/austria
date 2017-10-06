let DeviceDetection = require("./components/device-detection");
let Carousel = require("./components/carousel");
let Animation = require("./components/animation");

$(document).ready(function(){
  
  DeviceDetection.run();
  Carousel.init();
  Animation.init();
  
});


/**
 * Список экспортируемых модулей, чтобы иметь к ним доступ извне
 * @example
 * Main.Form.isFormValid();
 */
module.exports = {
   DeviceDetection,
   Carousel
};