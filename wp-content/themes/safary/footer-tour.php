<footer class="footer">
 <div class="container">
   <div class="footer_logo">
     <!-- <a class="logo" href="#">
       <img class="logo_img" src="<?php bloginfo('template_url'); ?>/assets/img/logo.svg" alt="">
     </a> -->
       <?php the_custom_logo(); ?>
   </div>
   <div class="footer_box">
     <div class="footer_info">
       <p class="footer_box_title">Турагентство «<?php the_field('con_name');?>»</p>
       <p class="footer_copy">© <?php the_field('kon_autor');?>. Все права защищены</p>
       <a class="footer_link" href="#">Политика конфиденциальности</a>
     </div>
     <div class="footer_adress">
       <p class="footer_box_title">Адрес:</p>
       <p class="footer_adress_text"><?php the_field('adress');?></p>
       </div>
       <div class="footer_contacts">
         <p class="footer_box_title">Заказ туров и бронирование:</p>
         <a class="footer_phone" href="tel:<?php the_field('con_telnum');?>">тел. <?php the_field('con_tel');?></a>
         <a class="footer_mail" href="mailto:<?php the_field('con_mail_adress');?>">e-mail: <?php the_field('con_mail');?></a>
       </div>
     </div>
   </div>
 </footer>
 <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script src="js/slick.min.js"></script>
 <script src="js/jquery.magnific-popup.min.js"></script>
 <script src="js/main.js"></script> -->
 <?php wp_footer(); ?>
</body>
</html>
