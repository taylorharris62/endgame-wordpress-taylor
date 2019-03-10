<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package EndGam
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="EndGam Gaming Magazine Template">
	<meta name="keywords" content="endGam,gGaming, magazine, html">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

	<link rel="profile" href="https://gmpg.org/xfn/11">
  <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
  <!--====== Javascripts & Jquery ======-->
  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.slicknav.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.sticky-sidebar.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/main.js"></script>

  <?php wp_enqueue_script("jquery"); ?>
	<?php wp_head(); ?>
</head>

<header id="masthead" class="header-section">
<div class="site-header">

<!-- #site-navigation -->

  <div class="header-warp">
    <div class="header-social d-flex justify-content-end">
      <p>Follow us:</p>
      <a href="#"><i class="fa fa-pinterest"></i></a>
      <a href="#"><i class="fa fa-facebook"></i></a>
      <a href="#"><i class="fa fa-twitter"></i></a>
      <a href="#"><i class="fa fa-dribbble"></i></a>
      <a href="#"><i class="fa fa-behance"></i></a>
    </div>
    <div class="header-bar-warp d-flex">
      <!-- site logo -->
      <div class="site-branding">
        <?php
        the_custom_logo();
        if ( is_front_page() && is_home() ) :
          ?>
          <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
          <?php
        else :
          ?>
          <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
          <?php
        endif;
        $endgame_description = get_bloginfo( 'description', 'display' );
        if ( $endgame_description || is_customize_preview() ) :
          ?>
          <p class="site-description"><?php echo $endgame_description; /* WPCS: xss ok. */ ?></p>
        <?php endif; ?>
      </div>

      <nav class="top-nav-area w-100 main-navigation main-menu primary-menu" id="site-navigation">


        <?php
        wp_nav_menu( array(
          'theme_location' => 'menu-1',
          'menu_id'        => 'primary-menu',
        ) );
        ?>

      </nav>

    </div>
  </div>
</div>
</header>


	<!-- Header section end -->

	<div id="content" class="site-content">
