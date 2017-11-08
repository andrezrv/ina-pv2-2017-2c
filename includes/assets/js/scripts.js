$( document ).ready( function() {
	var handleMouseOver = function() {
		$( this ).toggleClass( 'red-bg' );
	};
	var handleMouseOut = function() {
		console.log( 'mouse out!' );
	};

	$( 'form' ).submit( function( e ) {
		e.preventDefault();

		console.log( 'Form enviado' );
	} );

	var $color = '#ff0000';

	$( '.box-container' ).css( {
		'background-color': $color,
		'border': '3px solid green'
	} );
} );

$( document ).ready( function() {
	$( '.box-container' ).click( function() {
		$( this ).toggleClass( 'yellow-bg' );
	} );

	$( '.box' ).click( function() {
		$( this ).toggleClass( 'red-bg' );
	} );
} );
