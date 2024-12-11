<?php get_header(); ?>


<section class="mv-sub">
  <div class="mv-sub__wrapper">
    <picture class="mv-sub__image js-mv-sub">
      <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/mv-contact.jpg" alt="">
    </picture>
    <div class="mv-sub__body">
      <h2 class="mv-sub__title">404</h2>
      <p class="mv-sub__sub-title">not found</p>
    </div>
  </div>
</section>

<section class="error">
  <div class="error__inner inner">
    <div class="error__body">
      <h2 class="error__title hidden js-fadeUp">
        申し訳ありません。<br>お探しのページが見つかりません。
      </h2>
      <div class="error__button js-fadeUp">
        <a href="<?php echo $top ?>" class="button button--error">トップ</a>
      </div>
    </div>
  </div>
</section>


<?php get_footer(); ?>