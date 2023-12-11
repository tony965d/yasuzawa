<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta name="format-detection" content="telephone=no" />
    <?php wp_head(); ?>
  </head>

  <?php 
    global $top;
    global $top;
    global $top;
  ?>  

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <header id="header" class="header">
    <div class="header__inner inner">
      <h1 class="header__logo">
        <a href="" class="header__image"><img src="/assets/images/common/ダミー1.png" alt=""></a>
      </h1>
      <div class="header__hamburger hamburger js-hamburger">
        <span></span>
        <span></span>
        <span></span>
      </div>
      <nav class="header__pc-nav pc-nav">
        <ul class="pc-nav__items">
          <li class="pc-nav__item">
            <a href="" class="pc-nav__menu">
              <div class="pc-nav__title">NEWS</div>
              <p class="pc-nav__sub-title">新着情報</p>
            </a>    
          </li>
          <li class="pc-nav__item">
            <a href="" class="pc-nav__menu">
              <div class="pc-nav__title">ABOUT</div>
              <p class="pc-nav__sub-title">私たちについて</p>
            </a>    
          </li>
          <li class="pc-nav__item">
            <a href="" class="pc-nav__menu">
              <div class="pc-nav__title">BLOG</div>
              <p class="pc-nav__sub-title">ブログ</p>
            </a>    
          </li>
          <li class="pc-nav__item">
            <a href="" class="pc-nav__menu">
              <div class="pc-nav__title">CONTACT</div>
              <p class="pc-nav__sub-title">お問合せ</p>
            </a>  
          </li>
        </ul>
      </nav>
    </div>
    <nav class="header__sp-nav sp-nav js-sp-nav">
      <div class="sp-nav__inner inner">
        <div class="sp-nav__wrapper">
          <ul class="sp-nav__items">
            <li class="sp-nav__item">
              <a href="#" class="sp-nav__menu">TOP</a>
            </li>
            <li class="sp-nav__item">
              <a href="#" class="sp-nav__menu">NEWS</a>
            </li>
            <li class="sp-nav__item">
              <a href="#" class="sp-nav__menu">ABOUT</a>
            </li>
            <li class="sp-nav__item">
              <a href="#" class="sp-nav__menu">BLOG</a>
            </li>
            <li class="sp-nav__item">
              <a href="#" class="sp-nav__menu">CONTACT</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
    