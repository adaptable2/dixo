<?php get_header(); ?>
<div class="container">
	<div class="row">
		<div class="col-12">
			<main role="main">
				<!-- section -->
				<section class="color-grisoscuro">

			<h1><?php echo sprintf( __( '%s resultados encontrados para ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
				<!-- /section -->
			</main>
			
		</div>
	</div>
</div>

<?php get_footer(); ?>
