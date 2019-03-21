<?php 

  add_theme_support('post-thumbnails');

  add_theme_support('menus');

  add_action('init', 'init_remove_support',100);

  if( function_exists('acf_add_options_page') ) {
  
    acf_add_options_page(array(
      'page_title'  => 'Contact Info',
      'menu_title'  => 'Contact Info',
      'menu_slug'   => 'contact-info',
      'capability'  => 'edit_posts',
      'redirect'    => false
    ));
    
  }


  // function custom_post_type() {
  //  $labels = array(
  //    'name'                => _x( 'Media', 'Post Type General Name', 'text_domain' ),
  //    'singular_name'       => _x( 'Media', 'Post Type Singular Name', 'text_domain' ),
  //    'menu_name'           => __( 'Media', 'text_domain' ),
  //    'parent_item_colon'   => __( 'Parent Item:', 'text_domain' ),
  //    'all_items'           => __( 'All Items', 'text_domain' ),
  //    'view_item'           => __( 'View Item', 'text_domain' ),
  //    'add_new_item'        => __( 'Add New Item', 'text_domain' ),
  //    'add_new'             => __( 'Add New', 'text_domain' ),
  //    'edit_item'           => __( 'Edit Item', 'text_domain' ),
  //    'update_item'         => __( 'Update Item', 'text_domain' ),
  //    'search_items'        => __( 'Search Item', 'text_domain' ),
  //    'not_found'           => __( 'Not found', 'text_domain' ),
  //    'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
  //  );
  //  $args = array(
  //    'label'               => __( 'media', 'text_domain' ),
  //    'description'         => __( 'Media Posts', 'text_domain' ),
  //    'labels'              => $labels,
  //    'supports'            => array( ),
  //    'taxonomies'          => array( 'category', 'post_tag' ),
  //    'hierarchical'        => false,
  //    'public'              => true,
  //    'show_ui'             => true,
  //    'show_in_menu'        => true,
  //    'show_in_nav_menus'   => true,
  //    'show_in_admin_bar'   => true,
  //    'menu_position'       => 5,
  //    'can_export'          => true,
  //    'has_archive'         => true,
  //    'exclude_from_search' => false,
  //    'publicly_queryable'  => true,
  //    'capability_type'     => 'page',
  //  );
  //  register_post_type( 'media', $args );
  // }

  // add_action('pre_get_posts','wpsites_home_page_cpt_filter');

  // // Hook into the 'init' action
  // add_action( 'init', 'custom_post_type', 0 );
?>