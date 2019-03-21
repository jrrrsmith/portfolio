<?php include 'page-templates/partials/head.php'  ?>
<header class="header wrap">
  
  <div class="navigation-menu">
    <?php
      wp_nav_menu( array(
        'theme_location' => 'primary',
        'menu_class'     => 'primary-menu',
        'menu'           => 'Primary'
       ) );
    ?>
  </div>

</header>
<div id="page">