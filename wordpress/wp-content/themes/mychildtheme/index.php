<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package EndGam
 */

get_header();
?>

<!-- Hero section -->
<div class="hero-section overflow-hidden">
	<div class="hero-slider owl-carousel">
		<div class="hero-item set-bg d-flex align-items-center justify-content-center text-center" data-setbg="./img/slider-bg-1.jpg">
			<div class="container">
				<h2>Game on!</h2>
				<p>Fusce erat dui, venenatis et erat in, vulputate dignissim lacus. Donec vitae tempus dolor,<br>sit amet elementum lorem. Ut cursus tempor turpis.</p>
				<a href="#" class="site-btn">Read More  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/double-arrow.png" /></a>
			</div>
		</div>
		<div class="hero-item set-bg d-flex align-items-center justify-content-center text-center" data-setbg="./img/slider-bg-2.jpg">
			<div class="container">
				<h2>Game on!</h2>
				<p>Fusce erat dui, venenatis et erat in, vulputate dignissim lacus. Donec vitae tempus dolor,<br>sit amet elementum lorem. Ut cursus tempor turpis.</p>
				<a href="#" class="site-btn">Read More  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/double-arrow.png" /></a>
			</div>
		</div>
	</div>
</div>
<!-- Hero section end-->


<!-- Intro section -->
<section class="intro-section">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="intro-text-box text-box text-white">
					<div class="top-meta">11.11.18  /  in <a href="">Games</a></div>
					<h3>The best online game is out now!</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida....</p>
					<a href="#" class="read-more">Read More  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/double-arrow.png" /></a>
				</div>
			</div>
			<div class="col-md-4">
				<div class="intro-text-box text-box text-white">
					<div class="top-meta">11.11.18  /  in <a href="">Playstation</a></div>
					<h3>Top 5 best games in november</h3>
					<p>Ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum  labore suspendisse ultrices gravida....</p>
					<a href="#" class="read-more">Read More  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/double-arrow.png" /></a>
				</div>
			</div>
			<div class="col-md-4">
				<div class="intro-text-box text-box text-white">
					<div class="top-meta">11.11.18  /  in <a href="">Reviews</a></div>
					<h3>Get this game at a promo price</h3>
					<p>Sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida ncididunt ut labore ....</p>
					<a href="#" class="read-more">Read More  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/double-arrow.png" /></a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Intro section end -->


