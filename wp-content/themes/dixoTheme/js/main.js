$(document).ready(function(){
	// var scene = $('.paralax-banner').get(0);
	// var parallaxInstance = new Parallax(scene);

	if($('.option').length > 0){
		$('.option').on('click',function(){
			selectmobile();
		});
		function selectmobile(){
			$('.options-mobile').toggleClass('d-none');
		}
		$('.item-option a').on('click',function(){
			setTimeout(function(){ 
				var nameOption = $('.item-option a.active').text();
				$('.option').text(nameOption);
			}, 200);
			selectmobile();
		});
		$('.option').text($('.options-mobile .active').text());
	}
    $(".btn-general").click(function() {
        let href = $(this).attr('href');
        $('html, body').animate({
            scrollTop: $(href).offset().top - 78
        }, 500);
    });
    $(".owl-carousel").owlCarousel({
    	items: 1,
    	autoplay: 'true',
    	loop: 'true'
    });
});
