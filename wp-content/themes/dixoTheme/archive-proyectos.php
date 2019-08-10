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
					<?php 
					$i = 0;
				    // Argumentos para una busqueda de post type
					$args = array(
					    'post_type' => 'proyectos', // Nombre del post type
					    'order' => 'ASC'
					);
					$proyectos = new WP_Query($args);
						if ($proyectos->posts):
				      // Foreach para recorrer el resultado de la busqueda
						foreach ($proyectos->posts as $proyecto):
							$proyecto_name = $proyecto->post_title;
							$proyecto_slug = $proyecto->post_name;
							$proyecto_icon = pods_field('proyectos', $proyecto->ID, 'icon');
			        ?>
					<li class="nav-item item-option">
						<a class="nav-link <?php echo ($i == 0)?'active':'';?>" data-toggle="pill" href="#<?php echo $proyecto_slug;?>">
							<img src="<?php echo $proyecto_icon['guid'];?>" alt="" class="img-fluid">
							<span class="d-md-none"><?php echo $proyecto_name;?></span>
						</a>
					</li>
					<?php
						$i++;
						endforeach;
						endif;
					?>
				</ul>
			</div>

			<!-- Tab panes -->
			<div class="tab-content tab-content-exito">
				<?php
			    // Argumentos para una busqueda de post type
				$j = 0;
				$args = array(
				    'post_type' => 'proyectos', // Nombre del post type
				    'order' => 'ASC'
				);
				$proyectos = new WP_Query($args);
					if ($proyectos->posts):
			      // Foreach para recorrer el resultado de la busqueda
					foreach ($proyectos->posts as $proyecto):
						$proyecto_desc = $proyecto->post_content;
						$proyecto_name = $proyecto->post_title;
						$proyecto_slug = $proyecto->post_name;
						$proyecto_img = wp_get_attachment_url( get_post_thumbnail_id($proyecto->ID, 'full') );
						$proyecto_icon = pods_field('proyectos', $proyecto->ID, 'icon');
		        ?>
				<div class="tab-pane container <?php echo ($j == 0)?'active':'';?>" id="<?php echo $proyecto_slug;?>">
					<div class="row">
						<div class="col-md-7 d-none d-md-block">
							<img src="<?php echo $proyecto_img;?>" alt="" class="img-fluid">
						</div>
						<div class="col-md-5 d-flex align-items-center">
							<div class="content-tab color-grisoscuro">
								<img src="<?php echo $proyecto_icon['guid'];?>" alt="" class="img-fluid">
								<h2><?php echo $proyecto_name;?></h2>
								<p><?php echo $proyecto_desc;?></p>
								<a href="" class="btn-general">Contactar</a>
							</div>
						</div>
					</div>
				</div>
				<?php
					$j++;
					endforeach;
					endif;
				?>
				</div>
			</div>
		</div>
	</section>



<?php get_footer(); ?>