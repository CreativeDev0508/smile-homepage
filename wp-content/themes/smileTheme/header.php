<!DOCTYPE html>
<html lang="jp">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>

  <title><?php bloginfo('name') ?></title>
  <?php wp_head(); ?>
</head>

<body>
  <header>
    <div class="header-logo">
      <a href="<?php echo esc_url(home_url('/')); ?>">
        <div class="logo-layout">
          <img src="<?php echo get_template_directory_uri() ?>/assets/imgs/logo.png" alt="logo" class=" wow flipInY">
          <h1 class="wow fadeIn"><?php bloginfo('name') ?></h1>
        </div>
      </a>

      <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
      </a>
    </div>
    <div class="header-nav" id="myLinks">
      <ul>
        <li><a href="<?php echo esc_url(home_url('/')); ?>">ホーム</a></li>
        <li><a href="<?php echo esc_url(home_url('/')); ?>what">スマイル福祉共済会とは</a></li>
        <li><a href="<?php echo esc_url(home_url('/')); ?>welfare">複利厚生</a></li>
        <li><a href="<?php echo esc_url(home_url('/')); ?>insurance">各種保険</a></li>
        <li><a href="<?php echo esc_url(home_url('/')); ?>disaster">災害見舞金制度</a></li>
        <li><a href="<?php echo esc_url(home_url('/')); ?>join">加入方法</a></li>
        <li><a href="<?php echo esc_url(home_url('/')); ?>inquiry">お問い合わせ</a></li>
      </ul>
    </div>
  </header>
  <main>
    <section id="news" class="news">
      