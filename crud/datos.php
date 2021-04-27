<?php
	class datos{
		private $id;
		private $nombre;
		private $apellido;
		private $edad;

		function __construct(){}

		public function getNombre(){
		return $this->nombre;
		}

		public function setNombre($nombre){
			$this->nombre = $nombre;
		}

		public function getApellido(){
			return $this->apellido;
		}

		public function setApellido($apellido){
			$this->apellido = $apellido;
		}

		public function getEdad(){
		return $this->edad;
		}

		public function setEdad($edad){
			$this->edad = $edad;
		}
		public function getId(){
			return $this->id;
		}

		public function setId($id){
			$this->id = $id;
		}
	}
?>