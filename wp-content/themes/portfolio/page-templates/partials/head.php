<!DOCTYPE html>
<html lang="en">
<head>
  <?php wp_head(); ?>
  <meta charset="UTF-8">
  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico?v=2" />
  <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1" >
  <title><?php bloginfo('title'); ?></title>
  <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,900,300,700|Roboto+Slab' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="<?php bloginfo('template_url');?>/assets/css/style.min.css?<?php echo time(); ?>">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
</head>
<body <?php body_class(); ?>>
