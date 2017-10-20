<?php
global $db;

$people = $db->get_from( 'usuarios' );

$rows = array();

foreach ( $people as $key => $value ) {
	$rows[ $key ] = $value;

	$rows[ $key ]['edit']   = '<a href="admin.php?page=people/update&id=' . $key . '">Modificar</a>';

	$rows[ $key ]['remove'] = '<a href="admin.php?page=people/remove&id=' . $key . '">Eliminar</a>';
}

$people_table = new Table(
	'people-list',
	array( 'ID', 'Username', 'Nombre', 'Email', 'Password', 'Modificar', 'Eliminar' ),
	$rows,
	'list-table'
);

$people_table->print();
