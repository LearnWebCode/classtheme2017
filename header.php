<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  
<div class="container">
  
  <header class="site-header">
    <h1><a href="<?php echo esc_url(home_url()) ?>"><?php bloginfo('name') ?></a></h1>
      <?php
        wp_nav_menu(array(
          'theme_location' => 'headerMenu'
        ));
      ?>
  </header>