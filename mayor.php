<?php
$numbers = array( 2, 5, 17, 11, 8 );

function mayor( $_numbers ) {
	foreach ( $_numbers as $_number ) {
		! isset( $mayor ) && ( $mayor = 0 );

		$mayor = ( $_number > $mayor ) ? $_number : $mayor;
	}

	echo $mayor;
}

mayor( $numbers );
