//@prepros-prepend ../../node_modules/jquery/dist/jquery.min.js
//@prepros-prepend ../../node_modules/corenav/coreNavigation.js
//@prepros-prepend ../../node_modules/rellax/rellax.min.js

window.addEventListener('load',function() {

    $('nav').coreNavigation({
      menuPosition: "left",
      container: true,
      responsideSlide: true
    });

    var rellax = new Rellax('.rellax', {
      speed: 3,
      center: true,
      wrapper: null,
      round: true,
      vertical: true,
      horizontal: false
    });

    

})
