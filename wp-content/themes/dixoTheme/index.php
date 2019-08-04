<?php get_header(); ?>
<div class="d-none" id="home"><!--Banner-->
	<div class="paralax-banner">
		<section class="banner-principal d-flex justify-content-start align-items-center" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/banner.jpg')" id="inicio">
			<div class="col-md-5 offset-md-2">
				<div class="text-banner d-inline-block">
					<div class="d-flex">
						<div class="col-2 col-md-3 px-0 color-verdeoscuro text-right">
							<h2 class="num-banner">8</h2>
						</div>
						<div class="col-10 col-md-9 pr-0">
							<h2 class="font-weight-light color-verde">
								AÑOS
								<span class="font-weight-bold d-block color-grisoscuro">LOREM IPSUM</span>
							</h2>
							<a href="#" class="btn-general">Más información</a>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
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
			<carousel-3d :perspective="0" :width="992" :height="450" :space="500" :display="3" :controls-visible="true" :controls-prev-html="'❬'" :controls-next-html="'❭'" :controls-width="30" :controls-height="60" :clickable="true" :autoplay="false">
				<slide :index="0">
					<div class="d-flex">
						<div class="col-md-7 px-0 d-none d-md-flex">
							<img src="<?php echo get_template_directory_uri(); ?>/img/carousel.jpg" alt="" class="img-fluid">
						</div>
						<div class="col-md-5 bg-verde color-grisoscuro text-3d">
							<h2 class="title-3d font-weight-bold">2010</h2>
							<p class="sub-title font-weight-bold">Nace el deseo por construir una compañía enfocada en la telemetría</p>
							<p>La telemetría era la concepción inicial. Al principio solo existía la idea de crear una compañía que solucionara las necesidades de este tipo, obteniendo los datos que se pueden dar de un lugar a otro de una manera inalámbrica. Así fue como empezamos a trabajar en el desarrollo de todo lo que se podía medir a distancia.</p>
						</div>
					</div>
				</slide>
				<slide :index="1">
					<div class="d-flex">
						<div class="col-md-7 px-0 d-none d-md-flex">
							<img src="<?php echo get_template_directory_uri(); ?>/img/carousel.jpg" alt="" class="img-fluid">
						</div>
						<div class="col-md-5 bg-verde color-grisoscuro text-3d">
							<h2 class="title-3d font-weight-bold">2011</h2>
							<p class="sub-title font-weight-bold">Nace el deseo por construir una compañía enfocada en la telemetría</p>
							<p>La telemetría era la concepción inicial. Al principio solo existía la idea de crear una compañía que solucionara las necesidades de este tipo, obteniendo los datos que se pueden dar de un lugar a otro de una manera inalámbrica. Así fue como empezamos a trabajar en el desarrollo de todo lo que se podía medir a distancia.</p>
						</div>
					</div>
				</slide>
				<slide :index="2">
					<div class="d-flex">
						<div class="col-md-7 px-0 d-none d-md-flex">
							<img src="<?php echo get_template_directory_uri(); ?>/img/carousel.jpg" alt="" class="img-fluid">
						</div>
						<div class="col-md-5 bg-verde color-grisoscuro text-3d">
							<h2 class="title-3d font-weight-bold">2012</h2>
							<p class="sub-title font-weight-bold">Nace el deseo por construir una compañía enfocada en la telemetría</p>
							<p>La telemetría era la concepción inicial. Al principio solo existía la idea de crear una compañía que solucionara las necesidades de este tipo, obteniendo los datos que se pueden dar de un lugar a otro de una manera inalámbrica. Así fue como empezamos a trabajar en el desarrollo de todo lo que se podía medir a distancia.</p>
						</div>
					</div>
				</slide>
				<slide :index="3">
					<div class="d-flex">
						<div class="col-md-7 px-0 d-none d-md-flex">
							<img src="<?php echo get_template_directory_uri(); ?>/img/carousel.jpg" alt="" class="img-fluid">
						</div>
						<div class="col-md-5 bg-verde color-grisoscuro text-3d">
							<h2 class="title-3d font-weight-bold">2013</h2>
							<p class="sub-title font-weight-bold">Nace el deseo por construir una compañía enfocada en la telemetría</p>
							<p>La telemetría era la concepción inicial. Al principio solo existía la idea de crear una compañía que solucionara las necesidades de este tipo, obteniendo los datos que se pueden dar de un lugar a otro de una manera inalámbrica. Así fue como empezamos a trabajar en el desarrollo de todo lo que se podía medir a distancia.</p>
						</div>
					</div>
				</slide>
				<slide :index="4">
					<div class="d-flex">
						<div class="col-md-7 px-0 d-none d-md-flex">
							<img src="<?php echo get_template_directory_uri(); ?>/img/carousel.jpg" alt="" class="img-fluid">
						</div>
						<div class="col-md-5 bg-verde color-grisoscuro text-3d">
							<h2 class="title-3d font-weight-bold">2014</h2>
							<p class="sub-title font-weight-bold">Nace el deseo por construir una compañía enfocada en la telemetría</p>
							<p>La telemetría era la concepción inicial. Al principio solo existía la idea de crear una compañía que solucionara las necesidades de este tipo, obteniendo los datos que se pueden dar de un lugar a otro de una manera inalámbrica. Así fue como empezamos a trabajar en el desarrollo de todo lo que se podía medir a distancia.</p>
						</div>
					</div>
				</slide>
				<slide :index="5">
					<div class="d-flex">
						<div class="col-md-7 px-0 d-none d-md-flex">
							<img src="<?php echo get_template_directory_uri(); ?>/img/carousel.jpg" alt="" class="img-fluid">
						</div>
						<div class="col-md-5 bg-verde color-grisoscuro text-3d">
							<h2 class="title-3d font-weight-bold">2015</h2>
							<p class="sub-title font-weight-bold">Nace el deseo por construir una compañía enfocada en la telemetría</p>
							<p>La telemetría era la concepción inicial. Al principio solo existía la idea de crear una compañía que solucionara las necesidades de este tipo, obteniendo los datos que se pueden dar de un lugar a otro de una manera inalámbrica. Así fue como empezamos a trabajar en el desarrollo de todo lo que se podía medir a distancia.</p>
						</div>
					</div>
				</slide>
				<slide :index="6">
					<div class="d-flex">
						<div class="col-md-7 px-0 d-none d-md-flex">
							<img src="<?php echo get_template_directory_uri(); ?>/img/carousel.jpg" alt="" class="img-fluid">
						</div>
						<div class="col-md-5 bg-verde color-grisoscuro text-3d">
							<h2 class="title-3d font-weight-bold">2016</h2>
							<p class="sub-title font-weight-bold">Nace el deseo por construir una compañía enfocada en la telemetría</p>
							<p>La telemetría era la concepción inicial. Al principio solo existía la idea de crear una compañía que solucionara las necesidades de este tipo, obteniendo los datos que se pueden dar de un lugar a otro de una manera inalámbrica. Así fue como empezamos a trabajar en el desarrollo de todo lo que se podía medir a distancia.</p>
						</div>
					</div>
				</slide>

			</carousel-3d>
		</div>
	</section>
	<!--historia-->
	<!--Descripción-->
	<section class="container pd-60-top">
		<div class="row">
			<div class="col-md-6 d-flex justify-content-center align-items-end"> <img src="<?php echo get_template_directory_uri(); ?>/img/descripcion.png" alt="" class="img-fluid description-img"></div>
			<div class="col-md-4 d-flex justify-content-center flex-column">
				<div class="description-content color-grisoscuro">
					<p>En medio del cambio que supone rediseñar una marca, nos encontramos con querer transmitir de una manera mucho más simple quiénes somos, por esto pasamos de ser Infraestructura Digital a ser DIXO. Ahora son 4 letras que nos definen de una manera concreta como compañía inteligente, tecnológica, conectada e innovadora</p>
					<a href="#" class="btn-general">Más información</a>
				</div>
			</div>
		</div>
	</section>
	<!--Descripción-->
	<!--Servicios-->
	<section class="container-fluid servicios">
		<div class="row">
			<div class="col-lg-6 order-lg-1 px-0">
				<ul class="nav nav-tabs">
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#servicio1" style="background: url(<?php echo get_template_directory_uri(); ?>/img/tab1nav.jpg) no-repeat center / cover">
							<img src="<?php echo get_template_directory_uri(); ?>/img/Informacion.svg" alt="">
							<p>Ahorro energetico</p>
							<div class="btn-general">Más información</div>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#servicio2" style="background: url(<?php echo get_template_directory_uri(); ?>/img/tab2nav.jpg) no-repeat center / cover">
							<img src="<?php echo get_template_directory_uri(); ?>/img/Informacion.svg" alt="">
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
							<img src="<?php echo get_template_directory_uri(); ?>/img/Informacion.svg" alt="">
							<p>Control de accesos</p>
							<div class="btn-general">Más información</div>
						</a>
					</li>
				</ul>			
			</div>
			<div class="tab-content col-lg-6 order-lg-0 d-flex">
				<div id="servicio1" class="container-fluid tab-pane active justify-content-center align-items-center" style="background: url(<?php echo get_template_directory_uri(); ?>/img/tab1.png) no-repeat center center/ cover;">
					<img src="<?php echo get_template_directory_uri(); ?>/img/electricidadgray.svg" alt="">
					<h2>Ahorro energetico</h2>
					<p>Información centralizada</p>
				</div>
				<div id="servicio2" class="container-fluid tab-pane fade justify-content-center align-items-center" style="background: url(<?php echo get_template_directory_uri(); ?>/img/tab2.jpg) no-repeat center center/ cover;">
					<img src="<?php echo get_template_directory_uri(); ?>/img/electricidadgray.svg" alt="">
					<h2>Información centralizada</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates incidunt vel quis molestiae tempora eius a reiciendis officiis, eum, dolore totam, sit laboriosam! Sapiente sed consequatur deleniti explicabo velit aperiam!</p>
				</div>
				<div id="servicio3" class="container-fluid tab-pane fade justify-content-center align-items-center" style="background: url(<?php echo get_template_directory_uri(); ?>/img/tab3.jpg) no-repeat center center/ cover;">
					<img src="<?php echo get_template_directory_uri(); ?>/img/electricidadgray.svg" alt="">
					<h2>Información en tiempo real</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque minima, natus aliquid id incidunt porro reprehenderit officiis impedit consequatur earum sequi aut iusto ex velit autem, laudantium eos recusandae, provident.</p>
				</div>
				<div id="servicio4" class="container-fluid tab-pane fade justify-content-center align-items-center" style="background: url(<?php echo get_template_directory_uri(); ?>/img/tab4.jpg) no-repeat center center/ cover;">
					<img src="<?php echo get_template_directory_uri(); ?>/img/electricidadgray.svg" alt="">
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
								<input type="text" readonly class="" id="" value="email@example.com">
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
</div>
<div id="equipo" class="">
	<div class="paralax-banner">
		<section class="banner-principal d-flex justify-content-start align-items-center" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/bannerequipo.jpg')" id="inicio">
			<div class="col-md-5 offset-md-2">
				<div class="text-banner d-inline-block">
					<div class="d-flex">
						<div class="col-2 col-md-3 px-0 color-verdeoscuro text-right">
							<h2 class="num-banner">50</h2>
						</div>
						<div class="col-10 col-md-9 pr-0">
							<h2 class="font-weight-light color-verde">
								PROFECIONELES
								<span class="font-weight-bold d-block color-grisoscuro">LOREM IPSUM</span>
							</h2>
							<a href="#" class="btn-general">Más información</a>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
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
				<slide :index="0" class="col-12">
					<div class="row">
						<div class="col-4 col-md-3 align-items-center ">
							<img src="<?php echo get_template_directory_uri(); ?>/img/equipo.png" alt="" class="d-inline-block">
						</div>
						<div class="col-8 col-md-9 d-flex align-items-center">
							<h2 class="title-3d">Ing. Jaime Serna</h2>
						</div>
						<div class="col-12 color-grisoscuro text-3d">
							<p>La telemetría era la concepción inicial. Al principio solo existía la idea de crear una compañía que solucionara las necesidades de este tipo, obteniendo los datos que se pueden dar de un lugar a otro de una manera inalámbrica. Así fue como empezamos a trabajar en el desarrollo de todo lo que se podía medir a distancia.</p>
						</div>
					</div>
				</slide>
				<slide :index="1" class="col-12">
					<div class="row">
						<div class="col-4 col-md-3 align-items-center ">
							<img src="<?php echo get_template_directory_uri(); ?>/img/equipo.png" alt="" class="d-inline-block">
						</div>
						<div class="col-8 col-md-9 d-flex align-items-center">
							<h2 class="title-3d ">Ing. Jaime Serna</h2>
						</div>
						<div class="col-12 color-grisoscuro text-3d">
							<p>La telemetría era la concepción inicial. Al principio solo existía la idea de crear una compañía que solucionara las necesidades de este tipo, obteniendo los datos que se pueden dar de un lugar a otro de una manera inalámbrica. Así fue como empezamos a trabajar en el desarrollo de todo lo que se podía medir a distancia.</p>
						</div>
					</div>
				</slide>
				<slide :index="2" class="col-12">
					<div class="row">
						<div class="col-4 col-md-3 align-items-center ">
							<img src="<?php echo get_template_directory_uri(); ?>/img/equipo.png" alt="" class="d-inline-block">
						</div>
						<div class="col-8 col-md-9 d-flex align-items-center">
							<h2 class="title-3d ">Ing. Jaime Serna</h2>
						</div>
						<div class="col-12 color-grisoscuro text-3d">
							<p>La telemetría era la concepción inicial. Al principio solo existía la idea de crear una compañía que solucionara las necesidades de este tipo, obteniendo los datos que se pueden dar de un lugar a otro de una manera inalámbrica. Así fue como empezamos a trabajar en el desarrollo de todo lo que se podía medir a distancia.</p>
						</div>
					</div>
				</slide>
				<slide :index="3" class="col-12">
					<div class="row">
						<div class="col-4 col-md-3 align-items-center ">
							<img src="<?php echo get_template_directory_uri(); ?>/img/equipo.png" alt="" class="d-inline-block">
						</div>
						<div class="col-8 col-md-9 d-flex align-items-center">
							<h2 class="title-3d ">Ing. Jaime Serna</h2>
						</div>
						<div class="col-12 color-grisoscuro text-3d">
							<p>La telemetría era la concepción inicial. Al principio solo existía la idea de crear una compañía que solucionara las necesidades de este tipo, obteniendo los datos que se pueden dar de un lugar a otro de una manera inalámbrica. Así fue como empezamos a trabajar en el desarrollo de todo lo que se podía medir a distancia.</p>
						</div>
					</div>
				</slide>
				<slide :index="4" class="col-12">
					<div class="row">
						<div class="col-4 col-md-3 align-items-center ">
							<img src="<?php echo get_template_directory_uri(); ?>/img/equipo.png" alt="" class="d-inline-block">
						</div>
						<div class="col-8 col-md-9 d-flex align-items-center">
							<h2 class="title-3d ">Ing. Jaime Serna</h2>
						</div>
						<div class="col-12 color-grisoscuro text-3d">
							<p>La telemetría era la concepción inicial. Al principio solo existía la idea de crear una compañía que solucionara las necesidades de este tipo, obteniendo los datos que se pueden dar de un lugar a otro de una manera inalámbrica. Así fue como empezamos a trabajar en el desarrollo de todo lo que se podía medir a distancia.</p>
						</div>
					</div>
				</slide>
				<slide :index="5" class="col-12">
					<div class="row">
						<div class="col-4 col-md-3 align-items-center ">
							<img src="<?php echo get_template_directory_uri(); ?>/img/equipo.png" alt="" class="d-inline-block">
						</div>
						<div class="col-8 col-md-9 d-flex align-items-center">
							<h2 class="title-3d ">Ing. Jaime Serna</h2>
						</div>
						<div class="col-12 color-grisoscuro text-3d">
							<p>La telemetría era la concepción inicial. Al principio solo existía la idea de crear una compañía que solucionara las necesidades de este tipo, obteniendo los datos que se pueden dar de un lugar a otro de una manera inalámbrica. Así fue como empezamos a trabajar en el desarrollo de todo lo que se podía medir a distancia.</p>
						</div>
					</div>
				</slide>
				<slide :index="6" class="col-12">
					<div class="row">
						<div class="col-4 col-md-3 align-items-center ">
							<img src="<?php echo get_template_directory_uri(); ?>/img/equipo.png" alt="" class="d-inline-block">
						</div>
						<div class="col-8 col-md-9 d-flex align-items-center">
							<h2 class="title-3d ">Ing. Jaime Serna</h2>
						</div>
						<div class="col-12 color-grisoscuro text-3d">
							<p>La telemetría era la concepción inicial. Al principio solo existía la idea de crear una compañía que solucionara las necesidades de este tipo, obteniendo los datos que se pueden dar de un lugar a otro de una manera inalámbrica. Así fue como empezamos a trabajar en el desarrollo de todo lo que se podía medir a distancia.</p>
						</div>
					</div>
				</slide>

			</carousel-3d>
		</div>
	</section>
	<!--Descripción-->
	<section class="container pd-60-top">
		<div class="row">
			<div class="col-md-6 d-flex justify-content-center align-items-end"> <img src="<?php echo get_template_directory_uri(); ?>/img/salidaequipo.jpg" alt="" class="img-fluid description-img"></div>
			<div class="col-md-4 d-flex justify-content-center flex-column">
				<div class="description-content color-grisoscuro">
					<p>En medio del cambio que supone rediseñar una marca, nos encontramos con querer transmitir de una manera mucho más simple quiénes somos, por esto pasamos de ser Infraestructura Digital a ser DIXO. Ahora son 4 letras que nos definen de una manera concreta como compañía inteligente, tecnológica, conectada e innovadora</p>
					<a href="#" class="btn-general">Más información</a>
				</div>
			</div>
		</div>
	</section>
	<!--Descripción-->
