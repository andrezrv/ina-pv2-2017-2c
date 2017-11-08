<?php
class User {
	private $ID;
	protected $username;
	protected $name;
	protected $email;

	function __construct( $ID, $username, $name, $email ) {
		$this->ID = $ID;
		$this->username = $username;
		$this->name = $name;
		$this->email = $email;
	}

	static function validate() {
		if ( ! empty( $_POST['username'] ) && ! empty( $_POST['password'] ) ) {
			global $db;

			$username = $_POST['username'];
			$password = md5( $_POST['password'] );

			$results = $db->get_results( "SELECT * FROM usuarios WHERE username = '$username' AND password = '$password'" );

			if ( ! empty( $results ) ) {
				$_SESSION['logged_user'] = new self(
					$results[0]['ID'],
					$results[0]['username'],
					$results[0]['name'],
					$results[0]['email']
				);
			}
		}
	}

	static function logout() {
		if ( isset( $_GET['logout'] ) ) {
			session_destroy();
		}
	}

	static function is_logged_in() {
		return ! empty( $_SESSION['logged_user'] );
	}

	// iniciar sesión
	// validar sesión
	// registrarse
	// mostrar sus propios datos
	// modificar datos
	// cerrar sesión
}
