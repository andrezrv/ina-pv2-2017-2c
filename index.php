<?php
require_once dirname( __FILE__ ) . '/config.php';

// Incluir funciones, clases, etc.
require_once dirname( __FILE__ ) . '/public/functions.php';

init_db();

// Cargar índice de templates:
load_page();
