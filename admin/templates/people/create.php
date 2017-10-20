<?php
if ( ! empty( $_POST ) ) {
	global $db;

	if ( $db->insert( 'usuarios', $_POST ) ) {
		echo 'Se insertó correctamente el usuario ' . $_POST['username'];
	}
}
?>

<form action="" method="post">
	<p>
		<label for="username">Nombre de usuario</label><br />
		<input type="text" name="username" value="">
	</p>

	<p>
		<label for="name">Nombre completo</label><br />
		<input type="text" name="name" value="">
	</p>

	<p>
		<label for="email">Email</label><br />
		<input type="email" name="email" value="">
	</p>

	<p>
		<label for="password">Contraseña</label><br />
		<input type="password" name="password" value="">
	</p>

	<input type="submit" name="" value="Enviar">
</form>
