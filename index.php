<!DOCTYPE html>
<html>
<head>
	<script src="http://use.edgefonts.net/josefin-slab.js"></script>
	<script src="http://use.edgefonts.net/merriweather.js"></script>
	<title><?php bloginfo('name'); ?></title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>"/>
</head>
	<body>
		<header>
			<h1><?php bloginfo('name'); ?></h1>
			<nav>
				<ul>
					<li>Home</li>
					<li>WordPress</li>
				</ul>
			</nav>
		</header>
		<section>
			<img src="<?php bloginfo('stylesheet_directory'); ?>/images/espresso.jpg"/>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<section>
				<a href="<?php the_permalink(); ?>"><h1><?php the_title_attribute(); ?></h1></a>
				<?php the_content(); ?>
				<!--<p>Tinto Café is a coffee shop in Bogotá, Colombia. We serve organic coffee roast made from local Colombian beans.</p>
				<p>We also bake fresh almojábanas daily.</p> -->
			</section>
		<?php endwhile; else :?>
			<p><?php_e('Sorry, no content'); ?></p>
		<?php endif; ?>
		</section>
		<footer>
			<h1>Contact Us</h1>
			<p>Tinto Café</p>
			<p>Calle 85 #9-52, Bogotá, Colombia</p>
			<p>Phone: +57 (1) 000-0000</p>
		</footer>
	</body>
</html>