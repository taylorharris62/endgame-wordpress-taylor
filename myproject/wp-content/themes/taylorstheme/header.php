<html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
	<?php wp_head(); ?>
</head>
<body>
<!-- Header section -->
<header class="header-section">
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
      <a href="home.html" class="site-logo">
        <img src="./img/logo.png" alt="">
      </a>
      <nav class="top-nav-area w-100">
        <div class="user-panel">
          <a href="">Login</a> / <a href="">Register</a>
        </div>
        <!-- Menu -->
        <ul class="main-menu primary-menu">
          <li><a href="home.html">Home</a></li>
          <li><a href="games.html">Games</a>
            <ul class="sub-menu">
              <li><a href="game-single.html">Game Singel</a></li>
            </ul>
          </li>
          <li><a href="review.html">Reviews</a></li>
          <li><a href="blog.html">News</a></li>
          <li><a href="contact.html">Contact</a></li>
        </ul>
      </nav>
    </div>
  </div>
</header>
<!-- Header section end -->

</body>
</html>
