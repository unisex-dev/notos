<?php ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> >

  <head>

    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
  <title><?php bloginfo( 'name' ); ?> <?php wp_title('', true,''); ?></title>
 <?php wp_head(); ?>

  </head>

<body class="wp-embed-responsive">
<div id="notos-header">
    <header id="menusobre">
    <nav class="navbar jsmenu navbar-expand-md navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand sobrex" href="<?php bloginfo( 'url' ); ?>">
          <img class="img-logo img-fluid" src="<?php echo get_theme_mod( 'your_theme_logo' ); ?>" alt="<?php bloginfo( 'name' ); ?> "></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <?php
            wp_nav_menu( array(
              'theme_location'  => 'navbar',
              'container'       => false,
              'menu_class'      => '',
              'fallback_cb'     => '__return_false',
              'items_wrap'      => '<ul class="navbar-nav ml-auto">%3$s</ul>',
              'depth'           => 2,
              'walker'          => new b4st_walker_nav_menu()
            ) );
          ?>
        <?php get_template_part('navbar-search'); ?>
        </div>
      </div>
    </nav>
 </header>
</div>
