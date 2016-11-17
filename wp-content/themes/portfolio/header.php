<?php include 'page-templates/partials/head.php'  ?>
<header class="header wrap">
  <?php
      wp_nav_menu( array( 
        'theme_location' => 'primary',
        'menu_class' => 'header__nav'
      ) );
  ?>
</header>
<div id="page">