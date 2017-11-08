<?php
session_start();

require_once dirname( __FILE__ ) . '/config.php';

// Incluir funciones, clases, etc.
require_once dirname( __FILE__ ) . '/admin/functions.php';
require dirname( __FILE__ ) . '/includes/db/class-db.php';
require dirname( __FILE__ ) . '/includes/table/class-table.php';
require dirname( __FILE__ ) . '/includes/user/class-user.php';

init_db();

// Cargar índice de templates:
// load_admin_page();

logout_user_maybe();
validate_user_maybe();

if ( user_is_logged_in() ) {
	echo 'Hola Usuario!';

?>
	<p>
		<a href="admin.php?logout=true">Cerrar sesión</a>
	</p>
<?php

} else {
	load_admin_template( 'login' );
}
