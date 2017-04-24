(function ($, root, undefined) {

	$(function () {

		'use strict';

		// DOM ready, take it away

		// Quick-access series toggle in topbar
		$("#series-toggle").on( "click", function() {
		  $("#series-toggle").hide();
			$("#series-list").addClass('is--visible');
		});

		// Add backdrop to active primary nav menus
		$('.menu-dropdown').on('show.bs.dropdown', function () {
		  // do something…
			$('body').addClass('menu-open');
			$('body').append("<div class='modal-backdrop fade in'></div>");
		});
		$('.menu-dropdown').on('hide.bs.dropdown', function () {
		  // do something…
			$('body').removeClass('menu-open');
			$('.modal-backdrop').remove();
		});

		// Allow clicks inside of primary nav dropdown menus
		$(document).on('click', '.site-header .dropdown-menu', function (e) {
		  e.stopPropagation();
		});

		// Setup toggle buttons for primary nav submenus
		$('#toggle-styles').on('click', function(e) {
		  e.preventDefault();
			$( "#by-material" ).removeClass( 'is--visible' );
			$( "#by-style" ).addClass( 'is--visible' );
			$(this).addClass('is--current');
			$('#toggle-materials').removeClass('is--current');
		});
		$('#toggle-materials').on('click', function(e) {
		  e.preventDefault();
			$( "#by-style" ).removeClass( 'is--visible' );
			$( "#by-material" ).addClass( 'is--visible' );
			$(this).addClass('is--current');
			$('#toggle-styles').removeClass('is--current');
		});

	});

})(jQuery, this);
