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

  <section class="works-sub top-works-sub">
    <div class="works-sub__header">
      <div class="works-sub__header-inner inner">
        <h3 class="works-sub__category-title">CATEGORY</h3>
        <div class="works-sub__categories categories">
          <?php
            // カスタム分類 'works_category' のタームを取得するためのクエリパラメータ
            $args = [
              'taxonomy' => 'category', // タクソノミーを指定
              'hide_empty' => 0, // 空のタームも取得する
              ];
            // クエリを実行してタームのリストを取得
            $terms = get_terms($args);
            // タームが存在する場合の処理
            if ( count( $terms ) != 0 ) {
              // タームのリスト $terms を $term に格納してループ
              foreach ( $terms as $term ) {
                // 現在の投稿がタームに関連付けられているかをチェック
                if ( is_object_in_term( $post->ID, 'category', $term->slug ) ) {
                  // 関連付けがある場合、currentクラスを追加してアクティブなリンクを表示
                  echo '<div class="categories__category category"><a class="category__name current" href="'.get_term_link($term).'">'.$term->name.'</a></div>';
                } else {
                  // 関連付けがない場合、通常のリンクを表示
                  echo '<div class="categories__category category"><a class="category__name" href="'.get_term_link($term).'">'.$term->name.'</a></div>';
                }          
              }
            }
          ?>
        </div>
      </div>
    </div>
    <div class="works-sub__wrapper">
      <div class="works-sub__inner inner">
        <div class="works__cards cards">
          <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
            <a href="<?php the_permalink(); ?>" class="cards__card card">
              <figure class="card__image">
                <?php if (has_post_thumbnail()) { ?>
                <?php the_post_thumbnail('full'); ?>
                <?php } else { ?>
                <?php } ?>
              </figure>
              <div class="card__body">
                <h4 class="card__title"><?php the_title(); ?></h4>
                <p class="card__text">
                  <?php 
                    $terms = get_the_terms($post->ID,'category');
                      foreach ( $terms as $term ) {
                        echo $term->name ;
                      }
                  ?>
                </p>
              </div>
            </a>
          <?php endwhile; ?>
          <?php endif; ?>
        </div>
        <div class="works-sub__page-nav">
          <?php the_posts_pagination(array(
            'mid_size' => 2, //←現在のページの横に表示するページ数
            'prev_text' => __( '' ),
            'next_text' => __( '' ), 
          )); ?>
        </div>
      </div>
    </div>
  </section>


<?php get_footer(); ?>