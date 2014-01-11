<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Responsive WP Prototype</title>
	<link rel="stylesheet" href="style.css" media="all">
</head>

<body class="home">

	<div id="page" class="hfeed side">

		<header id="masthead" class="site-header" role="banner">

			<a href="/">

				<div class="site-logo">Logo</div>

				<div class="site-branding">

					<h1 class="site-title">TC Responsive</h1>

					<h2 class="site-description">Just another responsive WordPress theme.</h2>

				</div>

			</a>

			<nav id="site-navigation" class="main-navigation" role="navigation">

				<a class="skip-link screen-reader-text" href="#content">Skip to content</a>

				<a href="#!" class="menu-toggle"><span>Menu</span></a>

				<div class="menu">

					<ul class="nav-menu">
						<li class="current_page_item"><a href="/">Home</a></li>
						<li class="page_item page-item-2"><a href="#!">Sample Page</a></li>
					</ul>

				</div>

			</nav>
			<!-- // #site-navigation -->

		</header>
		<!-- // #masthead -->

		<div id="content" class="site-content">

			<div id="primary" class="content-area">

				<main id="main" class="site-main" role="main">

					<article id="post-1" class="post-1 post type-post status-publish format-standard hentry category-uncategorized sticky">

						<header class="entry-header">

							<div class="entry-meta">

								<span class="posted-on"><time class="entry-date published" datetime="2013-12-30T04:05:17+00:00">Dec 30 2013</time></span>

							</div>
							<!-- // .entry-meta -->

							<div class="entry-featured-image">

								<img src="images/fpo-1.jpg" width="300" height="198" alt="Photo of a golden forest.">

							</div>
							<!-- // .entry-featured-image -->

							<h1 class="entry-title"><a href="#!" rel="bookmark">Template: Sticky</a></h1>

						</header>

						<div class="entry-content">

							<p>Welcome to WordPress. This is your first post. Edit or delete it, then start blogging!</p>

						</div>
						<!-- // .entry-content -->

						<footer class="entry-meta">

							<span class="comments-link"><a href="#!" title="Comment on Hello world!">1 Comment</a></span>

							<span class="edit-link"><a class="post-edit-link" href="#!">Edit</a></span>

						</footer>
						<!-- // .entry-meta -->

					</article>
					<!-- // #post-## -->

					<article id="post-1" class="post-1 post type-post status-publish format-standard hentry category-uncategorized">

						<header class="entry-header">

							<div class="entry-meta">

								<span class="posted-on"><time class="entry-date published" datetime="2013-12-30T04:05:17+00:00">Dec 30 2013</time></span>

							</div>
							<!-- // .entry-meta -->

							<div class="entry-featured-image">

								<img src="images/fpo-2.jpg" width="300" height="148" alt="Photo of a kitten.">

							</div>
							<!-- // .entry-featured-image -->

							<h1 class="entry-title"><a href="#!" rel="bookmark">Hello world!</a></h1>

						</header>

						<div class="entry-content">

							<p>Welcome to WordPress. This is your first post. Edit or delete it, then start blogging!</p>

						</div>
						<!-- // .entry-content -->

						<footer class="entry-meta">

							<span class="comments-link"><a href="#!" title="Comment on Hello world!">1 Comment</a></span>

							<span class="edit-link"><a class="post-edit-link" href="#!">Edit</a></span>

						</footer>
						<!-- // .entry-meta -->

					</article>
					<!-- // #post-## -->

				</main>
				<!-- // #main -->

			</div>
			<!-- // #primary -->

			<div id="secondary" class="sidebar widget-area" role="complementary">

				<aside id="search" class="widget widget_search">

					<form role="search" method="get" class="search-form" action="#!">

						<label>

							<span class="screen-reader-text">Search for:</span>

							<input type="search" class="search-field" placeholder="Search &hellip;" value="" name="s">

						</label>

						<input type="submit" class="search-submit" value="Search">

					</form>

				</aside>

				<aside id="archives" class="widget">

					<h1 class="widget-title">Archives</h1>

					<ul>
						<li><a href="#!">December 2013</a></li>
					</ul>

				</aside>

				<aside id="meta" class="widget">

					<h1 class="widget-title">Meta</h1>

					<ul>
						<li><a href="http://local.wordpress.dev/wp-admin/">Site Admin</a></li>
						<li><a href="http://local.wordpress.dev/wp-login.php?action=logout&#038;_wpnonce=87853e577f">Log out</a></li>
					</ul>

				</aside>

			</div>
			<!-- // #secondary -->

		</div>
		<!-- // #content -->

		<?php /*
		<footer id="colophon" class="site-footer" role="contentinfo">

			<div class="site-info">

				<a href="http://wordpress.org" rel="generator">Proudly powered by WordPress</a>

				<span class="sep"> | </span>

				Theme: Responsive WP by <a href="http://underscores.me" rel="designer">Underscores.me</a>.

			</div>
			<!-- // .site-info -->

		</footer>
		<!-- // #colophon -->
		*/ ?>

	</div>
	<!-- // #page -->

	<script src="js/jquery-1.10.2.min.js"></script>
	<script src="js/navigation.js"></script>
	<script src="js/skip-link-focus-fix.js"></script>

</body>
</html>
