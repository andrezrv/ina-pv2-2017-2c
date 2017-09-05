<?php
function load_page() {
	$template_path = dirname( __FILE__ ) . '/templates/';
	$file = 'index.php';

	if ( ! empty( $_GET['page'] ) ) {
		$page_file = $_GET['page'] . '.php';

		if ( file_exists( $template_path . $page_file ) ) {
			$file = $page_file;
		} else {
			$file = '404.php';
		}
	}

	include $template_path . $file;
}

function load_template( $name ) {
	include dirname( __FILE__ ) . '/templates/' . $name . '.php';
}
