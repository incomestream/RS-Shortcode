( function ( document, $, undefined ) {

	$(document).ready(function () {
		//Accordion
		$( '.accordion_header' ).click( function(){
			if( $(this).parent( '.accordion_item' ).hasClass( 'active' ) ){
				$( '.accordion_item .accordion_content' ).slideUp(500);
				$(this).parent( '.accordion_item' ).removeClass( 'active' );
				$(this).parent( '.accordion_item' ).children( '.accordion_content' ).slideUp(500);
				$(this).find( '.dashicons' ).removeClass('dashicons-minus');
				$(this).find( '.dashicons' ).addClass('dashicons-plus');

			}else{
				$( '.accordion_item .accordion_content' ).slideUp(500);
				$( '.accordion_item' ).removeClass( 'active' );
				$(this).parent( '.accordion_item' ).addClass( 'active' );
				$(this).parent( '.accordion_item' ).children( '.accordion_content' ).slideDown(500);
				$('.accordion_item .dashicons' ).removeClass('dashicons-minus');
				$('.accordion_item .dashicons' ).addClass('dashicons-plus');
				$(this).find( '.dashicons' ).removeClass('dashicons-plus');
				$(this).find( '.dashicons' ).addClass('dashicons-minus');
			}
		});

		//Toggle
		$( '.toggle_header' ).click( function(){			
			if( $(this).parent( '.toggle_item' ).hasClass( 'active' ) ){
				$(this).parent( '.toggle_item' ).removeClass( 'active' );
				$(this).parent( '.toggle_item' ).children( '.toggle_content' ).slideUp(500);
				$(this).find( '.dashicons' ).removeClass('dashicons-minus');
				$(this).find( '.dashicons' ).addClass('dashicons-plus');
			}else{
				$(this).parent( '.toggle_item' ).addClass( 'active' );
				$(this).parent( '.toggle_item' ).children( '.toggle_content' ).slideDown();
				$(this).find( '.dashicons' ).removeClass('dashicons-plus');
				$(this).find( '.dashicons' ).addClass('dashicons-minus');

			}
		});

		//Tabs
		$( '.tab_content .tab_pane' ).hide();
		var tab_active = $( '.tab_nav li.active a' ).attr('href');
		$( '.tab_content '+tab_active ).show();
		$( '.tab_nav li a' ).click( function(e){
			e.preventDefault();
			var tab_id = $(this).attr( 'href' );

			$( '.tab_nav li' ).removeClass( 'active' );
			$( this ).parent( 'li' ).addClass( 'active' );
			$( '.tab_content .tab_pane' ).hide();
			$( tab_id ).show();
		});
		$('.pricing_wrap > br').remove();

		// Pricing
		$('.tab_container').find('p:empty').remove();

		// Team
		$('.zps_team_wrap > br').remove();
	});

})( document, jQuery );