<?php get_header(); ?>
<div class="clearfix">
		<section class="main">
			<img src="<?php echo get_template_directory_uri(); ?>/images/espresso.jpg"/>
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
		<?php get_sidebar(); ?>

</div>
<?php get_footer(); ?>