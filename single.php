<?php
if ( is_singular( array( 'galleries' ) ) ) {
	include( TEMPLATEPATH . '/single/gallery.php' );
}else if ( is_singular( array( 'investment' ) ) ) {
	include( TEMPLATEPATH . '/single/investment.php' );
} else {
	include( TEMPLATEPATH . '/single/default.php' );
}