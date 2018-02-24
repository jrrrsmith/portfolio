<?php

/**
 * Template Name: Bio Page
 */ 

get_header();

?>
<div class="initial-load">
  <div class="initial-load__inner">
    <h1 class="initial-load__top">internet</h1>
    <h1 class="initial-load__bottom">who??</h1>
  </div>
</div>
<section class="contact">
  <div class="wrap">
    <h2 class="page-title">who is jeremy smith?</h2>
    <div class="bio animated bounceInUp">
      <?php the_field('bio');?>
    </div>
    <div class="contact-links">
      <a href="https://github.com/jrrrsmith" target="_blank" class="icon-github"></a>
      <a href="https://www.linkedin.com/in/jeremyscottsmith" target="_blank" class="icon-linkedin"></a>
      <a href="https://twitter.com/jrrrsmith" target="_blank" class="icon-twitter"></a>
    </div> 
  </div>
</section>

<?php get_footer(); ?>
