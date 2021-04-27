<?php
require_once('consultas.php');
require_once('datos.php');
$crud=new consultas();
$dato= new datos();
$listaUsuarios=$crud->mostrar();
?>

<html>
<head>
	<title>Mostrar Libros</title>
</head>
<body>
	<table border=1>
		<head>
			<td>Nombre</td>
			<td>Apellido</td>
			<td>Edad</td>
			<td>Actualizar</td>
			<td>Eliminar</td>
		</head>
		<body>
			<?php foreach ($listaUsuarios as $dato) {?>
			<tr>
				<td><?php echo $dato->getNombre() ?></td>
				<td><?php echo $dato->getApellido() ?></td>
				<td><?php echo $dato->getEdad()?> </td>
				<td><a href="actualizar.php?id=<?php echo $dato->getId()?>&accion=a">Actualizar</a> </td>
				<td><a href="controlador.php?id=<?php echo $dato->getId()?>&accion=e">Eliminar</a>   </td>
			</tr>
			<?php }?>
		</body>
	</table>
	<a href="index.php">Volver</a>
</body>
</html>