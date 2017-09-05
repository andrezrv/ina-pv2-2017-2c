<?php
class Nav {
	var $id;
	var $classes;
	var $links;

	function __construct( $links, $id, $classes ) {
		$this->links = $links;
		$this->id = $id;
		$this->classes = $classes;
	}

	function print() {
		echo '<nav id="' . $this->id . '" class="' . $this->classes . '"><ul>' . "\n";

		foreach ( $this->links as $link ) {
			echo '<li><a href="' . $link['href'] . '">' . $link['title'] . '</a></li>' . "\n";
		}

		echo '</ul></nav>' . "\n";
	}
}
