<a href="" class="wp-chat"><img src="<?php echo get_template_directory_uri(); ?>/img/wp.png" class="img-fluid"></a>
<footer class="play-font">
	<div class="container">
		<div class="row">
			<div class="col-md-5 d-flex justify-content-center align-items-center">
				<ul class="datos-footer">
					<li class="text-right">
						<span>Bogotá:</span>
						<span>Cra 79 # 19 -20 ( Torre 4 ) - (+57) (4) 4483263)</span>
					</li>
					<li>
						<span>Medellín: </span>
						<span>Cra 68 # 32 C 91</span>
						<span>(+57) (4) 4483263</span>
					</li>
				</ul>
			</div>
			<div class="col-md-2 d-flex align-items-center justify-content-center justify-content-md-start">
				<a class="upscroll" href="#inicio">Inicio</a>
			</div>
			<div class="col-md-5 d-flex flex-column flex-md-row justify-content-center justify-content-md-between align-items-center">
				<ul class="redes-footer">
					<li><img src="<?php echo get_template_directory_uri(); ?>/img/fb.svg" class="img-fluid" alt=""></li>
					<li><img src="<?php echo get_template_directory_uri(); ?>/img/ig.svg" class="img-fluid" alt=""></li>
					<li><img src="<?php echo get_template_directory_uri(); ?>/img/yt.svg" class="img-fluid" alt=""></li>
					<li><img src="<?php echo get_template_directory_uri(); ?>/img/in.svg" class="img-fluid" alt=""></li>
				</ul>
				<img src="<?php echo get_template_directory_uri(); ?>/img/logo-footer.svg" alt="" class="img-fluid footer-logo">
			</div>
		</div>
	</div>
</footer>

<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.7/vue.js'></script>
<script src='https://rawgit.com/Wlada/vue-carousel-3d/master/dist/vue-carousel-3d.min.js'></script>
<script>
	new Vue({
		el: '#carousel3d',
		data: {
			slides: 3
		},
		components: {
			'width': 768,
			'carousel-3d': Carousel3d.Carousel3d,
			'slide': Carousel3d.Slide
		}
	})
	new Vue({
		el: '#carouselequipo',
		data: {
			slides: 3
		},
		components: {
			'width': 768,
			'carousel-3d': Carousel3d.Carousel3d,
			'slide': Carousel3d.Slide
		}
	})
        //# sourceURL=pen.js
</script>
<?php wp_footer(); ?>
</body>

</html>
