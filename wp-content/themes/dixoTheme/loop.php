<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="container">
			<div class="row align-items-center item-blog">

		<!-- post thumbnail -->
		<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
			<div class="col-12 col-md-4">
				<?php the_post_thumbnail(array(200,200)); // Declare pixel size you need inside the array ?>
			</div>
		<?php endif; ?>
		<!-- /post thumbnail -->
		<div class="col-12 col-md-8">

			<!-- post title -->
			<h2>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
			</h2>
			<!-- /post title -->

			<?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>
			<a href="<?php the_permalink(); ?>" class="btn-general">Ver más</a>
		</div>

	</article>
	<!-- /article -->

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
