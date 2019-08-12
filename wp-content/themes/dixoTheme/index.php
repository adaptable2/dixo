<?php get_header(); ?>
<!--Banner-->
<?php 
	$argsBanner = array(
	    'post_type' => 'banner', // Nombre del post type
	    'order' => 'ASC',
	    'seccin' => 'home' // Taxonomia nombre tax => item
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
<!--Banner-->
<!--historia-->
<section class="container-fluid">
	<div class="row">
		<div class="col-12">
			<h2 class="title-lg text-center">
				HISTORIA
				<span>Nuestra</span>
			</h2>
		</div>
	</div>
	<div id="carousel3d">
		<carousel-3d :perspective="0" :width="992" :height="450" :space="300" :display="3" :controls-visible="true" :controls-prev-html="'❬'" :controls-next-html="'❭'" :controls-width="30" :controls-height="60" :clickable="true" :autoplay="false">
			<?php 
		    // Argumentos para una busqueda de post type
		    $i = 0;
			$args = array(
			    'post_type' => 'historia', // Nombre del post type
			    'order' => 'ASC'
			);
			$historias = new WP_Query($args);
				if ($historias->posts):
		      // Foreach para recorrer el resultado de la busqueda
				foreach ($historias->posts as $historia):
					$historia_name = $historia->post_title;
					$historia_desc = $historia->post_content;
					$historia_dh = $historia->dh;
		          	$historia_img = wp_get_attachment_url( get_post_thumbnail_id($historia->ID, 'full') ); // Url de la imagen en tamaño Full
	        ?>
			<slide :index="<?php echo $i?>">
				<div class="d-flex">
					<div class="col-md-7 px-0 d-none d-md-flex">
						<img src="<?php echo $historia_img; ?>" alt="" class="img-fluid">
					</div>
					<div class="col-md-5 bg-verde color-grisoscuro text-3d">
						<h2 class="title-3d font-weight-bold"><?php echo $historia_name;?></h2>
						<p class="sub-title font-weight-bold"><?php echo $historia_desc;?></p>
						<p><?php echo $historia_dh;?></p>
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
<!--historia-->
<!--Descripción-->
<?php 
// Argumentos para una busqueda de post type
$args = array(
    'post_type' => 'destacado', // Nombre del post type
    'order' => 'ASC',
    'seccin' => 'home' // Taxonomia nombre tax => item
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
		<div class="col-md-4 d-flex justify-content-center flex-column">
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
<!--Servicios-->
<section class="container-fluid servicios">
	<div class="row">
		<div class="col-lg-6 order-lg-1 px-0">
			<ul class="nav nav-tabs">
				<?php 
				// Argumentos para una busqueda de post type
				$args = array(
				    'post_type' => 'servicio', // Nombre del post type
				    'order' => 'ASC',
				);
				$servicios = new WP_Query($args);
					if ($servicios->posts):
				  // Foreach para recorrer el resultado de la busqueda
					foreach ($servicios->posts as $servicio):
						$servicio_name = $servicio->post_title;
						$servicio_slug = $servicio->post_name;
						$servicio_icontab = pods_field('servicio', $servicio->ID, 'iconotab');
				      	$servicio_img = wp_get_attachment_url( get_post_thumbnail_id($servicio->ID, 'full') ); // Url de la imagen en tamaño Full
				?>
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#<?php echo $servicio_slug;?>" style="background: url(<?php echo $servicio_img; ?>) no-repeat center / cover">
						<img src="<?php echo $servicio_icontab['guid']; ?>" alt="">
						<p><?php echo $servicio_name?></p>
						<div class="btn-general">Más información</div>
					</a>
				</li>
				<?php
					endforeach;
					endif;
				?>
			</ul>			
		</div>
		<div class="tab-content col-lg-6 order-lg-0 d-flex">
			<?php 
				// Argumentos para una busqueda de post type
				$i = 0;
				$args = array(
				    'post_type' => 'servicio', // Nombre del post type
				    'order' => 'ASC'
				);
				$servicios = new WP_Query($args);
					if ($servicios->posts):
				  // Foreach para recorrer el resultado de la busqueda
					foreach ($servicios->posts as $servicio):
						$servicio_desc = $servicio->post_content;
						$servicio_imgc = pods_field('servicio', $servicio->ID, 'imagen_2');
						$servicio_icon = pods_field('servicio', $servicio->ID, 'icono');
						$servicio_name = $servicio->post_title;
						$servicio_slug = $servicio->post_name;
				?> 
					<div id="<?php echo $servicio_slug;?>" class="container-fluid tab-pane <?php echo ($i == 0)?'active':'';?> justify-content-center align-items-center" style="background: url(<?php echo $servicio_imgc['guid']; ?>) no-repeat center center/ cover;">
						<img src="<?php echo $servicio_icon['guid'];?>" alt="">
						<h2><?php echo $servicio_name?></h2>
						<p><?php echo $servicio_desc;?></p>
					</div>
				<?php
					$i++;
					endforeach;
					endif;
				?>
		</div>			
	</div>
</section>
<!--Servicios-->
<!--Form-->
<section class="container pd-60-top" id="contacto">
	<div class="row">
		<?php 
			$contact = get_post('125');
			echo do_shortcode($contact->post_content);
		?>
	</div>
</section>

<section class="container-fluid">
	<div class="row">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.1992837425205!2d-75.59177018505248!3d6.237443695485007!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e4429bb182d02cb%3A0x34ef32c8e11ab97b!2sCra.+68+%2332c-91%2C+Medell%C3%ADn%2C+Antioquia!5e0!3m2!1ses-419!2sco!4v1565645869674!5m2!1ses-419!2sco" width="100%" height="650" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
</section>
<!--Form-->
<?php get_footer(); ?>

