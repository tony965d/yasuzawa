<?php get_header(); ?>


  <section class="mv-sub">
    <div class="mv-sub__wrapper">
      <picture class="mv-sub__image js-mv-sub">
        <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/mv-contact.png" alt="">
      </picture>
      <div class="mv-sub__body">
        <h2 class="mv-sub__title">お問い合わせ</h2>
        <p class="mv-sub__sub-title">contact</p>
      </div>
    </div>
  </section>

  <section class="contact top-contact">
    <div class="contact__inner inner">
      <p class="contact__text js-fadeUp">お問い合わせはお電話・または下記のお問い合わせフォームよりお願いいたします。</p>
      <div class="contact__tel-block js-fadeUp">
        <h3 class="contact__tel-title js-fadeUp">お電話でのお問い合わせ</h3>
        <div class="contact__tel-item js-fadeUp">TEL</div>
        <a class="contact__tel-number js-fadeUp" href="tel:049-24-3333">049-24-3333</a>
        <p class="contact__reception-hours js-fadeUp">(受付時間/8:00〜17:00)</p>
      </div>
      <div class="contact__wrapper">
        <div class="contact__form-body js-fadeUp">
          <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
            <?php echo do_shortcode('[contact-form-7 id="a1daaf0" title="コンタクトフォーム"]'); ?>
            <?php endwhile; ?>
            <?php endif;  ?>
        </div>
      </div>
    </div>
  </section>


<?php get_footer(); ?>