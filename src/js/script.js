
jQuery(function ($) { // この中であればWordpressでも「$」が使用可能になる
   
   
   ///// ハンバーガーメニュー /////
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

   
   
   ///// mv画像swiperフェードアウト /////
   var swiper = new Swiper(".js-mv-swiper", {
      loop: true,
      effect: 'fade',
      autoplay: {
      delay: 4000,
      disableOnInteraction: false,
      },
      speed: 2000,
   });
 


   ///// * ズームアウト */////
   $(document).ready(function() {
      // ページが読み込まれた後に実行されるコード
      $('.js-mv-sub').each(function() {
      // アニメーションを適用したい要素にスタイルを設定
      $(this).css('animation', 'zoomOut 1s ease-out forwards');
      });
   });



   ///// リンク先が現在のページと紐づいている要素にcurrent要素を付与する /////
   

   
});
