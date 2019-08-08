<?php get_header(); ?>
<?php 
	$argsBanner = array(
	    'post_type' => 'banner', // Nombre del post type
	    'order' => 'ASC',
	    'seccin' => 'asi-lo-hacemos' // Taxonomia nombre tax => item
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
				HACEMOS
				<span>ASÍ LO</span>
			</h2>
		</div>
	</div>
	<?php 
	// Argumentos para una busqueda de post type
		$args = array(
		'post_type' => 'hacen', // Nombre del post type
		'order' => 'ASC'
		);
		$hacemos = new WP_Query($args);
		if ($hacemos->posts):
		// Foreach para recorrer el resultado de la busqueda
		foreach ($hacemos->posts as $hacen):
			$hacen_name = $hacen->post_title;
			$hacen_desc = $hacen->post_content;
		  	$hacen_img = wp_get_attachment_url( get_post_thumbnail_id($hacen->ID, 'full') ); // Url de la imagen en tamaño Full
	?>
	<div class="row hacemos-item">
		<div class="col-md-6 hacemos-img"><img src="<?php echo $hacen_img; ?>" alt="" class="img-fluid"></div>
		<div class="col-md-6 col-lg-4 hacemos-text d-flex align-items-center px-md-0 color-grisoscuro">
			<h2><?php echo $hacen_name;?></h2>
			<p><?php echo $hacen_desc;?></p>
		</div>
	</div>
	<?php
    	endforeach;
  		endif; 
  	?>
</section>

<section class="container">
	<div class="row justify-content-around">
		<div class="col-12">
			<h2 class="title-lg text-center">
				HACEMOS?
				<span>¿PARA QUÉ LO</span>
			</h2>
		</div>
		<?php 
		// Argumentos para una busqueda de post type
			$i = 1;
			$args = array(
			'post_type' => 'lo_hacen', // Nombre del post type
			'order' => 'ASC'
			);
			$hacemos = new WP_Query($args);
			if ($hacemos->posts):
			// Foreach para recorrer el resultado de la busqueda
			foreach ($hacemos->posts as $hacen):
				$hacen_desc = $hacen->post_content;
			  	$hacen_img = wp_get_attachment_url( get_post_thumbnail_id($hacen->ID, 'full') ); // Url de la imagen en tamaño Full
		?>		
		<div class="col-md-2 paraque-hacemos">
			<div class="row">
				<div class="col-4 px-0 color-verdeoscuro text-right"><h2><?php echo $i;?></h2></div>
				<div class="col-8 d-flex justify-content-center align-items-start">
					<img src="<?php echo $hacen_img; ?>" alt="" class="img-fluid">
				</div>
				<div class="col-12 px-md-0">
					<p>
						<?php echo $hacen_desc;?>
					</p>
				</div>
			</div>
		</div>
		<?php
			$i++;
	    	endforeach;
	  		endif; 
	  	?>
	</div>
</section>

<?php 
// Argumentos para una busqueda de post type
$args = array(
    'post_type' => 'destacado', // Nombre del post type
    'order' => 'ASC',
    'seccin' => 'asi-lo-hacemos' // Taxonomia nombre tax => item
);
$destacados = new WP_Query($args);
	if ($destacados->posts):
  // Foreach para recorrer el resultado de la busqueda
	foreach ($destacados->posts as $destacado):
		$destacado_sub = $destacado->subtitulo;
		$destacado_desc = $destacado->post_content;
      	$destacado_img = wp_get_attachment_url( get_post_thumbnail_id($destacado->ID, 'full') ); // Url de la imagen en tamaño Full
?>
<section class="container pd-60-top">
	<div class="row">
		<div class="col-12">
			<h2 class="text-center color-verdeoscuro l-height"><?php echo $destacado_sub;?></h2>
		</div>
		<div class="col-md-6 d-flex justify-content-center align-items-end"> <img src="<?php echo $destacado_img;?>" alt="" class="img-fluid description-img"></div>
		<div class="col-md-5 d-flex justify-content-center flex-column">
			<div class="description-content color-grisoscuro">
				<p><?php echo $destacado_desc;?></p>
				<!-- <a href="#" class="btn-general">Más información</a> -->
			</div>
		</div>
	</div>
</section>

<?php
	endforeach;
	endif;
?>
<!--Descripción-->


<?php get_footer(); ?>
