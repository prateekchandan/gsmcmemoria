jQuery(function($) {'use strict',
	
	//Countdown js
	 $("#countdown").countdown({
			date: "24 january 2016 16:00:00",
			format: "on"
		},
		
		function() {
			// callback function
		});
	

	
	//Scroll Menu

	function menuToggle()
	{
		var windowWidth = $(window).width();

		if(windowWidth > 767 ){
			$(window).on('scroll', function(){
				if( $(window).scrollTop()>405 ){
					$('.main-nav').addClass('fixed-menu animated slideInDown');
				} else {
					$('.main-nav').removeClass('fixed-menu animated slideInDown');
				}
			});
		}else{
			
			$('.main-nav').addClass('fixed-menu animated slideInDown');
				
		}
	}

	menuToggle();
	
	
	// Carousel Auto Slide Off
	$('#event-carousel, #twitter-feed, #sponsor-carousel ').carousel({
		interval: false
	});


	// Contact form validation
	var form = $('.contact-form');
	form.submit(function () {

		jQuery.ajax({
			url:$(this).attr('action'),
			type:"POST",
			data:$(this).serialize(),
			success:function(data){
				console.log(data);
				$('.contact-form').prev().text(data).fadeIn().delay(3000).fadeOut();
			},
			error:function(data){
				console.log(data);
				$('.contact-form').prev().text("Error").fadeIn().delay(3000).fadeOut();
			}
		})
		return false;
	});

	$( window ).resize(function() {
		menuToggle();
	});

	$('.main-nav ul').onePageNav({
		currentClass: 'active',
	    changeHash: false,
	    scrollSpeed: 900,
	    scrollOffset: 0,
	    scrollThreshold: 0.3,
	    filter: ':not(.no-scroll)'
	});

});

