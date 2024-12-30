<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title><?php echo bloginfo('name'); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?php echo esc_url(get_theme_file_uri('img/favicon.ico')) ?>">
    <link rel="stylesheet" type="text/css" href="https://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/reset.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="https://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/6-1-7/css/6-1-7.css">

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <?php wp_head(); ?>
  </head>

<body>
  <header id="header">
    <h1 class="site-title">
      <a href="<?php echo esc_url(home_url()) ?>">
        <img src="<?php echo esc_url(get_theme_file_uri('img/logo.jpg')) ?>" alt="">
      </a>
    </h1>

    <nav id="navi">
      <ul class="menu">
        <li>
          <a href="<?php echo esc_url(home_url('/works')); ?>">
            <img src="<?php echo esc_url(get_theme_file_uri('img/works.svg')) ?>" alt="">制作実績
          </a>
        </li>
        <li>
          <a href="<?php echo esc_url(home_url('#question')); ?>">
            <img src="<?php echo esc_url(get_theme_file_uri('img/questions.svg')) ?>" alt="">よくある質問
          </a>
        </li>
        <li>
          <a href="<?php echo esc_url(home_url('/contact')); ?>">
            <img src="<?php echo esc_url(get_theme_file_uri('img/contact.svg')) ?>" alt="">お問い合わせ
          </a>
        </li>
      </ul>
    </nav>
  
    <div class="hamburger">
      <span></span>
      <span></span>
      <span></span>
    </div>

  </header>


