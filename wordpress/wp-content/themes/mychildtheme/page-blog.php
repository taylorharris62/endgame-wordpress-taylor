<?php 
/*
	Template Name: Blog
*/
?>
<?php get_header(); ?>
    <div class="panel-content">
	<article class="blog-section">
    <div class="game-single-preview">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/games/big.jpg" />
				
			</div>

		<?php // Display blog posts on any page @ https://m0n.co/l
		$temp = $wp_query; $wp_query= null;
		$wp_query = new WP_Query(); $wp_query->query('posts_per_page=5' . '&paged='.$paged);
		while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

		<h2><a href="<?php the_permalink(); ?>" title="Read more"><?php the_title(); ?></a></h2>
		<?php the_excerpt(); ?>

		<?php endwhile; ?>

		<?php if ($paged > 1) { ?>

		<nav id="nav-posts">
			<div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
			<div class="next"><?php previous_posts_link('Newer Posts &raquo;'); ?></div>
		</nav>

		<?php } else { ?>

		<nav id="nav-posts">
			<div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
		</nav>

		<?php } ?>

		<?php wp_reset_postdata(); ?>

	</article>
        </div>
        <section class="game-author-section">
		<div class="container">
			<div class="game-author-pic set-bg"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/author.jpg" /></button></div>
			<div class="game-author-info">
				<h4>Written by: Michael Williams</h4>
				<p>Vivamus volutpat nibh ac sollicitudin imperdiet. Donec scelerisque lorem sodales odio ultricies, nec rhoncus ex lobortis. Vivamus tincid-unt sit amet sem id varius. Donec elementum aliquet tortor. Curabitur justo mi, efficitur sed eros alique.</p>
			</div>
        </div>
        
    </section>
    	<!-- Newsletter section -->
	<section class="newsletter-section">
		<div class="container">
			<h2>Subscribe to our newsletter</h2>
			<form class="newsletter-form" style="display:flex; margin-bottom:243px;">
				<input type="text" placeholder="ENTER YOUR E-MAIL">
				<button class="site-btn">subscribe <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/double-arrow.png" /></button>
			</form>
		</div>
	</section>
	<!-- Newsletter section end -->
<?php get_footer(); ?>