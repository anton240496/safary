<?php
/*
Template Name: home
*/
?>
<?php get_header(); ?>
<div class="direction">
   <div class="container">
     <div class="direction_inner">
       <?php
       global $post;

       $myposts = get_posts([
         'numberposts' => -1,
         'category' => 3
       ]);

       if( $myposts ){
         foreach( $myposts as $post ){
           setup_postdata( $post );
           ?>
           <div class="direction_item">
               <?php   the_post_thumbnail(
                 array(256,110),
                 array('class' => 'direction_img')); ?>
                 <h4 class="description_text"><?php the_title(); ?></h4>
             </div><?php
           }}wp_reset_postdata(); // Сбрасываем $post?>
     </div>
   </div>
 </div>
  <section class="travel_info" id="link">
   <div class="container">
     <h2  class="travel_info_title title">Основные направления</h2>
     <div class="travel_info_items">
       <?php
       global $post;

       $myposts = get_posts([
         'numberposts' => -1,
         'category' => 4
       ]);

       if( $myposts ){
         foreach( $myposts as $post ){
           setup_postdata( $post );
           ?>
           <div class="travel_info_item">
               <?php   the_post_thumbnail(
                 array(85,85),
                 array('class' => 'travel_info_img')); ?>
                 <p class="travel_info_text"><?php the_title(); ?></p>
             </div><?php
           }}wp_reset_postdata(); // Сбрасываем $post?>
     </div>
   </div>
 </section>
<section class="popular">
   <div class="container">
     <h2 class="popular_title title">Популярные предложения</h2>
     <div class="popular_items">
       <?php
       global $post;

       $myposts = get_posts([
         'numberposts' => -1,
         'category' => 5
       ]);

       if( $myposts ){
         foreach( $myposts as $post ){
           setup_postdata( $post );
           ?>
           <a  href="#" class="popular_link">
               <?php   the_post_thumbnail(
                  /* array(85,85), */
                 array()); ?>
                 <div class="popular_opisan">
                   <h4 class="popular_link_title"><?php the_title(); ?></h4>
                   <p class="travpopular_priceel_info_text"><?php the_content(); ?></p>
                 </div>
             </a><?php
           }}wp_reset_postdata(); // Сбрасываем $post?>
              </div>
     </div>
 </section>
 <section class="map">
   <div class="container">
     <h2 class="map_title title">Карта Африки</h2>
     <iframe class="map_iframe" src="<?php the_field('map');?>"
      width="100%"; height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
   </div>
 </section>
 <section class="about">
   <div class="container">
     <div class="about_inner">
       <div class="about_content">
         <h2 class="about_title title"><?php the_field('about_title');?></h2>
         <p class="about_text"><?php the_field('about_opisan');?></p>
         <a class="about_link" href="<?php echo get_page_link(232); ?>">Читать подробней</a>
       </div>
       <div class="about_popup" style="background-image: url(<?php the_field('about_prevvideo');?>">
         <a class="popup_link" href="<?php the_field('about_videos');?>">
           <img class="about_link_img" src="<?php bloginfo('template_url'); ?>/assets/img/popup.svg" alt="">
         </a>
       </div>
     </div>
   </div>
 </section>
   <section class="gallery">
   <div class="container">
     <div class="gallery_top">
       <h2 class="gallery_title title">Фотогалерея</h2>
       <a class="gallery_link" href="<?php echo get_page_link(253); ?>">Перейти в раздел</a>
     </div>
     <div class="gallery_slider">
       <!-- <div class="gallery_item"> -->
         <?php
         global $post;

         $myposts = get_posts([
           'numberposts' => -1,
           'category' => 6
         ]);

         if( $myposts ){
           foreach( $myposts as $post ){
             setup_postdata( $post );
             ?>
             <!-- <div class="gallery_item">
               <div class="gallery_item_inner">


                 </div>
                  </div> -->
                  <div class="gallery_item">
                  <div class="gallery_item_inner">
                  <a class="gallery_item_link" href="<?php the_field('fotos') ?>">
                    <img class="gallery_item_img" src="<?php the_field('fotog') ?>" alt="">
                  </a>
                </div>
                </div>
               <?php
             }
           }
           wp_reset_postdata(); // Сбрасываем $post
           ?>
     </div>
   </div>
 </section>
  <section class="tour">
   <div class="container">
     <h2 class="tour_title title">Сафари тур премиум класса</h2>
     <div class="tour_box">
       <?php the_field('tour_opisan');?>
     </div>
     <div class="tour_info">
       <?php the_field('tour_prim');?>
     </div>
   </div>
 </section>
  <section class="booking" id="bron">
   <div class="container">
     <h2 class="booking_title title">Забронируйте отдых в Африке</h2>
     <form class="booking_from">
         <?php echo do_shortcode('[contact-form-7 id="14" title="Контактная форма 1"]') ?>
     </form>
   </div>
 </section>
<?php get_footer(); ?>
