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

	</div><!-- #content -->

	<footer id="colophon" class="site-footer footer-section">
		<!-- Footer section -->
			<div class="container">
				<div class="footer-left-pic">
					<img src="/wp-content/themes/mychildtheme/assets/img/footer-left-pic.png" alt="">
				</div>
				<div class="footer-right-pic">
					<img src="/wp-content/themes/mychildtheme/assets/img/footer-right-pic.png" alt="">
				</div>
				<a href="#" class="footer-logo">
					<img src="/wp-content/themes/mychildtheme/assets/img/logo.png" alt="">
				</a>
				<ul class="main-menu footer-menu">
					<li><a href="">Home</a></li>
					<li><a href="">Games</a></li>
					<li><a href="">Reviews</a></li>
					<li><a href="">News</a></li>
					<li><a href="">Contact</a></li>
				</ul>
				<div class="copyright"><a href="">Taylor Harris</a> 2019 @ All rights reserved</div>
			</div>

		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'endgame' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'endgame' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'endgame' ), 'endgame', '<a href="http://underscores.me/">Taylor Harris</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->


<?php wp_footer(); ?>
