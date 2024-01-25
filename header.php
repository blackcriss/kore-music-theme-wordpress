<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css"> -->
    <!-- Style -->
    <!-- <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css"> -->
    <?php wp_head(); ?>
  </head>
  <body class="bg-dark text-white" <?php body_class(); ?>>
    <!-- navbar -->
    <div class="container-fluid backgroudNegro fixed-top">
        <nav class="navbar navbar-expand-lg navbar-dark backgroudNegro container">
                <a class="navbar-brand" href="<?php echo esc_url( home_url('/') ); ?>">
                  <img src="<?php echo get_template_directory_uri();?>/images/KoreMusicLogo160.png" alt="logo"  class="img-fliud">
                </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

                <?php wp_nav_menu(array(
                    'theme_location' => 'superior',
                    'depth' => 2,
                    'container' => 'div',
                    'container_class' => 'collapse navbar-collapse',
                    'container_id' => 'navbarSupportedContent',
                    'items_wrap' => '<ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-center">%3$s</ul>',
                    'menu_class' => 'nav-item'
                ) ); ?>

          </nav>
    </div>
    <!-- fin navbar -->