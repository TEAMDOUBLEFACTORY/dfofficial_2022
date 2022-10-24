<div class="container flex flex-box">
    <div class="left">
        <section id="sec01">
            <?php if ( have_posts() ) : ?>
            <?php while( have_posts() ) : the_post(); ?>
                <h3 class="a1"><?php the_title(); ?></h3>
                <span class="data a1"><span>公開日 <?php the_time('Y.m.d');?></span><span>最終更新日 <?php the_modified_date() ?></span></span>
                <div class="contents">
                    <?php if (has_post_thumbnail()) : ?>
                    <div class="img-box">
                      <?php the_post_thumbnail('post-thumbnail'); ?>
                    </div>
                    <?php endif ; ?>
                    <?php the_content(); ?>
                </div>
                <?php if ( class_exists( 'Vk_Post_Author_Box' ) ) { echo Vk_Post_Author_Box::pad_get_author_box();} ?>
            <?php endwhile;?>
            <?php endif; ?>
            <div class="single-pagenation">
                <div class="prev"><?php previous_post_link('%link', 'Prev'); ?></div>
                <div class="next"><?php next_post_link('%link', 'Next'); ?></div>
            </div>
            <div class="clear"></div>
             <div class="btn-box">
                <a href="<?php echo home_url( '/' ); ?>blogs" class="btn">一覧へ戻る</a>
            </div>
        </section>
    </div>
    <div class="right">
        <?php get_sidebar(); ?>
    </div>
</div>