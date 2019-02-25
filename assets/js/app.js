//@prepros-prepend ../../node_modules/jquery/dist/jquery.min.js
//@prepros-prepend ../../node_modules/corenav/coreNavigation.js
//@prepros-prepend ../../node_modules/rellax/rellax.min.js
//@prepros-prepend ../../node_modules/svg-pan-zoom/dist/svg-pan-zoom.min.js

window.addEventListener('load',function(){

    $('nav').coreNavigation({
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

    var url = location.pathname;
    if ("url:contains('index.php')") {
      $('.logo-n').addClass('hidden');
      $('.logo-b').removeClass('hidden');
      $('.core-nav a').css('color', 'rgba(255,255,255,0.7)');
      $(".core-nav a").hover(
        function() {
          $(this).css("color","#fff");
        }, function() {
          $(this).css("color","rgba(255,255,255,0.7)");
        }
      );
      $('.core-nav .fab').css('color', 'rgba(255,255,255,0.7)');
      $(".core-nav .fab").hover(
        function() {
          $(this).css("color","#fff");
        }, function() {
          $(this).css("color","rgba(255,255,255,0.7)");
        }
      );
    }

    


});
