<?php
require dirname( __FILE__ ) . '/class-table.php';

$animales = array(
	array(
		'nombre' => 'perro',
		'tipo' => 'mamifero',
		'color' => 'negro',
	),
	array(
		'nombre' => 'gato',
		'tipo' => 'mamifero',
		'color' => 'verde',
	),
	array(
		'nombre' => 'loro',
		'tipo' => 'mamifero',
		'color' => 'naranja',
	),
);

$tabla = new Tabla(
	'mi-tabla',
	array( 'Nombre', 'Tipo', 'Color' ),
	$animales,
	'tabla'
);

$tabla->print();

$tabla2 = new Tabla(
	'personas',
	array( 'Nombre', 'Apellido', 'Edad' ),
	$filas,
	'tabla'
);

$tabla2->print();
