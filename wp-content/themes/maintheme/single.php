<?php get_header(); ?>
<?php get_template_part( 'banner' );  ?>
<?php while (have_posts()): the_post(); ?>
  <div id="mainContainer">
    <h3><?php the_title(); ?></h3>
    <div class="single_post_image">
      <?php the_post_thumbnail(); ?>
    </div>
    <div class="author single_author">
      <div class="date">
        <time >
          <span class="day"><?php echo the_time('d'); ?></span>
          <span class="month"><?php echo the_time('M'); ?></span>
        </time>
      </div>
      <span class="post_by">Publicado por: </span>
      <span><?php the_field('autor') ?></span>
    </div>
    <?php the_content(); ?>
    <div class="postsComment commentLink">
      <ul class="listComment">
        <?php 
        $comments = get_comments(array(
          'post_id' => $post->ID,
          'status' => 'approve'
          ));
        wp_list_comments( array( 
          'per_page' => 10,
          'reverse_top_level' => false 
          ), $comments);
          ?>
        </ul>
      </div>
      <div id="mainComment" class="commentLink">
        <?php comment_form(); ?>
      </div>
    </div>
  <?php endwhile ?>
  <?php get_footer(); ?>