(function($){
	$(function(){

		$('.sidenav').sidenav({
			menuWidth: 500,
		});
		$('.carousel').carousel({fullWidth: true});
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
  }); // end of document ready
})(jQuery); // end of jQuery name space


