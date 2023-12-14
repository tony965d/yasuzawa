<?php get_header(); ?>


  <section class="mv-sub">
    <div class="mv-sub__wrapper">
      <picture class="mv-sub__image js-mv-sub">
        <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/mv-works.png" alt="">
      </picture>
      <div class="mv-sub__body">
        <h2 class="mv-sub__title">実績</h2>
        <p class="mv-sub__sub-title">works</p>
      </div>
    </div>
  </section>

  <section class="works-article">
    <div class="works-article__header">
      <div class="works-article__header-inner inner">
        <h2 class="works-article__title js-fadeUp"><?php the_title(); ?></h2>
        <div class="works-article__thumbnail js-fadeUp">
          <?php if (has_post_thumbnail()) { ?>
          <?php the_post_thumbnail('full'); ?>
          <?php } else { ?>
          <?php } ?>
        </div>
      </div>
    </div>
    <div class="works-article__wrapper js-fadeUp">
      <?php the_content(); ?>
      <div class="works-article__wrapper-inner inner">
        <div class="works-article__images">
          <div class="works-article__two-block">
            <?php 
              $fields = cfs()->get('works_two-block');
              if ($fields === null) {
                // $fields がnullの場合、デフォルトの値を設定
                $fields = array(); // または他の適切なデフォルト値
              }
              foreach ($fields as $field) { 
            ?>
            <div class="works-article__two-block-image js-fadeUp">
              <img src="<?php echo $field['works_image'];?>" alt="">
            </div>
            <?php }; ?>
          </div>
          <div class="works-article__three-block">
            <?php 
              $fields = cfs()->get('works_three-block');
              if ($fields === null) {
                // $fields がnullの場合、デフォルトの値を設定
                $fields = array(); // または他の適切なデフォルト値
              }
              foreach ($fields as $field) { 
            ?>
            <div class="works-article__three-block-image js-fadeUp">
              <img src="<?php echo $field['works_image'];?>" alt="">
            </div>
            <?php }; ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="related-articles top-related-articles">
    <div class="related-articles__inner inner">
      <h4 class="related-articles__title js-fadeUp">Other Project</h4>
      <div class="related-articles__cards cards cards--related">
        <?php 
        $works_query = new WP_Query(
        array(
        'post_type'      => 'post',
        'posts_per_page' => 4,
        'orderby' => 'rand',
        )
        );
        ?>
        <?php if ( $works_query->have_posts() ) : ?>
        <?php while ( $works_query->have_posts() ) : ?>
        <?php $works_query->the_post(); ?>
        
        <a href="<?php the_permalink(); ?>" class="cards__card card card--related">
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
    </div>
  </section>


<?php get_footer(); ?>