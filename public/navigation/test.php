<?php
require 'class-navigation.php';

$links = array(
	array(
		'title' => 'Inicio',
		'href'  => 'index.php',
	),
	array(
		'title' => 'Blog',
		'href'  => 'blog.php?page=blog',
	),
	array(
		'title' => 'Nosotros',
		'href'  => 'nosotros.php?page=nosotros',
	),
	array(
		'title' => 'Contacto',
		'href'  => 'index.php?page=contacto',
	),
);

$nav = new Nav( $links, 'main-navigation', 'navigation' );
$nav->print();

$nav2 = new Nav( $links, 'secondary-navigation', 'navigation' );
$nav2->print();

/*function navegacion( $links ) {
	echo '<nav><ul>' . "\n";

	foreach ( $links as $link ) {
		echo '<li><a href="' . $link['href'] . '">' . $link['title'] . '</a></li>' . "\n";
	}

	echo '</ul></nav>' . "\n";
}

navegacion( $links );*/

/*
1) A partir del array $links, crear un proceso que imprima el siguiente código HTML:

<nav>
	<ul>
		<li><a href="index.php">Inicio</a></li>
		<li><a href="index.php?page=blog">Blog</a></li>
		<li><a href="index.php?page=nosotros">Nosotros</a></li>
		<li><a href="index.php?page=contacto">Contacto</a></li>
	</ul>
</nav>

2) Una vez impreso el código, reformular el proceso como una función.
3) Una vez creada la función, reformular el proceso como una clase.
*/
