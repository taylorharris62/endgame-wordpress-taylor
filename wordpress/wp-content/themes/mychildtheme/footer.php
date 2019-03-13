<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package EndGam
 */

?>

	<!-- #content -->

	<footer id="colophon" class="site-footer footer-section" style="margin-top: 0px;">
		<!-- Footer section -->
			<div class="container">
				<div class="footer-left-pic">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/footer-left-pic.png" />
				</div>
				<div class="footer-right-pic">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/footer-right-pic.png" />
					
				</div>
				<a href="#" class="footer-logo">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo.png" />
				</a>

				
			  		<nav id="site-navigation" class="main-navigation top-nav-area w-100">


  			<div class="main-menu footer-menu" text-align="center">  
			<?php
  			wp_nav_menu( array(
  				'theme_location' => 'menu-3',
				'menu_id'		 =>	'footer-menu',
  			) );
  			?>
			

				<div class="copyright">
					<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'endgame' ) ); ?>">
						<?php
						/* translators: 1: Theme name, 2: Theme author. */
						printf( esc_html__( 'Theme: %1$s by %2$s.', 'endgame' ), 'endgame', '<a href="http://underscores.me/">Taylor Harris</a>' );
						?>
						 2019 @ All rights reserved</div>
			</div>
			  </div>
<!-- .site-info -->
	</footer><!-- #colophon -->
	<!-- Footer section end -->


	<!--====== Javascripts & Jquery ======-->
	<script src="./js/jquery-3.2.1.min.js"></script>
	<script src="./js/bootstrap.min.js"></script>
	<script src="./js/jquery.slicknav.min.js"></script>
	<script src=".//js/owl.carousel.min.js"></script>
	<script src="./js/jquery.sticky-sidebar.min.js"></script>
	<script src="./js/jquery.magnific-popup.min.js"></script>
	<script src="./js/main.js"></script>



<?php wp_footer(); ?>

</body>
</html>