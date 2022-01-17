<?php

class ConexionBD{

	var $url = "localhost";
	var $conexion;
	var $usuario = "postgres";
	var $contrasenia = "root";
	var $bd = "postgres";

	public function __construct(){
		$connection_string ="host=".$this->url." dbname=".$this->bd." user=".$this->usuario." password=".$this->contrasenia;
		
		$this->conexion = pg_connect(strval($connection_string));

		
	}

	function ejecutar($sql){	

		$result = pg_query($this->conexion,$sql);
		return $result;
	}

}

?>
