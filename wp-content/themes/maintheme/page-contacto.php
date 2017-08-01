
<?php get_header(); ?>
<?php get_template_part( 'banner' );  ?>
<?php while (have_posts()): the_post(); ?>
  <div id="mainContainer">
    <?php the_content(); ?>
    <div id="addressContainer">
      <p class="direction"><?php the_field('direccion'); ?></p>
      <p class="phone"><?php the_field('telefono'); ?></p>
    </div>
    <h3 class="formTitle">Formulario de contacto</h3>
    <?php echo do_shortcode('[contact-form-7 id="113" title="Formulario de contaco"]'); ?>
  </div>
<?php endwhile ?>
<?php get_footer(); ?>