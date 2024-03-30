<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja" xml:lang="ja" style="margin-top: 0 !important;">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta property="og:locale" content="ja_JP">

  <title>
    <?php if(is_front_page() || is_home()){
      echo get_bloginfo('name');
    } else{
      wp_title('|',true,'right'); echo bloginfo('name'); 
    }?>
  </title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css"/>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
	
  <?php wp_head(); ?>

</head>

<?php 
  global $post;
  
  if( $post->post_type != "page" ) {
    $post_slug = $post->post_type;
  } else {
    $post_slug = $post->post_name;
  }
  if( is_archive() || is_category() || is_single() ) {
    $nav_last_category = [];
    $nav_query_categories = get_the_category();
    if(!empty($nav_query_categories)) {
      $nav_last_category = end(array_values($nav_query_categories));
    }
    if (!empty($nav_last_category)) {
      $post_slug = $nav_last_category->slug;
    }
  }
?>

<body>

  <header id="header">
    <div class="header-wrapper">
      <h1 class="header-logo scrollto">
        <a href="<?php echo HOME; ?>">
        <img src="<?php echo T_DIRE_URI; ?>/assets/img/logo.png" class="logo" />
        </a>
      </h1>
      <nav class="header-nav">
        <ul class="nav-menu">
          <li>
            <a href="<?php echo esc_url(home_url('/')); ?>" class="menu-link<?php echo ( is_home() || is_front_page() ) ? ' active' : ''; ?>">
              <span class="jp">Home</span>
            </a>
          </li>
          <li>
            <a href="<?php echo esc_url(home_url('/')); ?>company" class="menu-link<?php echo ($post_slug == 'about') ? ' active' : ''; ?>">
              <span class="jp">会社概要</span>
            </a>
          </li>
          <li>
            <a href="<?php echo esc_url(home_url('/')); ?>service" class="menu-link<?php echo ($post_slug == 'service') ? ' active' : ''; ?>">
              <span class="jp">事業内容</span>
            </a>
          </li>
          <li>
            <a href="<?php echo esc_url(home_url('/')); ?>work" class="menu-link<?php echo ($post_slug == 'example') ? ' active' : ''; ?>">
              <span class="jp">施工事例</span>
            </a>
          </li>
          <!-- <li>
            <a href="<?php echo esc_url(home_url('/')); ?>blog" class="menu-link<?php echo ($post_slug == 'blog') ? ' active' : ''; ?>">
              <span class="jp">お知らせ</span>
            </a>
          </li> -->
        </ul>
      </nav>
    </div>
    <a href="<?php echo esc_url(home_url('/')); ?>contact" class="header-action">
      <i>
        <svg xmlns="http://www.w3.org/2000/svg" width="26.424" height="17.745" viewBox="0 0 26.424 17.745">
          <path id="Path_689" data-name="Path 689" d="M1103.633,65.8l-7.521-14.826,26.424,10.363-6.382,1.507-1.313,5.875-4.4-4.171,3.189-.753.786,3.187,1.021-4.565-17.752-10.322,15.863,11.365Z" transform="translate(-1096.112 -50.971)" fill="#5dce8b"/>
        </svg>
      </i>
      <span>お問い合わせ</span>
    </a>
  </header>

  <div id="mobile-nav">
    <div class="mobile-nav-img">
      <img src="<?php echo T_DIRE_URI; ?>/assets/img/mobile_nav.png" alt="">
    </div>
    <nav class="mobile-nav-container">
      <ul class="mobile-nav-menu">
        <li>
          <a href="<?php echo esc_url(home_url('/')); ?>company" class="menu-link">
            <span class="jp">会社概要</span>
          </a>
        </li>
        <li class="sub_menu">
          <a href="<?php echo esc_url(home_url('/')); ?>company#message" class="menu-link">
            <span class="en">ごあいさつ</span><span class="slash en">/</span>
          </a>
          <a href="<?php echo esc_url(home_url('/')); ?>company#overview" class="menu-link">
            <span class="en">会社情報</span><span class="slash en">/</span>
          </a>
          <a href="<?php echo esc_url(home_url('/')); ?>company#history" class="menu-link">
            <span class="en">沿革</span>
          </a>
        </li>
        <li>
          <a href="<?php echo esc_url(home_url('/')); ?>service" class="menu-link">
            <span class="jp">事業内容</span>
          </a>
        </li>
        <li class="sub_menu">
          <a href="<?php echo esc_url(home_url('/')); ?>service#wood" class="menu-link">
            <span class="en">木造建築事業</span><span class="slash en">/</span>
          </a>
          <a href="<?php echo esc_url(home_url('/')); ?>service#steal" class="menu-link">
            <span class="en">鉄骨建築事業</span><span class="slash en">/</span>
          </a>
          <a href="<?php echo esc_url(home_url('/')); ?>service#civil" class="menu-link">
            <span class="en">土木造成事業</span><span class="slash en">/</span>
          </a>
          <a href="<?php echo esc_url(home_url('/')); ?>service#building" class="menu-link">
            <span class="en">建物解体事業</span>
          </a>
        </li>
        <li>
          <a href="<?php echo esc_url(home_url('/')); ?>work" class="menu-link">
            <span class="jp">施工事例</span>
          </a>
        </li>
        <li>
          <a href="<?php echo esc_url(home_url('/')); ?>blog" class="menu-link">
            <span class="jp">お知らせ</span>
          </a>
        </li>
      </ul>
    </nav>
  </div>

  <main id="main" class="surface-bg">