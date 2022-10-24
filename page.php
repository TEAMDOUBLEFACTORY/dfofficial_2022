<?php get_header(); ?>
        <?php if (is_post_type_archive($post_types = 'works') || is_tax("works_type")) : ?>
            <div class="title-box">
                <div class="container"><h2 class="title"><span class="en orange">Works</span>実績について</h2></div>
            </div>
        <?php elseif (is_single()) : ?>
            <div class="title-box">
                <div class="container"><h2 class="title"><span class="en orange">News</span>お知らせ</h2></div>
            </div>
        <?php elseif (is_singular('works')) : ?>
            <div class="title-box">
                <div class="container"><h2 class="title"><span class="en orange">Works</span>実績について</h2></div>
            </div>
        <?php elseif (is_post_type_archive($post_types = 'blogs') || is_tax("blogs_type")) : ?>
            <div class="title-box">
                <div class="container"><h2 class="title"><span class="en orange">Blog</span>ブログ</h2></div>
            </div>
        <?php elseif (is_singular('blogs')) : ?>
            <div class="title-box">
                <div class="container"><h2 class="title"><span class="en orange">Blogs</span>ブログ</h2></div>
            </div>
        <?php else : ?>
            <div class="title-box">
                <div class="container"><h2 class="title"><span class="en orange"><?php echo esc_html( $post->title ); ?></span><?php echo esc_html( $post->subtitle ); ?></h2></div>
            </div>
        <?php endif; ?>



        <?php if ( have_posts() ) : ?>
          <?php while( have_posts() ) : the_post(); ?>
              <div class="content-box"><?php the_content(); ?></div>
          <?php endwhile;?>
        <?php endif; ?>

<?php get_footer(); ?>