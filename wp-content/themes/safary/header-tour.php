<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php bloginfo('description'); ?></title>
  <?php wp_head(); ?>
</head>
<body>
  <header class="header">
    <div class="container">
      <div class="header_inner">
        <div class="header_top">
          <?php the_custom_logo(); ?>
          <div class="header_phone">
            <span>Заказ туров и бронирование:</span>
            <a class="header_phone_number" href="tel:<?php the_field('con_telnum',18);?>">тел. <?php the_field('con_tel', 18);?></a>
          </div>
          <div class="menu1">
            <button class="menu_btn" type="button" name="button">
              <span class="row"></span>
            </button>
            <?php wp_nav_menu( [ 'saf_menu' => '%3$s' ] ); ?>
          </div>
        </div>
        <h1 class="header_title">
            <?php the_field('head_title'); ?>
        </h1>
        <div class="header_content">
          <p class="header_desc">
            <?php the_field('head_opisan'); ?>
          </p>
          <a class="header_btn" href="#bron">Оставить заявку</a>
          <div class="header_arrow">
            <a class="header_arrow_link" href="#link">
              <img class="header_inner_img" src="<?php bloginfo('template_url'); ?>/assets/img/arrow.svg" alt="">
            </a>
          </div>
        </div>
      </div>
    </div>
  </header>
