
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

   

   ///// 下からフェードイン /////
   $(".js-fadeUp").css("opacity", 0);
      ScrollTrigger.batch(".js-fadeUp", {
      onEnter: (elements, triggers) => {
      gsap.set(elements, { y: '20%', opacity: 0 });
      gsap.to(elements, { y: 0, opacity: 1, duration: 1 }); // アニメーション時間を1秒に変更
      },
      start: "top 60%", // スクロール開始位置を少し下にずらす（60%の位置で開始）
      once: true
   });

   

   ///// 左からフェードイン /////
   $(".js-fadeLeft").css("opacity", 0);
      ScrollTrigger.batch(".js-fadeLeft", {
      onEnter: (elements, triggers) => {
      gsap.set(elements, { x: '-20%', opacity: 0 }); // 左に移動させる
      gsap.to(elements, { x: 0, opacity: 1, duration: 1 }); // 左からフェードインする
      },
      start: "top 70%", // スクロール開始位置を少し下にずらす（70%の位置で開始）
      once: true
   });
   

   
  //// ContactForm7エラー箇所までスクロール /////
  var wpcf7El = document.querySelector(".wpcf7");
  if (wpcf7El) { // 要素が存在する場合にのみイベントリスナーを追加
    wpcf7El.addEventListener("wpcf7invalid", function () {
      var speed = 1000;
      var header = $(".header").innerHeight(); // 固定ヘッダー・ナビの高さを取得
      setTimeout(function () {
        var firstErrorEl = $(".wpcf7-not-valid:first"); // エラーが発生した箇所の最初の要素を取得
        var scrollAmount = firstErrorEl.offset().top - header; //スクロール位置を取得
        $("html, body").animate({ scrollTop: scrollAmount }, speed, "swing"); //スムーズスクロール
      }, 100);
    }, false);
  }


  

});



