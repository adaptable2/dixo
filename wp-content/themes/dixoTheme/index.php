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


	<div class="paralax-banner">
		<?php 
			foreach ($banners->posts as $banner):
				$banner_img = wp_get_attachment_url( get_post_thumbnail_id($banner->ID, 'full') );
				$banner_desc = $banner->post_content;
				$banner_custom = get_post_meta($banner->ID);
				$banner_numero = $banner_custom['numero'][0];
				$banner_subtitle = $banner_custom['subtitulo'][0];


		?>		
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
							<!-- <a href="#" class="btn-general">Más información</a> -->
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
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#servicio1" style="background: url(<?php echo get_template_directory_uri(); ?>/img/tab1nav.jpg) no-repeat center / cover">
						<img src="<?php echo get_template_directory_uri(); ?>/img/electricidad.svg" alt="">
						<p>Ahorro energetico</p>
						<div class="btn-general">Más información</div>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#servicio2" style="background: url(<?php echo get_template_directory_uri(); ?>/img/tab2nav.jpg) no-repeat center / cover">
						<img src="<?php echo get_template_directory_uri(); ?>/img/centralizada.svg" alt="">
						<p>Información centralizada</p>
						<div class="btn-general">Más información</div>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#servicio3" style="background: url(<?php echo get_template_directory_uri(); ?>/img/tab3nav.jpg) no-repeat center / cover">
						<img src="<?php echo get_template_directory_uri(); ?>/img/Informacion.svg" alt="">
						<p>Información en tiempo real</p>
						<div class="btn-general">Más información</div>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#servicio4" style="background: url(<?php echo get_template_directory_uri(); ?>/img/tab4nav.jpg) no-repeat center / cover">
						<img src="<?php echo get_template_directory_uri(); ?>/img/seguridad.svg" alt="">
						<p>Control de accesos</p>
						<div class="btn-general">Más información</div>
					</a>
				</li>
			</ul>			
		</div>
		<div class="tab-content col-lg-6 order-lg-0 d-flex">
			<div id="servicio1" class="container-fluid tab-pane active justify-content-center align-items-center" style="background: url(<?php echo get_template_directory_uri(); ?>/img/tab1.png) no-repeat center center/ cover;">
				<img src="<?php echo get_template_directory_uri(); ?>/img/electricidadoscuro.svg" alt="">
				<h2>Ahorro energetico</h2>
				<p>Información centralizada</p>
			</div>
			<div id="servicio2" class="container-fluid tab-pane fade justify-content-center align-items-center" style="background: url(<?php echo get_template_directory_uri(); ?>/img/tab2.jpg) no-repeat center center/ cover;">
				<img src="<?php echo get_template_directory_uri(); ?>/img/centralizadaoscuro.svg" alt="">
				<h2>Información centralizada</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates incidunt vel quis molestiae tempora eius a reiciendis officiis, eum, dolore totam, sit laboriosam! Sapiente sed consequatur deleniti explicabo velit aperiam!</p>
			</div>
			<div id="servicio3" class="container-fluid tab-pane fade justify-content-center align-items-center" style="background: url(<?php echo get_template_directory_uri(); ?>/img/tab3.jpg) no-repeat center center/ cover;">
				<img src="<?php echo get_template_directory_uri(); ?>/img/Informacionoscuro.svg" alt="">
				<h2>Información en tiempo real</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque minima, natus aliquid id incidunt porro reprehenderit officiis impedit consequatur earum sequi aut iusto ex velit autem, laudantium eos recusandae, provident.</p>
			</div>
			<div id="servicio4" class="container-fluid tab-pane fade justify-content-center align-items-center" style="background: url(<?php echo get_template_directory_uri(); ?>/img/tab4.jpg) no-repeat center center/ cover;">
				<img src="<?php echo get_template_directory_uri(); ?>/img/seguridadoscuro.svg" alt="">
				<h2>Control de accesos</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum animi, dolores hic ea qui quis aut totam! Aut, veritatis ipsam harum, et mollitia ea maiores accusamus minima nostrum quia molestias.</p>
			</div>
		</div>			
	</div>
</section>
<!--Servicios-->
<!--Form-->
<section class="container pd-60-top">
	<div class="row">
		<div class="col-12">
			<h2 class="text-center color-verdeoscuro">Contácte nuestros servicios</h2>
		</div>
		<div class="col-md-6 px-0 d-flex justify-content-center"> <img src="<?php echo get_template_directory_uri(); ?>/img/imgcontacto.png" class="img-fluid img-contacto"> </div>
		<div class="col-md-6 px-0 form-contact d-flex align-items-center">
			<div class="form bg-verde w-100">
				<form action="">
					<div class="form-group row">
						<label for="staticEmail" class="col-sm-2 col-form-label">Necesito:</label>
						<div class="col-sm-10">
							<select>
								<option value="volvo">Volvo</option>
								<option value="saab">Saab</option>
								<option value="mercedes">Mercedes</option>
								<option value="audi">Audi</option>
							</select>
						</div>
					</div>
					<div class="form-group row">
						<label for="staticEmail" class="col-sm-2 col-form-label">Mail:</label>
						<div class="col-sm-10">
							<input type="text" class="" id="" value="">
						</div>
					</div>
					<div class="form-group row">
						<label for="staticEmail" class="col-sm-2 col-form-label">Mensaje:</label>
						<div class="col-sm-10">
							<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
						</div>
					</div>

					<input type="submit" value="Enviar">
				</form> 
			</div>
		</div>
	</div>
</section>

<section class="container-fluid">
	<div class="row">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.1557463360637!2d-75.5973396679721!3d6.243195535872841!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e4429465cecfa51%3A0xef4c689daeb0894a!2sActividad+Creativa+Agencia!5e0!3m2!1ses-419!2sco!4v1564700472284!5m2!1ses-419!2sco" width="100%" height="650" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
</section>
<!--Form-->
<?php get_footer(); ?>

