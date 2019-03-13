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
get_header(); ?>

<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>EndGam - Gaming Magazine Template</title>
	<meta charset="UTF-8">
	<meta name="description" content="EndGam Gaming Magazine Template">
	<meta name="keywords" content="endGam,gGaming, magazine, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i,900,900i" rel="stylesheet">


	<!-- Stylesheets -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="assets/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="assets/css/slicknav.min.css"/>
	<link rel="stylesheet" href="assets/css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="assets/css/magnific-popup.css"/>
	<link rel="stylesheet" href="assets/css/animate.css"/>

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="css/style.css"/>


	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>

	<!-- Header section end -->


	<!-- Page top section -->
	<section class="page-top-section set-bg" style="background-image: url(../wp-content/themes/mychildtheme/assets/img/4.jpg);">
		<div class="page-info">
			<h2>Contact</h2>
			<div class="site-breadcrumb">
				<a href="">Home</a>  /
				<span>Contact</span>
			</div>
		</div>
	</section>
	<!-- Page top end-->


	<!-- Contact page -->
	<section class="contact-page">
		<div class="container">
			<div class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14376.077865872314!2d-73.879277264103!3d40.757667781624285!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1546528920522" style="border:0" allowfullscreen></iframe></div>
			<div class="row">
				<div class="col-lg-7 order-2 order-lg-1">
					<form class="contact-form" action="mail.php">
						<input type="text" placeholder="Your name">
						<input type="text" placeholder="Your e-mail">
						<input type="text" placeholder="Subject">
						<textarea placeholder="Message"></textarea>
						<button class="site-btn">Send message<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/double-arrow.png" /></button>
					</form>
				</div>
				<div class="col-lg-5 order-1 order-lg-2 contact-text text-white">
					<h3>Howdy! Say hello</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.....</p>
					<div class="cont-info">
						<div class="ci-icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/location.png" alt="" /></div>
						<div class="ci-text">Main Str, no 23, New York</div>
					</div>
					<div class="cont-info">
						<div class="ci-icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/phone.png" alt="" /></div>
						<div class="ci-text">+546 990221 123</div>
					</div>
					<div class="cont-info">
						<div class="ci-icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/mail.png" alt="" /></div>
						<div class="ci-text">hosting@contact.com</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Contact page end-->


	<!-- Newsletter section -->
	<section class="newsletter-section">
		<div class="container">
			<h2>Subscribe to our newsletter</h2>
			<form class="newsletter-form" style="display:flex; margin-bottom:90px;">
				<input type="text" placeholder="ENTER YOUR E-MAIL">
				<button class="site-btn">subscribe <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/double-arrow.png" /></button>
			</form>
		</div>
	</section>
	<!-- Newsletter section end -->



	</body>
</html>
<?php get_footer(); ?>