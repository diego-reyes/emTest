( function( $ ) {

	wp.customize( 'banner_heading_1', function( value ) {
		value.bind( function( newval ) {
			$('.banner article header h1').html( newval );
		} );
	} );
	wp.customize( 'banner_heading_2', function( value ) {
		value.bind( function( newval ) {
			$('.banner article header h2').html( newval );
		} );
	} );
	wp.customize( 'banner_button_tag', function( value ) {
		value.bind( function( newval ) {
			$('.banner article footer button').html( newval );
		} );
	} );
	wp.customize( 'section_heading_1', function( value ) {
		value.bind( function( newval ) {
			$('.section1 header h1').html( newval );
		} );
	} );
	wp.customize( 'article1_heading', function( value ) {
		value.bind( function( newval ) {
			$('.section1 article:nth-of-type(1) .content h3').html( newval );
		} );
	} );
	wp.customize( 'article1_content', function( value ) {
		value.bind( function( newval ) {
			$('.section1 article:nth-of-type(1) .content p').html( newval );
		} );
	} );
	wp.customize( 'article1_button_tag', function( value ) {
		value.bind( function( newval ) {
			$('.section1 article:nth-of-type(1) .content footer button')
				.html( newval );
		} );
	} );
	wp.customize( 'article2_heading', function( value ) {
		value.bind( function( newval ) {
			$('.section1 article:nth-of-type(2) .content h3').html( newval );
		} );
	} );
	wp.customize( 'article2_content', function( value ) {
		value.bind( function( newval ) {
			$('.section1 article:nth-of-type(2) .content p').html( newval );
		} );
	} );
	wp.customize( 'article2_button_tag', function( value ) {
		value.bind( function( newval ) {
			$('.section1 article:nth-of-type(2) .content footer button')
				.html( newval );
		} );
	} );	
	wp.customize( 'article3_heading', function( value ) {
		value.bind( function( newval ) {
			$('.section1 article:nth-of-type(3) .content h3').html( newval );
		} );
	} );
	wp.customize( 'article3_content', function( value ) {
		value.bind( function( newval ) {
			$('.section1 article:nth-of-type(3) .content p').html( newval );
		} );
	} );
	wp.customize( 'article3_button_tag', function( value ) {
		value.bind( function( newval ) {
			$('.section1 article:nth-of-type(3) .content footer button')
				.html( newval );
		} );
	} );	
	wp.customize( 'footer_message', function( value ) {
		value.bind( function( newval ) {
			$('body > footer p').html( newval );
		} );
	} );	
} )( jQuery );
