<?php get_header();?>
  <div class="blog-index">
  <?php while(have_posts()) : the_post(); ?>
    <div class="blog-index__item">
      <?php the_content('Read More'); ?>
    </div>
  <?php endwhile; ?>
  </div>
<?php get_footer();?>
