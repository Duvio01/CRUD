<?php
require_once('conexion.php');

	class consultas{
		public function __construct(){}


		public function insertar($usuario){
			$db=Db::conectar();
			$insert=$db->prepare('INSERT INTO listado_usuarios values(NULL,:nombre,:apellido,:edad)');
			$insert->bindValue('nombre',$usuario->getNombre());
			$insert->bindValue('apellido',$usuario->getApellido());
			$insert->bindValue('edad',$usuario->getEdad());
			$insert->execute();

		}

		public function mostrar(){
			$db=Db::conectar();
			$listaUsuarios=[];
			$select=$db->query('SELECT * FROM listado_usuarios');

			foreach($select->fetchAll() as $dato){
				$usuario= new datos();
				$usuario->setId($dato['id']);
				$usuario->setNombre($dato['nombre']);
				$usuario->setApellido($dato['apellido']);
				$usuario->setEdad($dato['edad']);
				$listaUsuarios[]=$usuario;
			}
			return $listaUsuarios;
		}

		public function eliminar($id){
			$db=Db::conectar();
			$eliminar=$db->prepare('DELETE FROM listado_usuarios WHERE ID=:id');
			$eliminar->bindValue('id',$id);
			$eliminar->execute();
		}

		// método para buscar un libro, recibe como parámetro el id del libro
		public function obtenerUsuario($id){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM listado_usuarios WHERE ID=:id');
			$select->bindValue('id',$id);
			$select->execute();
			$dato=$select->fetch();
			$usuario= new datos();
			$usuario->setId($dato['id']);
			$usuario->setNombre($dato['nombre']);
			$usuario->setApellido($dato['apellido']);
			$usuario->setEdad($dato['edad']);
			return $usuario;
		}

		public function actualizar($usuario){
			$db=Db::conectar();
			$actualizar=$db->prepare('UPDATE listado_usuarios SET nombre=:nombre, apellido=:apellido,edad=:edad  WHERE ID=:id');
			$actualizar->bindValue('id',$usuario->getId());
			$actualizar->bindValue('nombre',$usuario->getNombre());
			$actualizar->bindValue('apellido',$usuario->getApellido());
			$actualizar->bindValue('edad',$usuario->getEdad());
			$actualizar->execute();
		}
	}
?>