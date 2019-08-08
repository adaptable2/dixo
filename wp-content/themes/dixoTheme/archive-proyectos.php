<?php get_header(); ?>

<?php 
$argsBanner = array(
	    'post_type' => 'banner', // Nombre del post type
	    'order' => 'ASC',
	    'seccin' => 'proyectos' // Taxonomia nombre tax => item
	);
	$banners = new WP_Query($argsBanner);
	if($banners):
?>
	<div class="paralax-banner">
		<?php 
		foreach ($banners->posts as $banner):
			$banner_img = wp_get_attachment_url( get_post_thumbnail_id($banner->ID, 'full') );
			$banner_desc = $banner->post_content;
			$banner_custom = get_post_meta($banner->ID);
			$banner_subtitle = $banner_custom['subtitulo'][0];


			?>
			<section class="banner-principal d-flex justify-content-start align-items-center" style="background-image: url('<?php echo $banner_img; ?>')" id="inicio">
				<div class="col-md-5 offset-md-2">
					<div class="text-banner d-inline-block">
						<div class="d-flex">
							<div class="col-12 pr-0">
								<h2 class="font-weight-light color-verde">
									<?php echo $banner_desc; ?>
									<span class="font-weight-bold d-block color-grisoscuro"><?php echo $banner_subtitle; ?></span>
								</h2>
								<a href="#" class="btn-general">Más información</a>
							</div>
						</div>
					</div>
				</div>
			</section>
			<?php 
		endforeach;
		?>
	</div>
	<?php 
endif;
?>

