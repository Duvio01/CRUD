<?php
	require_once('consultas.php');
	require_once('datos.php');
	$crud= new consultas();
	$usuario=new datos();
	$usuario=$crud->obtenerUsuario($_GET['id']);
?>
<html>
<head>
	<title>Actualizar Libro</title>
</head>
<body>
	<form action='controlador.php' method='post'>
	<table>
		<tr>
			<input type='hidden' name='id' value='<?php echo $usuario->getId()?>'>
			<td>Nombre</td>
			<td> <input type='text' name='nombre' value='<?php echo $usuario->getNombre()?>'></td>
		</tr>
		<tr>
			<td>Apellido</td>
			<td><input type='text' name='apellido' value='<?php echo $usuario->getApellido()?>' ></td>
		</tr>
		<tr>
			<td>Edad</td>
			<td><input type='text' name='edad' value='<?php echo $usuario->getEdad() ?>'></td>
		</tr>
		<input type='hidden' name='actualizar' value='actualizar'>
	</table>
	<input type='submit' value='Guardar'>
	<a href="index.php">Volver</a>
</form>
</body>
</html>