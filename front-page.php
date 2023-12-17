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
                <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/mv2.png" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture class="slide-image mv__image">
                <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/mv3.png" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture class="slide-image mv__image">
                <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/mv4.png" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture class="slide-image mv__image">
                <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/mv5.png" alt="">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture class="slide-image mv__image">
                <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/mv6.png" alt="">
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
          <h2 class="concept__title js-fadeLeft">concept</h2>
          <p class="concept__text js-fadeLeft">
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
            <h2 class="works-header__title js-fadeUp">最新の実績</h2>
            <p class="works-header__sub-title js-fadeUp">WORKS</p>
          </div>
          <div class="works__wrapper">
            <div class="works__cards cards">
            <?php 
              $works_query = new WP_Query(
              array(
              'post_type'      => 'post',
              'posts_per_page' => 4,
              )
              );
            ?>
            <?php if ( $works_query->have_posts() ) : ?>
            <?php while ( $works_query->have_posts() ) : ?>
            <?php $works_query->the_post(); ?>
              <a href="<?php the_permalink(); ?>" class="cards__card card">
                <figure class="card__image js-fadeUp">
                  <?php if (has_post_thumbnail()) { ?>
                  <?php the_post_thumbnail('full'); ?>
                  <?php } else { ?>
                  <?php } ?>
                </figure>
                <div class="card__body">
                  <h4 class="card__title js-fadeUp"><?php the_title(); ?></h4>
                  <p class="card__text js-fadeUp">
                    <?php 
                      $terms = get_the_terms($post->ID,'category');
                        foreach ( $terms as $term ) {
                          echo $term->name ;
                        }
                    ?>
                  </p>
                </div>
              </a>
              <?php wp_reset_postdata(); ?>
              <?php endwhile; ?>
              <?php endif;  ?>
            </div>
            <div class="works__button js-fadeUp">
              <a href="<?php echo $works ?>" class="button button--works">more</a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>


<?php get_footer(); ?>