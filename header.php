<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta name="format-detection" content="telephone=no" />
    <?php wp_head(); ?>
  </head>

  <?php 
    global $top;
    global $company;
    global $works;
    global $recruit;
    global $company;
  ?>  

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <header id="header" class="header">
    <div class="header__inner inner">
      <h1 class="header__logo">
        <a href="<?php echo $top ?>" class="header__image"><img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/header-logo.png" alt="株式会社ヤスザワ設計"></a>
      </h1>
      <div class="header__hamburger hamburger js-hamburger">
        <span></span>
        <span></span>
        <span></span>
      </div>
      <div class="header__right">
        <nav class="header__pc-nav pc-nav">
          <ul class="pc-nav__items">
            <li class="pc-nav__item">
              <a href="<?php echo $top ?>" class="pc-nav__menu">
                <div class="pc-nav__title">ホーム</div>
                <p class="pc-nav__sub-title">home</p>
              </a>    
            </li>
            <li class="pc-nav__item">
              <a href="<?php echo $company ?>" class="pc-nav__menu">
                <div class="pc-nav__title">会社概要</div>
                <p class="pc-nav__sub-title">company</p>
              </a>    
            </li>
            <li class="pc-nav__item">
              <a href="<?php echo $works ?>" class="pc-nav__menu">
                <div class="pc-nav__title">実績</div>
                <p class="pc-nav__sub-title">works</p>
              </a>    
            </li>
            <li class="pc-nav__item">
              <a href="<?php echo $recruit ?>" class="pc-nav__menu">
                <div class="pc-nav__title">求人情報</div>
                <p class="pc-nav__sub-title">recruit</p>
              </a>  
            </li>
            <li class="pc-nav__item">
              <a href="<?php echo $contact ?>" class="pc-nav__menu">
                <div class="pc-nav__title">お問い合わせ</div>
                <p class="pc-nav__sub-title">contact</p>
              </a>  
            </li>
          </ul>
        </nav>
        <div class="header__tel">
          <a href="tel:049-24-3333" class="header__tel-number">Tel 049-24-3333</a>
        </div>
      </div>
    </div>
    <nav class="header__sp-nav sp-nav js-sp-nav">
      <div class="sp-nav__inner inner">
        <div class="sp-nav__wrapper">
          <ul class="sp-nav__items">
            <li class="sp-nav__item">
              <a href="<?php echo $top ?>" class="sp-nav__menu">ホーム</a>
            </li>
            <li class="sp-nav__item">
              <a href="<?php echo $company ?>" class="sp-nav__menu">会社概要</a>
            </li>
            <li class="sp-nav__item">
              <a href="<?php echo $works ?>" class="sp-nav__menu">実績</a>
            </li>
            <li class="sp-nav__item">
              <a href="<?php echo $recruit ?>" class="sp-nav__menu">求人情報</a>
            </li>
            <li class="sp-nav__item">
              <a href="<?php echo $contact ?>" class="sp-nav__menu">お問い合わせ</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
    