</div>
<div id="principios" class="d-none">
	<div class="paralax-banner">
		<section class="banner-principal d-flex justify-content-start align-items-center" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/principios.jpg')" id="inicio">
			<div class="col-md-5 offset-md-2">
				<div class="text-banner d-inline-block">
					<div class="d-flex">
						<div class="col-2 col-md-3 px-0 color-verdeoscuro text-right">
							<h2 class="num-banner">6</h2>
						</div>
						<div class="col-10 col-md-9 pr-0">
							<h2 class="font-weight-light color-verde">
								PRICIPIOS
								<span class="font-weight-bold d-block color-grisoscuro">LOREM IPSUM</span>
							</h2>
							<a href="#" class="btn-general">Más información</a>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
	<section class="container">
		<div class="row">
			<div class="col-12">
				<h2 class="title-lg text-center">
					PRINCIPIOS
				</h2>
			</div>
			<div class="col-md-4 principio">
				<div class="row">
					<div class="col-12 col-md-3 px-md-0 color-verdeoscuro text-md-center">
						<h2 class="num-banner">1</h2>
					</div>
					<div class="col-12 col-md-9 pr-0">
						<h2 class="font-weight-light color-verdeoscuro">
							PRINCIPO
							<span class="font-weight-bold d-block color-grisoscuro">LOREM IPSUM</span>
						</h2>
						<p>Transformamos nuestra sociedad, ciudad, y país</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 principio">
				<div class="row">
					<div class="col-12 col-md-3 px-md-0 color-verdeoscuro text-md-center">
						<h2 class="num-banner">2</h2>
					</div>
					<div class="col-12 col-md-9 pr-0">
						<h2 class="font-weight-light color-verdeoscuro">
							PRINCIPO
							<span class="font-weight-bold d-block color-grisoscuro">LOREM IPSUM</span>
						</h2>
						<p>Creemos en el poder del I.O.T. (Internet de las cosas), Big Data, la analítica y la inteligencia artificial</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 principio">
				<div class="row">
					<div class="col-12 col-md-3 px-md-0 color-verdeoscuro text-md-center">
						<h2 class="num-banner">3</h2>
					</div>
					<div class="col-12 col-md-9 pr-0">
						<h2 class="font-weight-light color-verdeoscuro">
							PRINCIPO
							<span class="font-weight-bold d-block color-grisoscuro">LOREM IPSUM</span>
						</h2>
						<p>Transformamos nuestra sociedad, ciudad, y país</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 principio">
				<div class="row">
					<div class="col-12 col-md-3 px-md-0 color-verdeoscuro text-md-center">
						<h2 class="num-banner">4</h2>
					</div>
					<div class="col-12 col-md-9 pr-0">
						<h2 class="font-weight-light color-verdeoscuro">
							PRINCIPO
							<span class="font-weight-bold d-block color-grisoscuro">LOREM IPSUM</span>
						</h2>
						<p>Transformamos nuestra sociedad, ciudad, y país</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 principio">
				<div class="row">
					<div class="col-12 col-md-3 px-md-0 color-verdeoscuro text-md-center">
						<h2 class="num-banner">5</h2>
					</div>
					<div class="col-12 col-md-9 pr-0">
						<h2 class="font-weight-light color-verdeoscuro">
							PRINCIPO
							<span class="font-weight-bold d-block color-grisoscuro">LOREM IPSUM</span>
						</h2>
						<p>Creemos en el poder del I.O.T. (Internet de las cosas), Big Data, la analítica y la inteligencia artificial</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 principio">
				<div class="row">
					<div class="col-12 col-md-3 px-md-0 color-verdeoscuro text-md-center">
						<h2 class="num-banner">6</h2>
					</div>
					<div class="col-12 col-md-9 pr-0">
						<h2 class="font-weight-light color-verdeoscuro">
							PRINCIPO
							<span class="font-weight-bold d-block color-grisoscuro">LOREM IPSUM</span>
						</h2>
						<p>Transformamos nuestra sociedad, ciudad, y país</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--Descripción-->
	<section class="container pd-60-top">
		<div class="row">
			<div class="col-12">
				<h2 class="text-center color-verdeoscuro l-height">MANIFIESTO</h2>
			</div>
			<div class="col-md-6 d-flex justify-content-center align-items-end"> <img src="<?php echo get_template_directory_uri(); ?>/img/salidaprincipios.jpg" alt="" class="img-fluid description-img"></div>
			<div class="col-lg-5 col-xl-4 d-flex flex-column">
				<div class="description-content color-grisoscuro">
					<p>La alta ingeniería nos caracteriza, 8 años de experiencia en el mercado conforman nuestra razón de ser. Construimos edificaciones inteligentes para que las operaciones que se dan dentro de estas sean cada vez más fáciles; buscando que nuestros clientes dediquen su tiempo a lo que realmente les genera valor y dejando en nuestras manos la habilidad de crecer con ellos y la operabilidad de sus espacios.</p>
					<a href="#" class="btn-general">Más información</a>
				</div>
			</div>
		</div>
	</section>
	<!--Descripción-->
