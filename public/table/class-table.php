<?php
class Tabla {
	var $id;
	var $class;
	var $columnas;
	var $filas;

	function __construct( $id, $columnas, $filas, $class ) {
		$this->id = $id;
		$this->filas = $filas;
		$this->columnas = $columnas;
		$this->class = $class;
	}

	function print() {
		echo '<table id="' . $this->id . '" class="' . $this->class . '">';

		?>
		<tr>
			<?php foreach( $this->columnas as $columna ) {
				echo '<th>' . $columna . '</th>';
			} ?>
		</tr>
		<?php

		foreach( $this->filas as $fila ) {
			?>
			<tr>
				<?php foreach( $fila as $dato ) {
					echo '<td>' . $dato . '</td>';
				} ?>
			</tr>
			<?php
		}

		echo '</table>';
	}
}
