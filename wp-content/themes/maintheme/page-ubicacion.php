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

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d940.3738929862725!2d-99.14213037083921!3d19.477303463537137!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f900e0219d0d%3A0x938ff9ded88c6723!2sPte.+112+157%2C+Panamericana%2C+07770+Ciudad+de+M%C3%A9xico%2C+CDMX!5e0!3m2!1ses-419!2smx!4v1501363920768" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>

  </div>
<?php endwhile ?>
<?php get_footer(); ?>