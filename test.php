<?php
/*
Template Name: 非公開実績
*/
get_header(); ?>

  <div class="title-box">
    <div class="container"><h2 class="title"><span class="en orange"><?php echo esc_html( $post->title ); ?></span><?php echo esc_html( $post->subtitle ); ?></h2></div>
  </div>

  <?php if ( have_posts() ) : ?>
    <?php while( have_posts() ) : the_post(); ?>
        <div><?php the_content(); ?></div>
    <?php endwhile;?>
  <?php endif; ?>

<?php get_footer(); ?>