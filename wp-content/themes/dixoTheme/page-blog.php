<?php get_header(); ?>

<div class="container">
	<div class="row">
		<div class="col-12">
			<main role="main">
				<!-- section -->
				<section class="color-grisoscuro">
					<?php if (have_posts()): while (have_posts()) : the_post(); ?>

						<!-- article -->
						<div class="container">
							<div class="row align-items-center item-blog">
								<div class="col-12 col-md-4">
									<img src="http://localhost/dixo/wp-content/uploads/2019/08/lineadirecta.png" alt="" class="w-100">
								</div>
								<div class="col-12 col-md-8">
									<h2><a href="">NOTIMAGAZINE1</a></h2>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia eligendi laborum maxime harum ex nihil quas saepe porro expedita, ullam eveniet voluptatem, accusantium optio officia beatae. Aliquam odio, quasi autem?
									</p>
									<a href="" class="btn-general">Ver más</a>
								</div>
							</div>
							<div class="row align-items-center item-blog">
								<div class="col-12">
									<h2><a href="">NOTIMAGAZINE1</a></h2>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia eligendi laborum maxime harum ex nihil quas saepe porro expedita, ullam eveniet voluptatem, accusantium optio officia beatae. Aliquam odio, quasi autem?
									</p>
									<a href="" class="btn-general">Ver más</a>
								</div>
							</div>
						</div>
						<!-- /article -->

					<?php endwhile; ?>

					<?php else: ?>

						<!-- article -->
						<article>

							<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

						</article>
						<!-- /article -->

					<?php endif; ?>

				</section>
				<!-- /section -->
			</main>
			
		</div>
	</div>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
