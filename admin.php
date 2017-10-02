<?php
require_once dirname( __FILE__ ) . '/config.php';

// Incluir funciones, clases, etc.
require_once dirname( __FILE__ ) . '/admin/functions.php';
require dirname( __FILE__ ) . '/includes/db/class-db.php';
require dirname( __FILE__ ) . '/includes/table/class-table.php';

init_db();

// Cargar índice de templates:
load_admin_page();