<section class="container">
	<div class="row">
		<div class="col-12">
			<h2 class="title-lg text-center">
				ÉXITO
				<span>CASOS DE</span>
			</h2>
		</div>
		<div class="col-12">
			<div class="select-mobile">
				<div class="option d-block d-md-none">
				</div>
				<ul class="nav nav-pills options-mobile d-none d-md-flex w-100 justify-content-between">
					<li class="nav-item item-option">
						<a class="nav-link active" data-toggle="pill" href="#menu0">
							<img src="<?php echo get_template_directory_uri(); ?>/img/velez.png" alt="" class="img-fluid">
							<span class="d-md-none">Velez</span>
						</a>
					</li>
					<li class="nav-item item-option">
						<a class="nav-link" data-toggle="pill" href="#menu1">
							<img src="<?php echo get_template_directory_uri(); ?>/img/u.png" alt="" class="img-fluid">
							<span class="d-md-none">Universidad</span>
						</a>
					</li>
					<li class="nav-item item-option">
						<a class="nav-link" data-toggle="pill" href="#menu2">
							<img src="<?php echo get_template_directory_uri(); ?>/img/directa.png" alt="" class="img-fluid">
							<span class="d-md-none">Directa</span>
						</a>
					</li>
					<li class="nav-item item-option">
						<a class="nav-link" data-toggle="pill" href="#menu3">
							<img src="<?php echo get_template_directory_uri(); ?>/img/eafit.png" alt="" class="img-fluid">
							<span class="d-md-none">Eafir</span>
						</a>
					</li>
					<li class="nav-item item-option">
						<a class="nav-link" data-toggle="pill" href="#menu4">
							<img src="<?php echo get_template_directory_uri(); ?>/img/viva.png" alt="" class="img-fluid">
							<span class="d-md-none">Viva</span>
						</a>
					</li>
					<li class="nav-item item-option">
						<a class="nav-link" data-toggle="pill" href="#menu5">
							<img src="<?php echo get_template_directory_uri(); ?>/img/leonisa.png" alt="" class="img-fluid">
							<span class="d-md-none">Leonisa</span>
						</a>
					</li>
					<li class="nav-item item-option">
						<a class="nav-link" data-toggle="pill" href="#menu6">
							<img src="<?php echo get_template_directory_uri(); ?>/img/mane.png" alt="" class="img-fluid">
							<span class="d-md-none">Mane</span>
						</a>
					</li>
				</ul>
			</div>

			<!-- Tab panes -->
			<div class="tab-content tab-content-exito">
				<div class="tab-pane container active" id="menu0">
					<div class="row">
						<div class="col-md-7 d-none d-md-block">
							<img src="<?php echo get_template_directory_uri(); ?>/img/img-tab.png" alt="" class="img-fluid">
						</div>
						<div class="col-md-5 d-flex align-items-center">
							<div class="content-tab color-grisoscuro">
								<img src="<?php echo get_template_directory_uri(); ?>/img/icon-content.png" alt="" class="img-fluid">
								<h2>Cueros Vélez</h2>
								<p>Automatización de sistemas de seguridad electrónica en plantas</p>
								<a href="" class="btn-general">Contactar</a>
							</div>
						</div>
					</div></div>
					<div class="tab-pane container fade" id="menu1">
						<div class="row">
							<div class="col-md-7 d-none d-md-block">
								<img src="<?php echo get_template_directory_uri(); ?>/img/img-tab.png" alt="" class="img-fluid">
							</div>
							<div class="col-md-5 d-flex align-items-center">
								<div class="content-tab color-grisoscuro">
									<img src="<?php echo get_template_directory_uri(); ?>/img/icon-content.png" alt="" class="img-fluid">
									<h2>Universidad</h2>
									<p>Automatización de sistemas de seguridad electrónica en plantas</p>
									<a href="" class="btn-general">Contactar</a>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane container fade" id="menu2">
						<div class="row">
							<div class="col-md-7 d-none d-md-block">
								<img src="<?php echo get_template_directory_uri(); ?>/img/img-tab.png" alt="" class="img-fluid">
							</div>
							<div class="col-md-5 d-flex align-items-center">
								<div class="content-tab color-grisoscuro">
									<img src="<?php echo get_template_directory_uri(); ?>/img/icon-content.png" alt="" class="img-fluid">
									<h2>Directa</h2>
									<p>Automatización de sistemas de seguridad electrónica en plantas</p>
									<a href="" class="btn-general">Contactar</a>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane container fade" id="menu3">
						<div class="row">
							<div class="col-md-7 d-none d-md-block">
								<img src="<?php echo get_template_directory_uri(); ?>/img/img-tab.png" alt="" class="img-fluid">
							</div>
							<div class="col-md-5 d-flex align-items-center">
								<div class="content-tab color-grisoscuro">
									<img src="<?php echo get_template_directory_uri(); ?>/img/icon-content.png" alt="" class="img-fluid">
									<h2>Eafit</h2>
									<p>Automatización de sistemas de seguridad electrónica en plantas</p>
									<a href="" class="btn-general">Contactar</a>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane container fade" id="menu4">
						<div class="row">
							<div class="col-md-7 d-none d-md-block">
								<img src="<?php echo get_template_directory_uri(); ?>/img/img-tab.png" alt="" class="img-fluid">
							</div>
							<div class="col-md-5 d-flex align-items-center">
								<div class="content-tab color-grisoscuro">
									<img src="<?php echo get_template_directory_uri(); ?>/img/icon-content.png" alt="" class="img-fluid">
									<h2>Viva</h2>
									<p>Automatización de sistemas de seguridad electrónica en plantas</p>
									<a href="" class="btn-general">Contactar</a>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane container fade" id="menu5">
						<div class="row">
							<div class="col-md-7 d-none d-md-block">
								<img src="<?php echo get_template_directory_uri(); ?>/img/img-tab.png" alt="" class="img-fluid">
							</div>
							<div class="col-md-5 d-flex align-items-center">
								<div class="content-tab color-grisoscuro">
									<img src="<?php echo get_template_directory_uri(); ?>/img/icon-content.png" alt="" class="img-fluid">
									<h2>Leonisa</h2>
									<p>Automatización de sistemas de seguridad electrónica en plantas</p>
									<a href="" class="btn-general">Contactar</a>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane container fade" id="menu6">
						<div class="row">
							<div class="col-md-7 d-none d-md-block">
								<img src="<?php echo get_template_directory_uri(); ?>/img/img-tab.png" alt="" class="img-fluid">
							</div>
							<div class="col-md-5 d-flex align-items-center">
								<div class="content-tab color-grisoscuro">
									<img src="<?php echo get_template_directory_uri(); ?>/img/icon-content.png" alt="" class="img-fluid">
									<h2>Mane</h2>
									<p>Automatización de sistemas de seguridad electrónica en plantas</p>
									<a href="" class="btn-general">Contactar</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>



<?php get_footer(); ?>