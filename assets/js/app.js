//@prepros-prepend ../../node_modules/jquery/dist/jquery.min.js
//@prepros-prepend ../../node_modules/corenav/coreNavigation.js
//@prepros-prepend ../../node_modules/rellax/rellax.min.js
//@prepros-prepend ../../node_modules/counterup/jquery.counterup.min.js

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

    $('.counter').counterUp({
      delay: 10,
      time: 1000
    });

    var url = location.pathname;
    if ("url:contains('index.php')") {
      $('.logo-n').addClass('hidden');
      $('.logo-b').removeClass('hidden');
      $('.core-nav a').css('color', '#fff');
      $(".core-nav a").hover(
        function() {
          $(this).css("color","#5a0586");
        }, function() {
          $(this).css("color","#fff");
        }
      );
      $('.core-nav .fab').css('color', '#fff');
      $(".core-nav .fab").hover(
        function() {
          $(this).css("color","#5a0586");
        }, function() {
          $(this).css("color","#fff");
        }
      );
    }

});
