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
  <meta charset="UTF-8">
  <meta name="description" content="EndGam Gaming Magazine Template">
  <meta name="keywords" content="endGam,gGaming, magazine, html">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="https://gmpg.org/xfn/11">
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<!-- Main Stylesheets -->
<link rel="stylesheet" href="css/style.css"/>
<link rel="stylesheet" href="css/owl.carousel.min.css"/>
<link rel="stylesheet" href="css/animate.css"/>
<link rel="stylesheet" href="css/font-awesome.min.css"/>
<link rel="stylesheet" href="css/magnific-popup.css"/>
<link rel="stylesheet" href="css/slicknav.min.css"/>
  <?php wp_enqueue_script("jquery"); ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page" class="site">

	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'endgame' ); ?></a>

  <!-- Header Section -->
  <header id="masthead" class="header-section site-header" style="padding:0px;">
    <div class="header-warp" style="height:0px;">
      <div class="header-social d-flex justify-content-end" style="padding:10px;">
        <p>Follow us:</p>
        <a href="#"><i class="fa fa-pinterest"></i></a>
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-dribbble"></i></a>
        <a href="#"><i class="fa fa-behance"></i></a>
      </div>
      <div class="header-bar-warp d-flex" style="align-items: center; padding:0px 40px 0px;margin:18px">
    		<div class="site-branding site-logo">

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
    		</div><!-- .site-branding -->

      <div class="main-menu primary-menu" style="justify-content:center;">
  		<nav id="site-navigation" class="main-navigation top-nav-area w-100">


  			<button class="menu-toggle " aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'endgame' ); ?></button>
  			<?php
  			wp_nav_menu( array(
  				'theme_location' => 'menu-1',
  				'menu_id'        => 'primary-menu',

  			) );
  			?>


  		</nav><!-- #site-navigation -->
    </div>
  </div>
	</header><!-- #masthead -->
</div>

</body>
</html>
