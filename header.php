<!DOCTYPE html>
<html>
<head>

	<meta http-equiv="Content-Type" content="<?php bloginfo( 'html_type' ); ?>; charset=<?php bloginfo( 'charset' ); ?>">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css"/>
	<?php wp_head(); ?>
	<title><?php bloginfo('name'); ?></title>
	<script src="http://use.edgefonts.net/josefin-slab.js"></script>
	<script src="http://use.edgefonts.net/merriweather.js"></script>
</head>
	<body <?php body_class( $class ); ?>>
		<header>
			<h1><?php bloginfo('name'); ?></h1>
			<nav>
				<?php wp_nav_menu( array( 'menu' => 'Main Nav') ); ?>
				<!-- <ul>
					<li>Coffee</li>
					<li>Almojábanas</li>
				</ul> -->
			</nav>
		</header>