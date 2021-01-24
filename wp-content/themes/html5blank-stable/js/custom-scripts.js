jQuery(document).ready(function($) {
	
    //header fix menu navbar-toggler
    $('header').on('click', '.navbar-toggler', function() {
        $(this).toggleClass('active');
    });
	
	var slider1 = $('.slider-block .bxslider');
    slider1.bxSlider({
        minSlides: 1,
        maxSlides: 1,
        slideMargin:0,
		adaptiveWidth: true,
		pager: false,
		auto: false,
		pause: 10000,
        onSliderLoad: function (){
			$('.slider-block .bxslider > li:not(.bx-clone)').eq(0).addClass('active-slide');
            var slide1_count = slider1.getSlideCount();
            var slide1_curr = slider1.getCurrentSlide();
			
        },
        onSlideAfter: function ($slideElement, oldIndex, newIndex){
			$('.slider-block .bxslider li').removeClass('active-slide');
			$($slideElement).addClass('active-slide'); 
            var slide1_count = slider1.getSlideCount();
            var slide1_curr = slider1.getCurrentSlide();
            slider1.goToSlide(slide1_curr);
        },
    });
	
	//old fancyBox
	/*
	$("a.grouped_elements").fancybox({
		openEffect: 'fade',
		prevEffect: 'fade',
		nextEffect: 'fade',
		showNavArrows: true,
		helpers	: {
			title	: {
				type: 'outside'
			},
			thumbs	: {
				width	: 50,
				height	: 50
			}
		}
	});
	*/
	
	/*new fancyBox*/
	
	$('[data-fancybox="images"]').fancybox({
		buttons : [ 
			'slideShow',
			'share',
			'zoom',
			'fullScreen',
			'close'
		],
		thumbs : {
			autoStart : true
		}
	})
    
});