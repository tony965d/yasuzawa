  <?php 
    global $top;
    global $company;
    global $works;
    global $recruit;
    global $company;
  ?>  

  <footer class="footer top-footer">
    <div class="footer__contact footer-contact">
      <div class="footer-contact__inner inner">
        <nav class="footer-contact__nav footer-nav">
          <ul class="footer-nav__items">
            <li class="footer-nav__item">
              <a href="<?php echo $top ?>" class="footer-nav__menu">ホーム</a>
            </li>
            <li class="footer-nav__item">
              <a href="<?php echo $company ?>" class="footer-nav__menu">会社概要</a>
            </li>
            <li class="footer-nav__item">
              <a href="<?php echo $works ?>" class="footer-nav__menu">実績</a>
            </li>
            <li class="footer-nav__item">
              <a href="<?php echo $recruit ?>" class="footer-nav__menu">求人情報</a>
            </li>
            <li class="footer-nav__item">
              <a href="<?php echo $contact ?>" class="footer-nav__menu">お問い合わせ</a>
            </li>
          </ul>
        </nav>
        <div class="footer-contact__body">
          <div class="footer-contact__title">
            <h2 class="footer-contact__text">建築企画・設計・監理</h2>
          </div>
          <div class="footer-contact__tel">
            <div class="footer-contact__tel-text">TEL</div>
            <a href="tel:049-24-3333" class="footer-contact__number">049-24-3333</a>
          </div>
          <div class="footer-contact__button">
            <a href="<?php echo $contact ?>" class="button">メールでのお問い合わせはこちら</a>
          </div>
        </div>
      </div>
    </div>
    <div class="footer__information footer-information">
      <div class="footer-information__inner inner">
        <div class="footer-information__block">
          <div class="footer-information__logo">
            <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/footer-logo.png" alt="株式会社ヤスザワ設計">
          </div>
          <div class="footer-information__right">
            <div class="footer-information__address">
              <div class="footer-information__address-zip">〒522-0062</div>
              <div class="footer-information__address-text">滋賀県彦根市立花町2-2(3番町ビル)</div>
            </div>
            <div class="footer-information__tel">
              <a class="footer-information__number" href="tel:049-24-3333">TEL.0749-24-3333</a>
              <div class="footer-information__fax">FAX.0749-24-3533</div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer__copyright">
      <small>Copyright(c) YASUZAWA DESIGN　All Rights Reserved.</small>
    </div>
  </footer>

  <?php wp_footer(); ?>
</body>
</html>