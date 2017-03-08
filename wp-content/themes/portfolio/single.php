<?php get_header();?>
  <div class="post-item">
  <?php while(have_posts()) : the_post(); ?>
    <div class="blog-post">
      <?php the_content('Read More'); ?>
    </div>
  <?php endwhile; ?>
  </div>
<?php get_footer();?>
