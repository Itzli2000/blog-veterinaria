<?php get_header(); ?>
<?php get_template_part( 'banner' );  ?>
<?php while (have_posts()): the_post(); ?>
  <div id="mainContainer">
    <?php the_content(); ?>

    <h3>Te esperamos en nuestros siguientes horarios:</h3>
    <img class="attention" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/horario.svg" alt="imagen con horarios de atención">
    <h3>Encuentranos en:</h3>
    <div id="addressContainer" class="locationpage">
      <p class="direction"><?php the_field('direccion'); ?></p>
      <p class="phone"><?php the_field('telefono'); ?></p>
    </div>

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d235.0934657942668!2d-99.14163879685339!3d19.477308598895014!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f900e0470001%3A0xd9267fe3b338b33e!2sMi+mascota!5e0!3m2!1ses!2smx!4v1504125676205" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>

  </div>
<?php endwhile ?>
<?php get_footer(); ?>