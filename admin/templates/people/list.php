<?php
$people = get_people();

$rows = array();

foreach ( $people as $key => $value ) {
	$rows[ $key ] = $value;
	$rows[ $key ]['edit']   = '<a href="admin.php?page=people/update&id=' . $key . '">Modificar</a>';
	$rows[ $key ]['remove'] = '<a href="admin.php?page=people/remove&id=' . $key . '">Eliminar</a>';
}

$people_table = new Table(
	'people-list',
	array( 'Nombre', 'Apellido', 'Edad', 'Modificar', 'Eliminar' ),
	$rows,
	'list-table'
);

$people_table->print();
