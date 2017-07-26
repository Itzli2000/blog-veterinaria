<?php get_header(); ?>
<?php get_template_part( 'banner' );  ?>
<?php while (have_posts()): the_post(); ?>
<div id="mainContainer">
  <?php the_content(); ?>
</div>
<?php endwhile ?>
<?php get_footer(); ?>