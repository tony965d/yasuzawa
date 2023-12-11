<?php get_header(); ?>

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