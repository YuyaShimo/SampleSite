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
  <body>

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
            <div class="header-navi-wrap"> 
              <ul class="header-navi-list">
                <li class="header-navi-item"><a href="#topics"><span>お知らせ</span></a></li>
                <li class="header-navi-item"><a href="#plan"><span>旅行プラン</span></a></li>
                <li class="header-navi-item"><a href="#company-info"><span>企業情報</span></a></li>
                <li class="header-navi-item"><a href="#members"><span>メンバー</span></a></li>
                <li class="header-navi-item"><a href="#recruit"><span>採用情報</span></a></li>
                <li class="header-navi-item"><a href="#contact"><span>お問い合わせ</span></a></li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </header>
    <!--ヘッダーここまで-->