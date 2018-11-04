(function($){
	$(function(){

		$('.sidenav').sidenav({
			menuWidth: 500,
		});
		

		$('.parallax').parallax();
		var btn = $('#button');

		$(window).scroll(function() {
			if ($(window).scrollTop() > 300) {
				btn.addClass('show');
			} else {
				btn.removeClass('show');
			}
		});

		btn.on('click', function(e) {
			e.preventDefault();
			$('html, body').animate({scrollTop:0}, '300');
		});
		$('.scrollspy').scrollSpy();
		$('#team-tab').tabs();
		$('.book-date').datepicker();
		$('select').formSelect();
		$('.datepicker').datepicker();
		$('.dropdown-button').megaMenu({
			inDuration: 300,
			outDuration: 150,
			hover: true
		});
		$('#dob').datepicker();
		$('#exp').datepicker();
		$('.collapsible').collapsible();
		$('.scrollspy').scrollSpy();
		$('#product-tab').tabs();
		$('.partners').owlCarousel({
			loop:true,
			margin:10,
			nav:false,
			responsive:{
				0:{
					items:1
				},
				600:{
					items:3
				},
				1000:{
					items:6
				}
			}
		});
		$('.home-slider').owlCarousel({
			loop:true,
			nav:false,
			animateOut: 'fadeOut',
			responsive:{
				0:{
					items:1
				},
				600:{
					items:1
				},
				1000:{
					items:1
				}
			}
		});	
	  	$('.year-dropdown-trigger').dropdown();
  		$('.month-dropdown-trigger').dropdown();
	  	$('product-review-select').formSelect();
  	  	$('#product-review-textarea').val('');	
  }); // end of document ready
})(jQuery); // end of jQuery name space


