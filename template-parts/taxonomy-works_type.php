<?php if(!is_tax("works_type","movie")): ?>
<section id="sec01">
  <div class="container">
    <?php
      $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
      $type = get_query_var( 'works_type' );
      $args = array(
          'post_type' => array('works'),
          'tax_query' => array(
              'relation' => 'OR',
              array(
                  'taxonomy' => 'works_type',
                  'field' => 'slug',
                  'terms' => $type,
              ),
          ),
          'paged' => $paged,
          'posts_per_page' => 100,
      ); ?>
      <?php query_posts( $args ); ?>
    <ul class="flex">
      <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
          <li <?php if ($terms = get_the_terms($post->ID, 'secret')) { foreach ( $terms as $term ) { echo 'x' ; }}?>>
            <a href="<?php the_permalink(); ?>">
              <div class="img-box"><?php the_post_thumbnail(''); ?></div>
              <?php $terms = get_the_terms($post->ID,'works_type'); ?>
              <p class="work-title"><?php the_title(); ?></p>
              <span class="category">
                <?php
                $terms = get_the_terms($post->ID, 'works_type');
                if (empty($terms)) {
                  echo "";
                } else {
                 foreach($terms as $term){ echo '<span>'.$term->name.'</span>'; }
                }
                ?>
              </span>
            </a>
          </li>

      <?php endwhile; else: ?>
      <p>表示できるコンテンツがありません</p>
      <?php endif; ?>
    </ul>
    <?php wp_pagenavi(); ?>
  </div>
</section>
<?php else: ?>
<section id="sec01" class="movie-content">
  <div class="container">
    <?php
      $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
      $type = get_query_var( 'works_type' );
      $args = array(
          'post_type' => array('works'),
          'tax_query' => array(
              'relation' => 'OR',
              array(
                  'taxonomy' => 'works_type',
                  'field' => 'slug',
                  'terms' => array('movie'),
              ),
          ),
          'paged' => $paged,
          'posts_per_page' => 100,
      ); ?>
      <?php query_posts( $args ); ?>
    <ul class="flex">
      <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
          <li>
              <button href="https://github.com/appleple/modal-video" class="js-video-vimeo-btn" data-video-id="<?php the_field('movie_id'); ?>">
                  <div class="img-box">
                    <?php $movie_thumbnail = get_field('movie_thumbnail'); if($movie_thumbnail) : ?>
                      <?php echo '<img src="'.$movie_thumbnail.'">'; ?>
                    <?php else : ?>
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dummy.svg">
                    <?php endif ; ?>
                  </div>
                  <h3><?php the_title(); ?></h3>
              </button>
          </li>

      <?php endwhile; else: ?>
      <p>表示できるコンテンツがありません</p>
      <?php endif; ?>
    </ul>
    <?php wp_pagenavi(); ?>
  </div>
</section>
<script>
  window.addEventListener('DOMContentLoaded',function(){
      new ModalVideo(".js-video-vimeo-btn",{channel:'vimeo'});
  });
  </script>

<?php endif; ?>
<script>
  let es = document.querySelectorAll("[x]");

es.forEach(e => {e.parentNode.removeChild(e)});
</script>