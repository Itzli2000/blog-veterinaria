<?php
/*
Template Name: blog-banner
*/
?>
<?php 
$blog_page = get_option('page_for_posts');
$image = get_post_thumbnail_id($blog_page);
$image = wp_get_attachment_image_src( $image, 'full');
?>
<header id="banner" class="home" style="background-image: url('<?php echo $image[0];?>')">
  <div id="bannerColor">
    <h1><?php echo get_the_title($blog_page); ?></h1>
  </div>
  <div id="menuContainer">
    <div id="bannerMenu">
      <a class="logoLink" href="<?php echo get_bloginfo( 'url' ).'/blog'?>">
        <span class="logo">
          <?php bloginfo(name); ?>
        </span>
      </a>
      <nav class="mainMenu"> <!-- Burger menu -->
        <div id="nav-icon1">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </nav>
      <nav id="mobileMenu" class="active"> <!-- Mobile menu -->
        <ul class="links"> 
          <?php 
          $args = array(
            'theme_location' => 'header-menu',
            'container' => 'nav',
            'container_class' => 'menu-links'
            );
          wp_nav_menu($args);
          ?>
        </ul>
      </nav>
      <nav id="largeMenu"> <!-- Mobile menu -->
        <?php 
        $args = array(
          'theme_location' => 'header-menu',
          'container' => 'nav',
          'container_class' => 'menu-links'
          );
        wp_nav_menu($args);
        ?>
      </nav>
    </div>
  </div>
</header>