<?php get_header(); ?>
<?php 
	$argsBanner = array(
	    'post_type' => 'banner', // Nombre del post type
	    'order' => 'ASC',
	    'seccin' => 'equipo-de-trabajo' // Taxonomia nombre tax => item
	);
	$banners = new WP_Query($argsBanner);
	if($banners):
?>
<div class="owl-carousel">
	<?php 
		foreach ($banners->posts as $banner):
			$banner_img = wp_get_attachment_url( get_post_thumbnail_id($banner->ID, 'full') );
			$banner_desc = $banner->post_content;
			$banner_custom = get_post_meta($banner->ID);
			$banner_numero = $banner_custom['numero'][0]; // sitio
			$banner_subtitle = $banner_custom['subtitulo'][0];


	?>
	<div>
		<section class="banner-principal d-flex justify-content-start align-items-center" style="background-image: url('<?php echo $banner_img; ?>')" id="inicio">
			<div class="col-md-5 offset-md-2">
				<div class="text-banner d-inline-block">
					<div class="d-flex">
						<div class="col-2 col-md-3 px-0 color-verdeoscuro text-right">
							<h2 class="num-banner"><?php echo $banner_numero; ?></h2>
						</div>
						<div class="col-10 col-md-9 pr-0">
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
				TRABAJO
				<span>EQUIPO DE</span>
			</h2>
		</div>
	</div>
</section>
<section class="container">
	<div id="carouselequipo">
		<carousel-3d :perspective="0" :width="768" :height="400" :space="300" :display="3" :controls-visible="true" :controls-prev-html="'❬'" :controls-next-html="'❭'" :controls-width="30" :controls-height="60" :clickable="true" :autoplay="false">
			<?php 
		    // Argumentos para una busqueda de post type
		    $i = 0;
			$args = array(
			    'post_type' => 'equipo', // Nombre del post type
			    'order' => 'ASC'
			);
			$equipos = new WP_Query($args);
				if ($equipos->posts):
		      // Foreach para recorrer el resultado de la busqueda
				foreach ($equipos->posts as $equipo):
					$equipo_name = $equipo->post_title;
					$equipo_desc = $equipo->post_content;
		          	$equipo_img = wp_get_attachment_url( get_post_thumbnail_id($equipo->ID, 'full') ); // Url de la imagen en tamaño Full
	        ?>
			<slide :index="<?php echo $i;?>" class="col-12">
				<div class="row">
					<div class="col-4 col-md-3 align-items-center ">
						<img src="<?php echo $equipo_img ?>" alt="" class="d-inline-block">
					</div>
					<div class="col-8 col-md-9 d-flex align-items-center">
						<h2 class="title-3d"><?php echo $equipo_name;?></h2>
					</div>
					<div class="col-12 color-grisoscuro text-3d">
						<?php echo $equipo_desc;?>
					</div>
				</div>
			</slide>
		    <?php
		    	$i++;
		    	endforeach;
		  		endif; 
		  	?>
		</carousel-3d>
	</div>
</section>
<!--Descripción-->

<?php 
// Argumentos para una busqueda de post type
$args = array(
    'post_type' => 'destacado', // Nombre del post type
    'order' => 'ASC',
    'seccin' => 'equipo-de-trabajo' // Taxonomia nombre tax => item
);
$destacados = new WP_Query($args);
	if ($destacados->posts):
  // Foreach para recorrer el resultado de la busqueda
	foreach ($destacados->posts as $destacado):
		$destacado_desc = $destacado->post_content;
      	$destacado_img = wp_get_attachment_url( get_post_thumbnail_id($destacado->ID, 'full') ); // Url de la imagen en tamaño Full
?>
<section class="container pd-60-top">
	<div class="row">
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
