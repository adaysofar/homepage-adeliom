<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php the_title(); ?></title>

    <link href="<?php bloginfo('template_directory');?>/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

    <?php wp_head(); ?>
  </head>

  <body>

    <div class="header align-items-center">
      <div class="container">
        <div class="row">
          <div class="logo col-6 col-md-2 col-lg-4 order-2 order-md-1">
            <a href="<?php bloginfo('url'); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/EnerD2_logo.png" href="Logo site"></a>
            <?php if(is_home()) : ?>
        	    <h1 class="site-title"><?php bloginfo('name'); ?></h1>
            <?php else : ?>
              <h1 class="site-title"><?php the_title(); ?></h1>
            <?php endif; ?>
          </div>

          <nav class="navbar navbar-expand-md col-3 col-md-9 col-lg-7 order-1 order-md-2" role="navigation">
            <div class="container-fluid justify-content-end">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="" id="navbarTogglerDemo02">
                <?php
                  $menu_name = 'header-menu';
                  if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
                      $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
                   
                      $menu_items = wp_get_nav_menu_items($menu->term_id);
                   
                      $menu_list = '<ul class="nav navbar-nav mr-auto mt-2 mt-lg-0" id="menu-' . $menu_name . '">';
                   
                      foreach ( (array) $menu_items as $key => $menu_item ) {
                          $title = $menu_item->title;
                          $url = $menu_item->url;
                          $menu_list .= '<li class="nav-item"><a class="nav-link" href="' . $url . '">' . $title . '</a></li>';
                      }
                      $menu_list .= '</ul>';
                      echo $menu_list;
                  } else {
                      $menu_list = '<ul><li>Menu "' . $menu_name . '" not defined.</li></ul>';
                      echo $menu_list;
                  }
                ?>
              </div>
            </div><!-- /.container-fluid -->
          </nav>

          <div class="contact-icon col-3 col-md-auto order-3">
            <i class="far fa-envelope"></i>
          </div>
        </div>
      </div>
    </div>