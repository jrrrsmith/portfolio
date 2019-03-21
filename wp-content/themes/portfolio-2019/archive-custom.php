<?php

/**
 * Template Name: Custom Post Type
 */

get_header(); 

?>
<section class="wrap">
    <?php while ( have_posts() ) : the_post(); ?>
      <span class="title"><?php the_title(); ?></span>
    <?php endwhile; ?>
</section>
<?php get_footer(); ?>