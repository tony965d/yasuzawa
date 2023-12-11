<?php get_header(); ?>


  <main>
    <section class="mv">
      <div class="mv__wrapper">
        <div class="mv__swiper swiper js-mv-swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <picture class="slide-image mv__image">
                <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/mv.png" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture class="slide-image mv__image">
                <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/mv.png" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture class="slide-image mv__image">
                <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/mv.png" alt="">
              </picture>
            </div>
          </div>
        </div>
        <div class="mv__body">
          <h2 class="mv__title">建築企画から設計・監理まで</h2>
        </div>
      </div>
    </section>

    <section class="concept top-concept">
      <div class="concept__inner inner">
        <div class="concept__body">
          <h2 class="concept__title">concept</h2>
          <p class="concept__text">
            私たちは、滋賀県を拠点に環境にやさしく<br>
            優れた機能と魅力的な造形を追求した<br>
            ４次元（空間+時間）の建てものを創造し、<br>
            クライアントを様の高満足を目指します
          </p>
        </div>
      </div>
    </section>

    <section class="works top-works">
      <div class="works__inner inner">
        <div class="works__container">
          <div class="works__header works-header">
            <h2 class="works-header__title">最新の実績</h2>
            <p class="works-header__sub-title">WORKS</p>
          </div>
          <div class="works__wrapper">
            <div class="works__cards cards">
              <a href="<?php the_permalink(); ?>" class="cards__card card">
                <figure class="card__image">
                  <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/works1.jpg" alt="">
                </figure>
                <div class="card__body">
                  <h4 class="card__title">WORKS NAME</h4>
                  <p class="card__text">CATEGORY NAME</p>
                </div>
              </a>
              <a href="<?php the_permalink(); ?>" class="cards__card card">
                <figure class="card__image">
                  <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/works2.jpg" alt="">
                </figure>
                <div class="card__body">
                  <h4 class="card__title">WORKS NAME</h4>
                  <p class="card__text">CATEGORY NAME</p>
                </div>
              </a>
              <a href="<?php the_permalink(); ?>" class="cards__card card">
                <figure class="card__image">
                  <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/works3.jpg" alt="">
                </figure>
                <div class="card__body">
                  <h4 class="card__title">WORKS NAME</h4>
                  <p class="card__text">CATEGORY NAME</p>
                </div>
              </a>
              <a href="<?php the_permalink(); ?>" class="cards__card card">
                <figure class="card__image">
                  <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/works4.jpg" alt="">
                </figure>
                <div class="card__body">
                  <h4 class="card__title">WORKS NAME</h4>
                  <p class="card__text">CATEGORY NAME</p>
                </div>
              </a>
            </div>
            <div class="works__button">
              <a href="<?php echo $works ?>" class="button button--works">more</a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>


<?php get_footer(); ?>