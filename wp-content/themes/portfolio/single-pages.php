<section class="wrap">
<?php while(have_posts()) : the_post(); ?>
  <span class="title"><?php the_title(); ?></span>
  <?php the_content('Read More'); ?>
<?php endwhile; ?>
</section>