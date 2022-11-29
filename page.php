<?php
if ( is_page( array( 2 ) ) ) {
	include( TEMPLATEPATH . '/page/home.php' );
} else if ( is_page( array( 3976 ) ) ) {
	include( TEMPLATEPATH . '/page/cooperation.php' );
} else if ( is_page( array( 13783 ) ) ) {
	include( TEMPLATEPATH . '/page/commercial.php' );
} else if ( is_page( array( 3978 ) ) ) {
	include( TEMPLATEPATH . '/page/about.php' );
} else if ( is_page( array( 3983 ) ) ) {
	include( TEMPLATEPATH . '/page/contact.php' );
} else {
	include( TEMPLATEPATH . '/page/default.php' );
}