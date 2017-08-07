<?php get_header(); ?>
<?php get_template_part( 'banner' );  ?>
<?php while (have_posts()): the_post(); ?>
  <div id="mainContainer">
    <?php the_content(); ?>
    <div id="ourContainer">
      <div class="innerContainer">
        <h3>Misión</h3>
        <p><?php the_field('mision'); ?></p>
      </div>
      <!-- Slideshow 1 -->
      <ul class="rslides" id="slider1">
        <li><img src="<?php echo get_template_directory_uri() ?>/assets/images/about/1.jpg" alt="about image"></li>
        <li><img src="<?php echo get_template_directory_uri() ?>/assets/images/about/2.jpg" alt="about image"></li>
        <li><img src="<?php echo get_template_directory_uri() ?>/assets/images/about/3.jpg" alt="about image"></li>
      </ul>
    </div>
    <div id="ourContainer">
      <!-- Slideshow 1 -->
      <ul class="rslides" id="slider2">
        <li><img src="<?php echo get_template_directory_uri() ?>/assets/images/about/3.jpg" alt="about image"></li>
        <li><img src="<?php echo get_template_directory_uri() ?>/assets/images/about/2.jpg" alt="about image"></li>
        <li><img src="<?php echo get_template_directory_uri() ?>/assets/images/about/1.jpg" alt="about image"></li>
      </ul>
      <div class="innerContainer">
        <div class="innerContainer">
        <h3>Visión</h3>
          <p><?php the_field('vision'); ?></p>
        </div>
      </div>
    </div>
  </div>
<?php endwhile ?>
<?php get_footer(); ?>