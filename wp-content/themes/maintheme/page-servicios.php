<?php get_header(); ?>
<?php get_template_part( 'banner' );  ?>
<?php while (have_posts()): the_post(); ?>
  <div id="mainContainer">
    <?php the_content(); ?>
    <!-- Cicle to show products on cards -->
    <h3>A continuación te mostramos los productos que ponemos a tu alcance</h3>
    <div id="products">
      <?php 
      $args = array(
        'post_type' => 'productosblog',
        'posts_per_page' => 1000,
        'orderby' => 'title',
        'order' => 'ASC'
        );
      $proye = new WP_Query($args);
      while ($proye->have_posts()): $proye->the_post();
      ?>
      <div id="cardContainer">
        <!-- Card Publish-->
        <div class="post-module">
          <!-- Thumbnail-->
          <div class="thumbnail">
            <img src="<?php the_post_thumbnail(); ?>"/>
          </div>
          <!-- Post Content-->
          <div class="post-content">
            <div class="category"><?php the_category(); ?></div>
            <h1 class="title"><?php the_title(); ?></h1>
            <h2 class="sub_title truncate"><?php the_content(); ?></h2>
            <div class="card-description"><?php the_content(); ?></div>
          </div>
        </div>
      </div>
    <?php endwhile; wp_reset_postdata(); ?>
  </div>
</div>
<?php endwhile ?>

<?php get_footer(); ?>