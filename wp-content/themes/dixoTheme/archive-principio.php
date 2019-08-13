<?php get_header(); ?>

<?php 
	$argsBanner = array(
	    'post_type' => 'banner', // Nombre del post type
	    'order' => 'ASC',
	    'seccin' => 'principios' // Taxonomia nombre tax => item
	);
	$banners = new WP_Query($argsBanner);
	if($banners):
?>


	<div class="owl-carousel">
		<?php 
			foreach ($banners->posts as $banner):
				$banner_img = wp_get_attachment_url( get_post_thumbnail_id($banner->ID, 'full') );
				$banner_desc = $banner->post_content;
				$banner_url = $banner->url;
				$banner_custom = get_post_meta($banner->ID);
				$banner_numero = $banner_custom['numero'][0];
				$banner_subtitle = $banner_custom['subtitulo'][0];


		?>	
		<div>
		<section class="banner-principal d-flex justify-content-start align-items-center" style="background-image: url('<?php echo $banner_img;?>')" id="inicio">
			<div class="col-md-5 offset-md-2">
				<div class="text-banner d-inline-block">
					<div class="d-flex">
						<div class="col-2 col-md-3 px-0 color-verdeoscuro text-right">
							<h2 class="num-banner"><?php echo $banner_numero;?></h2>
						</div>
						<div class="col-10 col-md-9 pr-0">
							<h2 class="font-weight-light color-verde">
								<?php echo $banner_desc;?>
								<span class="font-weight-bold d-block color-grisoscuro"><?php echo $banner_subtitle;?></span>
							</h2>
							<a href="<?php echo $banner_url;?>" class="btn-general">Contactar</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		</div>	
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
					PRINCIPIOS
				</h2>
			</div>
			<?php 
		    // Argumentos para una busqueda de post type
		    $i = 1;
			$args = array(
			    'post_type' => 'principio', // Nombre del post type
			    'order' => 'ASC'
			);
			$principios = new WP_Query($args);
				if ($principios->posts):
		      // Foreach para recorrer el resultado de la busqueda
				foreach ($principios->posts as $pricipio):
					$pricipio_name = $pricipio->post_title;
					$pricipio_descripcion = $pricipio->descripcion;

	        ?>
			<div class="col-md-4 principio">
				<div class="row">
					<div class="col-12 col-md-3 px-md-0 color-verdeoscuro text-md-center">
						<h2 class="num-banner"><?php echo $i;?></h2>
					</div>
					<div class="col-12 col-md-9 pr-0">
						<h2 class="font-weight-light color-verdeoscuro">
							<?php echo $pricipio_name;?>
							<span class="font-weight-bold d-block color-grisoscuro"><?php echo $pricipio_desc;?></span>
						</h2>
						<p><?php echo $pricipio_descripcion;?></p>
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
	<!--Descripción-->

<?php 
// Argumentos para una busqueda de post type
$args = array(
    'post_type' => 'destacado', // Nombre del post type
    'order' => 'ASC',
    'seccin' => 'principios' // Taxonomia nombre tax => item
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
			<div class="col-md-6 d-flex justify-content-center align-items-end"> <img src="<?php echo $destacado_img; ?>" alt="" class="img-fluid description-img"></div>
			<div class="col-lg-5 col-xl-4 d-flex flex-column">
				<div class="description-content color-grisoscuro">
					<p><?php echo $destacado_desc;?></p>
					<a href="#" class="btn-general">Más información</a>
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