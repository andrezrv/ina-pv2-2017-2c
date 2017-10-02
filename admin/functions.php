<?php
function load_admin_page() {
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

function load_admin_template( $name ) {
	include dirname( __FILE__ ) . '/templates/' . $name . '.php';
}

function init_db() {
	global $db;

	if ( is_null( $db ) ) {
		$db = new DB( DB_HOST, DB_NAME, DB_USER, DB_PASSWORD );
	}
}

function get_people() {
	$people = array(
		array(
			'nombre' => 'Leandro',
			'apellido' => 'Franchi',
			'edad' => 25,
		),
		array(
			'nombre' => 'Chiara',
			'apellido' => 'Díaz',
			'edad' => 26,
		),
		array(
			'nombre' => 'Carolina',
			'apellido' => 'Latorre',
			'edad' => 30,
		),
		array(
			'nombre' => 'Priscila',
			'apellido' => 'Mango',
			'edad' => 22,
		),
	);

	return $people;
}
