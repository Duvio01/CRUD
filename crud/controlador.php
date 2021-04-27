<?php
require_once('consultas.php');
require_once('datos.php');

$crud= new consultas();
$dato= new datos();

	if (isset($_POST['insertar'])) {
		$dato->setNombre($_POST['nombre']);
		$dato->setApellido($_POST['apellido']);
		$dato->setEdad($_POST['edad']);
		$crud->insertar($dato);
		header('Location: index.php');
	}elseif(isset($_POST['actualizar'])){
		$dato->setId($_POST['id']);
		$dato->setNombre($_POST['nombre']);
		$dato->setApellido($_POST['apellido']);
		$dato->setEdad($_POST['edad']);
		$crud->actualizar($dato);
		header('Location: index.php');
	}elseif ($_GET['accion']=='e') {
		$crud->eliminar($_GET['id']);
		header('Location: index.php');		
	}elseif($_GET['accion']=='a'){
		header('Location: actualizar.php');
	}
?>