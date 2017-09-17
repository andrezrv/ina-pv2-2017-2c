<?php
require dirname( __FILE__ ) . '/class-table.php';

$filas = array(
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
