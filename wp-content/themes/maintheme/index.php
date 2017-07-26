<?php get_header(); ?>
<?php get_template_part( 'blog-banner' );  ?>
<div id="mainContainer" class="posts">
  <div id="postsColumn">
    <?php while (have_posts()): the_post(); ?>
      <div id="eachPost">
        <div class="post_image">
          <div class="cut_image">
            <?php the_post_thumbnail(); ?>
          </div>
        </div>
        <div class="author">
          <div class="date">
            <time >
              <span class="day"><?php echo the_time('d'); ?></span>
              <span class="month"><?php echo the_time('M'); ?></span>
            </time>
          </div>
          <span class="post_by">Publicado por: </span>
          <span><?php the_field('autor') ?></span>
        </div>
        <div class="post_cont">
          <?php the_excerpt(); ?>
          <a href="<?php the_permalink(); ?>" class="post_button">Leer más</a>
        </div>
      </div>
    <?php endwhile ?>
  </div>
  <div id="widgetColumn">
    <?php get_sidebar(); ?>
  </div>
</div>
<div id="paginationContainer">
  <div class="pagination">
    <?php echo paginate_links(); ?>
  </div>
</div>
<?php get_footer(); ?>  