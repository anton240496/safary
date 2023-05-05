
<?php get_header(); ?>
<?php the_post(); ?>
<div class="container">

<?php the_content(); ?>
<div class="foto">
  <img  src="<?php the_field('foto1') ?>" alt="">
    <img  src="<?php the_field('foto2') ?>" alt="">

</div>

</div>
<?php get_footer('tour'); ?>
