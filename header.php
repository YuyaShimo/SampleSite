<!DOCTYPE html>
  <html lang="ja">
  <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="<?php bloginfo( 'description' ); ?>" />
  <title><?php bloginfo( 'name' ); ?></title>
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/normalize.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jquery.bxslider.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.bxslider.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.fadethis.min.js"></script>
  <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>

    <!--ヘッダーここから-->
    <header class="header">
      <div class="header-bg">
        <div class="header-cat">
          <div class="header-logo">
            <h1> World Tourist</h1>
          </div>
          <input type="checkbox" id="hamburger">
          <label for="hamburger">
            <span class="hamburger-icon">
              <i></i>
              <i></i>
              <i></i>
            </span>
          </label>
          <nav class="header-navi">
<?php
  wp_nav_menu(
    array(
      'theme_location' => 'place_footer'
    )
  );
?>
          </nav>
        </div>
      </div>
    </header>
    <!--ヘッダーここまで-->

    <?php if( is_front_page() ): ?>
   <!--メインビジュアルここから-->
   <article class="mainvisual">
      <div class="slider">
        <div>
          <img src="<?php echo get_template_directory_uri(); ?>/images/osaka.jpg" alt="">
        </div>
        <div>
          <img src="<?php echo get_template_directory_uri(); ?>/images/kyoto.jpg" alt="">
          </div>
        <div>
          <img src="<?php echo get_template_directory_uri(); ?>/images/hawaii.jpg" alt="">
        </div>
        <div>
          <img src="<?php echo get_template_directory_uri(); ?>/images/Okinawa.jpg" alt="">
        </div>
        <div>
          <img src="<?php echo get_template_directory_uri(); ?>/images/Shingapore.jpg" alt="">
        </div>
      </div>
    </article>
    <!--メインビジュアルここまで-->
<?php else: ?>
  <div class="page-wrapper">
  <?php echo get_main_image(); ?>
    <h2><?php echo get_main_title(); ?></h2>
  </div>
<?php endif; ?>