</div>
<div id="hacemos" class="d-none">
	<div class="paralax-banner">
		<section class="banner-principal d-flex justify-content-start align-items-center" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/hacemosbanner.jpg')" id="inicio">
			<div class="col-md-5 offset-md-2">
				<div class="text-banner d-inline-block">
					<div class="d-flex">
						<div class="col-12 pr-0">
							<h2 class="font-weight-light color-verde">
								ASÍ
								<span class="font-weight-bold d-block color-grisoscuro">LO HACEMOS</span>
							</h2>
							<a href="#" class="btn-general">Más información</a>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
	<section class="container">
		<div class="row">
			<div class="col-12">
				<h2 class="title-lg text-center">
					HACEMOS
					<span>ASÍ LO</span>
				</h2>
			</div>
		</div>
		<div class="row hacemos-item">
			<div class="col-md-6 hacemos-img"><img src="<?php echo get_template_directory_uri(); ?>/img/hacemos1.jpg" alt="" class="img-fluid"></div>
			<div class="col-md-6 col-lg-4 hacemos-text d-flex align-items-center px-md-0 color-grisoscuro">
				<h2>¿LO QUÉ HACEMOS?</h2>
				<p>Edificaciones inteligentes y seguras que simplifica su administración y optimizan su operación, para que nuestros clientes se enfoquen en la generación de valor de su negocio.</p>
			</div>
		</div>
		<div class="row hacemos-item">
			<div class="col-md-6 hacemos-img"><img src="<?php echo get_template_directory_uri(); ?>/img/hacemos2.jpg" alt="" class="img-fluid"></div>
			<div class="col-md-6 col-lg-4 hacemos-text px-md-0 d-flex align-items-center color-grisoscuro">
				<h2>¿POR QUÉ HACEMOS?</h2>
				<p>A partir de la cuarta revolución industrial, con toda su gama de nuevas tecnologías que fusiona los mundos físico, digital y biológico, impactando en todas las disciplinas, economías e industrias, e incluso desafiando ideas sobre lo que significa ser humano, nos basamos en la influencia de las grandes tendencias del mercado actual; como IoT (Internet de las cosas), Big Data, la analítica y la inteligencia artificial, para mejorar la calidad de vida y eficiencia de los espacios que habitamos.</p>
			</div>
		</div>
	</section>

	<section class="container">
		<div class="row justify-content-between">
			<div class="col-12">
				<h2 class="title-lg text-center">
					HACEMOS?
					<span>¿PARA QUÉ LO</span>
				</h2>
			</div>
			<div class="col-md-2 paraque-hacemos">
				<div class="row">
					<div class="col-4 px-0 color-verdeoscuro text-right"><h2>1</h2></div>
					<div class="col-8 d-flex justify-content-center align-items-start">
						<img src="<?php echo get_template_directory_uri(); ?>/img/ico-ahorro.jpg" alt="" class="img-fluid">
					</div>
					<div class="col-12 px-md-0">
						<p>
							Edificaciones realmente inteligentes, controladas, confortables, predictivas, seguras, sustentables, eficientes, conectadas y reconocidas
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-2 paraque-hacemos">
				<div class="row">
					<div class="col-4 px-0 color-verdeoscuro text-right"><h2>2</h2></div>
					<div class="col-8 d-flex justify-content-center align-items-start">
						<img src="<?php echo get_template_directory_uri(); ?>/img/ico-ahorro.jpg" alt="" class="img-fluid">
					</div>
					<div class="col-12 px-md-0">
						<p>
							Reducción de los costos de operación y ahorro en el consumo energético
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-2 paraque-hacemos">
				<div class="row">
					<div class="col-4 px-0 color-verdeoscuro text-right"><h2>3</h2></div>
					<div class="col-8 d-flex justify-content-center align-items-start">
						<img src="<?php echo get_template_directory_uri(); ?>/img/ico-ahorro.jpg" alt="" class="img-fluid">
					</div>
					<div class="col-12 px-md-0">
						<p>
							Administración y operación de todas las sedes de manera centralizada
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="row justify-content-around">
			<div class="col-md-2 paraque-hacemos">
				<div class="row">
					<div class="col-4 px-0 color-verdeoscuro text-right"><h2>4</h2></div>
					<div class="col-8 d-flex justify-content-center align-items-start">
						<img src="<?php echo get_template_directory_uri(); ?>/img/ico-ahorro.jpg" alt="" class="img-fluid">
					</div>
					<div class="col-12 px-md-0">
						<p>
							Información disponible en tiempo real para notificar y actuar de manera predictiva
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-2 paraque-hacemos">
				<div class="row">
					<div class="col-4 px-0 color-verdeoscuro text-right"><h2>5</h2></div>
					<div class="col-8 d-flex justify-content-center align-items-start">
						<img src="<?php echo get_template_directory_uri(); ?>/img/ico-ahorro.jpg" alt="" class="img-fluid">
					</div>
					<div class="col-12 px-md-0">
						<p>
							Información disponible en tiempo real para notificar y actuar de manera predictiva
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--Descripción-->
	<section class="container pd-60-top">
		<div class="row">
			<div class="col-12">
				<h2 class="text-center color-verdeoscuro l-height">¿CÓMO LO HACEMOS?</h2>
			</div>
			<div class="col-md-6 d-flex justify-content-center align-items-end"> <img src="<?php echo get_template_directory_uri(); ?>/img/salidahacemos.jpg" alt="" class="img-fluid description-img"></div>
			<div class="col-lg-5 col-xl-4 d-flex flex-column">
				<div class="description-content color-grisoscuro">
					<p>La alta ingeniería nos caracteriza, 8 años de experiencia en el mercado conforman nuestra razón de ser. Construimos edificaciones inteligentes para que las operaciones que se dan dentro de estas sean cada vez más fáciles; buscando que nuestros clientes dediquen su tiempo a lo que realmente les genera valor y dejando en nuestras manos la habilidad de crecer con ellos y la operabilidad de sus espacios.</p>
					<a href="#" class="btn-general">Más información</a>
				</div>
			</div>
		</div>
	</section>
	<!--Descripción-->
</div>
<div id="exito" class="d-none">
	<div class="paralax-banner">
		<section class="banner-principal d-flex justify-content-start align-items-center" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/hacemosbanner.jpg')" id="inicio">
			<div class="col-md-5 offset-md-2">
				<div class="text-banner d-inline-block">
					<div class="d-flex">
						<div class="col-12 pr-0">
							<h2 class="font-weight-light color-verde">
								NUESTROS
								<span class="font-weight-bold d-block color-grisoscuro">PROYECTOS</span>
							</h2>
							<a href="#" class="btn-general">Más información</a>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
	<!--Descripción-->
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
	</div>
<?php get_footer(); ?>