<!-- Blog section -->
<section class="blog-section spad">
	<div class="container">
		<div class="row">
			<div class="col-xl-9 col-lg-8 col-md-7">
				<div class="section-title text-white">
					<h2>Latest News</h2>
				</div>
				<ul class="blog-filter">
					<li><a href="#">Racing</a></li>
					<li><a href="#">Shooters</a></li>
					<li><a href="#">Strategy</a></li>
					<li><a href="#">Online</a></li>
				</ul>
				<!-- Blog item -->
				<div class="blog-item">
					<div class="blog-thumb">
						<img src="./img/blog/1.jpg" alt="">
					</div>
					<div class="blog-text text-box text-white">
						<div class="top-meta">11.11.18  /  in <a href="">Games</a></div>
						<h3>The best online game is out now!</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eius-mod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Lorem ipsum dolor sit amet, consecte-tur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.....</p>
						<a href="#" class="read-more">Read More  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/double-arrow.png" /></a>
					</div>
				</div>
				<!-- Blog item -->
				<div class="blog-item">
					<div class="blog-thumb">
						<img src="./img/blog/2.jpg" alt="">
					</div>
					<div class="blog-text text-box text-white">
						<div class="top-meta">11.11.18  /  in <a href="">Games</a></div>
						<h3>The best online game is out now!</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eius-mod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Lorem ipsum dolor sit amet, consecte-tur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.....</p>
						<a href="#" class="read-more">Read More  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/double-arrow.png" /></a>
					</div>
				</div>
				<!-- Blog item -->
				<div class="blog-item">
					<div class="blog-thumb">
					<img alt="#" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/blog/3.jpg" />

					</div>
					<div class="blog-text text-box text-white">
						<div class="top-meta">11.11.18  /  in <a href="">Games</a></div>
						<h3>The best online game is out now!</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eius-mod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Lorem ipsum dolor sit amet, consecte-tur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.....</p>
						<a href="#" class="read-more">Read More  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/double-arrow.png" /></a>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-4 col-md-5 sidebar">
				<div id="stickySidebar">
					<div class="widget-item">
						<h4 class="widget-title">Trending</h4>
						<div class="trending-widget">
							<div class="tw-item">
								<div class="tw-thumb">
								<img alt="#" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/blog-widget/1.jpg" />

								</div>
								<div class="tw-text">
									<div class="tw-meta">11.11.18  /  in <a href="">Games</a></div>
									<h5>The best online game is out now!</h5>
								</div>
							</div>
							<div class="tw-item">
								<div class="tw-thumb">
									<img alt="#" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/blog-widget/2.jpg" />
								</div>
								<div class="tw-text">
									<div class="tw-meta">11.11.18  /  in <a href="">Games</a></div>
									<h5>The best online game is out now!</h5>
								</div>
							</div>
							<div class="tw-item">
								<div class="tw-thumb">
									<img alt="#" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/blog-widget/3.jpg" />
									
								</div>
								<div class="tw-text">
									<div class="tw-meta">11.11.18  /  in <a href="">Games</a></div>
									<h5>The best online game is out now!</h5>
								</div>
							</div>
							<div class="tw-item">
								<div class="tw-thumb">
								<img alt="#" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/blog-widget/3.jpg" />
								</div>
								<div class="tw-text">
									<div class="tw-meta">11.11.18  /  in <a href="">Games</a></div>
									<h5>The best online game is out now!</h5>
								</div>
							</div>
						</div>
					</div>
					<div class="widget-item">
						<div class="categories-widget">
							<h4 class="widget-title">categories</h4>
							<ul>
								<li><a href="">Games</a></li>
								<li><a href="">Gaming Tips & Tricks</a></li>
								<li><a href="">Online Games</a></li>
								<li><a href="">Team Games</a></li>
								<li><a href="">Community</a></li>
								<li><a href="">Uncategorized</a></li>
							</ul>
						</div>
					</div>
					<div class="widget-item">
					<a href="#" class="add">
					<img alt="#" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/add.jpg" />

					</a>
				</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Blog section end -->

<!-- Intro section -->
<section class="intro-video-section set-bg d-flex align-items-end " data-setbg="./img/promo-bg.jpg">
	<a href="https://www.youtube.com/watch?v=uFsGy5x_fyQ" class="video-play-btn video-popup"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/solid-right-arrow.png" /></a>
	<div class="container">
		<div class="video-text">
			<h2>Promo video of the game</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
		</div>
	</div>
</section>
<!-- Intro section end -->


<!-- Featured section -->
<section class="featured-section">
	<div class="featured-bg set-bg" data-setbg="./img/featured-bg.jpg"></div>
	<div class="featured-box">
		<div class="text-box">
			<div class="top-meta">11.11.18  /  in <a href="">Games</a></div>
			<h3>The game you’ve been waiting  for is out now</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliquamet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vestibulum posuere porttitor justo id pellentesque. Proin id lacus feugiat, posuere erat sit amet, commodo ipsum. Donec pellentesque vestibulum metus...</p>
			<a href="#" class="read-more">Read More  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/double-arrow.png" /></a>
		</div>
	</div>
</section>
<!-- Featured section end-->



<!-- Newsletter section -->
<section class="newsletter-section">
	<div class="container">
		<h2>Subscribe to our newsletter</h2>
		<form class="newsletter-form" style="display:flex; margin-bottom:90px;">
			<input type="text" placeholder="ENTER YOUR E-MAIL">
			<button class="site-btn">subscribe  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/double-arrow.png" /></a></button>
		</form>
	</div>
</section>
<!-- Newsletter section end -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
<?php get_blogpage(); ?>