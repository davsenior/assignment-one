<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
    <style>
    </style>
</head>
<body <?php body_class(); ?>>
<header>
    <h1>Welcome to my Assignment One Theme </h1>
      <div>
        <a href="<?php echo esc_url( home_url() );?>">
          <img src="<?php echo esc_url( home_url( 'wp-content/uploads/2024/02/graduate.jpeg' ) ); ?>" alt="header logo">
        </a>
      </div>
      <nav>
        <?php
          wp_nav_menu( array(
            'menu'           => 'main',
            'theme_location' => '',
            'depth'          => 2,
            'fallback_cb'    => false
          ));
        ?>
      </nav>
    </header>
