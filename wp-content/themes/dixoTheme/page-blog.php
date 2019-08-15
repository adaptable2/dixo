<?php get_header(); ?>

<div class="container">
	<div class="row">
		<div class="col-12">
			<h2 class="title-lg text-center">
				BLOG
			</h2>
		</div>
		<div class="col-12">
			<main role="main">
				<!-- section -->
				<section class="color-grisoscuro">
					<?php
						$blogs = get_posts();
						if($blogs):
					?>

						<!-- article -->
						<div class="container">
							<?php foreach ($blogs as $blog):
								$blog_img = wp_get_attachment_url( get_post_thumbnail_id($blog->ID, 'full') );
								$blog_excerpt = get_the_excerpt($blog->ID);
							?>
							<div class="row align-items-center item-blog">
								<?php if($blog_img): ?>
									<div class="col-12 col-md-4">
										<img src="<?php echo $blog_img; ?>" alt="" class="w-100">
									</div>
								<?php endif; ?>
								<div class="col-12 col-md-8">
									<h2><a href="<?php echo $blog->guid; ?>"><?php echo $blog->post_title; ?></a></h2>
									<p><?php echo $blog_excerpt; ?></p>
									<a href="<?php echo $blog->guid; ?>" class="btn-general">Ver más</a>
								</div>
							</div>
							<?php endforeach; ?>
						</div>
						<!-- /article -->

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
