<?php

/**
 * Template Name: Work Page
 */

?>
<section class="work">
<?php while(have_posts()) : the_post(); ?>
  <div class="wrap">
    <h2 class="page-title">Selected Works.</h2>
    <div class="work__grid">
      <?php if( have_rows('work') ): ?>
        <?php while( have_rows('work') ): the_row(); ?>
          <a class="work__item animated bounceInUp" href="<?php the_sub_field('link')?>" target="_blank">
            <img src="<?php the_sub_field('image')?>" />
            <h3><?php the_sub_field('title')?></h3>
          </a>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>
<?php endwhile; ?>
</section>