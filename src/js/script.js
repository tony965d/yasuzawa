
jQuery(function ($) { // この中であればWordpressでも「$」が使用可能になる
   
   
   $('.js-hamburger').click(function() {
      if($('.js-hamburger').hasClass('active')) {
      $('.js-hamburger').removeClass('active');
      $('.js-sp-nav').fadeOut(500);
      $('body').css('overflow', 'auto');
      } else {
      $('.js-hamburger').addClass('active');
      $('.js-sp-nav').fadeIn(500);
      $('body').css('overflow', 'hidden');
      }
   });

   
   
   /// mv画像swiperフェードアウト /////
   var swiper = new Swiper(".js-mv-swiper", {
      loop: true,
      effect: 'fade',
      autoplay: {
      delay: 4000,
      disableOnInteraction: false,
      },
      speed: 2000,
   });
 



});
