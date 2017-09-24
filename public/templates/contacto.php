<?php
if ( isset( $_POST ) ) {
	var_dump( $_POST );
}

load_template( 'header' ); ?>

<h1>Contacto</h1>

<?php load_template( 'navigation' ); ?>

<form action="" method="post">
	<p>
		<label for="nombre">Nombre y apellido</label><br />
		<input type="text" id="nombre" required name="nombre" value="" placeholder="Juan Pérez" />
	</p>

	<p>
		<label for="mail">Mail</label><br />
		<input type="mail" id="mail" name="mail" value="" placeholder="juanperez@mail.com" />
	</p>

	<p>
		<label for="mensaje">Mensaje</label><br />
		<textarea id="mensaje" name="mensaje" placeholder="Mensaje..."></textarea>
	</p>

	<input type="submit" name="" value="Enviar">
</form>

<?php load_template( 'footer' ); ?>
