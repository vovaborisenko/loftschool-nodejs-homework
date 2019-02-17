<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> <?php  ?> </title>
    <meta name="theme-color" content="">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="shortcut icon" href=" <?php echo get_template_directory_uri() ?>/img/favicons/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href=" <?php echo get_template_directory_uri() ?>/img/favicons/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="57x57" href=" <?php echo get_template_directory_uri() ?>/img/favicons/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href=" <?php echo get_template_directory_uri() ?>/img/favicons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href=" <?php echo get_template_directory_uri() ?>/img/favicons/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href=" <?php echo get_template_directory_uri() ?>/img/favicons/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href=" <?php echo get_template_directory_uri() ?>/img/favicons/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href=" <?php echo get_template_directory_uri() ?>/img/favicons/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href=" <?php echo get_template_directory_uri() ?>/img/favicons/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href=" <?php echo get_template_directory_uri() ?>/img/favicons/apple-touch-icon-180x180.png">

	<?php wp_head(); ?>
</head>
  <body><!-- Header -->
    <header class="header">
      <div class="container"><a class="logo" href="<?php home_url( ) ?>" title="Главная страница | Служба замков"><img class="logo__img" src=" <?php echo get_template_directory_uri() ?>/img/logo.png" alt="Служба замков" title="Главная страница | Служба замков">
          <div class="logo__name">Служба замков</div></a>
        <div class="info"><i class="icon-marker"></i><span class="info__region">Москва и Московская область</span><i class="icon-watch"></i><span class="info__work-time">Круглосуточно</span><a class="info__phone phone" href="tel:+74958888888"><i class="icon-phone"></i><span class="phone__code">8 495</span><span class="phone__number">888-88-88</span></a></div>
      </div>
    </header><!-- End Header -->
<!-- Menu -->
    <nav class="nav">
      <div class="nav__mobile unvisible">
        <div class="gamburger"></div>
      </div>
      <?php 
          wp_nav_menu( array(
            'theme_location'  => 'primary',
            'menu'            => '', 
            'container'       => 'div', 
            'container_class' => 'nav__desktop', 
            'container_id'    => '',
            'menu_class'      => 'desktop__items', 
            'menu_id'         => '',
            'echo'            => true,
            'fallback_cb'     => 'wp_page_menu',
            'before'          => '',
            'after'           => '',
            'link_before'     => '',
            'link_after'      => '',
            'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
            'depth'           => 0,
            'walker'          => '',
          ) );
          ?>
      <!-- <div class="nav__desktop">
        <ul class="desktop__items">
          <li class="desktop__item"><a class="link" href="#">О&nbsp;нас</a></li>
          <li class="desktop__item"><a class="link" href="#">Наши&nbsp;услуги</a>
            <ul class="desktop__items desktop__item-parent">
              <li class="desktop__item"><a class="link" href="#">Вскрытие&nbsp;дверей</a></li>
              <li class="desktop__item"><a class="link" href="#">Ремонт&nbsp;замков</a></li>
              <li class="desktop__item"><a class="link" href="#">Замена&nbsp;замков</a></li>
              <li class="desktop__item"><a class="link" href="#">Вскрытие&nbsp;сейфов</a></li>
              <li class="desktop__item"><a class="link" href="#">Вскрытие&nbsp;автомобилей</a></li>
              <li class="desktop__item"><a class="link" href="#">Ремонт&nbsp;дверей</a></li>
            </ul>
          </li>
          <li class="desktop__item"><a class="link" href="#">Цены</a></li>
          <li class="desktop__item"><a class="link" href="#">Контакты</a></li>
          <li class="desktop__item"><a class="link" href="#">Вопросы&nbsp;и&nbsp;ответы</a></li>
          <li class="desktop__item"><a class="link" href="#">Отзывы</a></li>
        </ul>
      </div> -->
    </nav><!-- End Menu -->
