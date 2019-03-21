<?php get_header();?>
<div class="search-wrap">
<?php while(have_posts()) : the_post(); ?>
  <div class="index-body">
    <?php the_content('Read More'); ?>
  </div>
<?php endwhile; ?>
</div>
<?php get_footer();?>
