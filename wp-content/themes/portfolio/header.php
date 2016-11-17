<?php include 'page-templates/partials/head.php'  ?>
<div class="menu-button">
  <span></span>
</div>
<header class="header">
  <video poster="<?php bloginfo('template_url');?>/assets/images/coding.jpg" id="bgvid" playsinline autoplay muted loop>
    <source src="<?php bloginfo('template_url');?>/assets/video/coding.webm" type="video/webm">
    <source src="<?php bloginfo('template_url');?>/assets/video/coding.mp4" type="video/mp4">
  </video>
  <div class="wrap">
    <?php
        wp_nav_menu( array( 
          'theme_location' => 'primary',
          'menu_class' => 'header__nav'
        ) );
    ?>
  </div>
</header>
<div id="page">