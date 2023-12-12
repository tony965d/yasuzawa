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
  
  <section class="contact">
    <div class="contact__inner inner">

      
      <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
      <?php echo do_shortcode('[]'); ?>
      <?php endwhile; ?>
      <?php endif;  ?>
        
    </div>
  </section>


<?php get_footer(); ?>