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

});
