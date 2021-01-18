(function ($, root, undefined) {

	$(function () {

		'use strict';

    // DOM ready, take it away
    
    $(document).ready(function () {
      if (localStorage.getItem('wasVisited') !== null) {
        $("#becomeDealer").hide();
      } else {
        localStorage.setItem('wasVisited', 1);
      }
      $("#btn-becomeDealer").click(function(){
        $("#becomeDealer").fadeOut(250);
      });
    });

		// Init popovers
		$(function () {
		  $('[data-toggle="popover"]').popover();
		});

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
		$('#toggle-window-styles').on('click', function(e) {
		  e.preventDefault();
			$( "#by-window-material" ).removeClass( 'is--visible' );
			$( "#by-window-style" ).addClass( 'is--visible' );
			$(this).addClass('is--current');
			$('#toggle-window-materials').removeClass('is--current');
		});
		$('#toggle-window-materials').on('click', function(e) {
		  e.preventDefault();
			$( "#by-window-style" ).removeClass( 'is--visible' );
			$( "#by-window-material" ).addClass( 'is--visible' );
			$(this).addClass('is--current');
			$('#toggle-window-styles').removeClass('is--current');
		});

		$('#toggle-door-styles').on('click', function(e) {
		  e.preventDefault();
			$( "#by-door-material" ).removeClass( 'is--visible' );
			$( "#by-door-style" ).addClass( 'is--visible' );
			$(this).addClass('is--current');
			$('#toggle-door-materials').removeClass('is--current');
		});
		$('#toggle-door-materials').on('click', function(e) {
		  e.preventDefault();
			$( "#by-door-style" ).removeClass( 'is--visible' );
			$( "#by-door-material" ).addClass( 'is--visible' );
			$(this).addClass('is--current');
			$('#toggle-door-styles').removeClass('is--current');
		});

	});

})(jQuery, this);
