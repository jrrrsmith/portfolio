<?php include 'page-templates/partials/head.php'  ?>
<div class="logo-title big-jerm">
  <span>internet</span>
  <span>smith</span>
</div>
<div class="menu-button-bg"></div>
<div class="menu-button">
  <span></span>
</div>
<header class="header">
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