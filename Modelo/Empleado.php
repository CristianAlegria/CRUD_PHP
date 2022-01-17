
<?php

    include_once("ConexionBD.php");
    include_once("Cargo.php");
    include_once("TipoDocumento.php");
    include_once("Ciudad.php");

	class Empleado{
		
		private  $tipo_documento;
		private  $cedula;
		private  $nombre;
		private  $apellido;
		private  $cargo;
		private  $ciudad;
		private  $fecha_creacion_empleado;	
		private  $salario;


		public function __construct(){

			
		}


		
		public function getTipo_documento()
		{
		   return $this->tipo_documento;
		}
		public function setTipo_documento($tipo_documento)
		{
		   $this->tipo_documento = $tipo_documento;
		   
		}


		public function getCedula()
		{
		   return $this->cedula;
		}
		public function setCedula($cedula)
		{
		   $this->cedula = $cedula;
		   
		}


		public function getNombre()
		{
		  return $this->nombre;
		}
		public function setNombre($nombre)
		{
		  $this->nombre = $nombre;
		  
		}


		public function getApellido()
		{
		  return $this->apellido;
		}
		public function setApellido($apellido)
		{
		  $this->apellido = $apellido;
		  
		}

        
        public function getCargo()
        {
            return $this->cargo;
        }
        public function setCargo($cargo)
        {
            $this->cargo = $cargo;
            
        }


        public function getCiudad()
        {
            return $this->ciudad;
        }
        public function setCiudad($ciudad)
        {
            $this->ciudad = $ciudad;
            
        }



		public function getFecha_creacion_empleado()
		{
		    return $this->fecha_creacion_empleado;
		}
		public function setFecha_creacion_empleado($fecha_creacion_empleado)
		{
		    $this->fecha_creacion_empleado = $fecha_creacion_empleado;
		    
		}


        public function getSalario()
        {
            return $this->salario;
        }
        public function setSalario($salario)
        {
            $this->salario = $salario;
            
        }

		function consultarEmpleadoPorCedula($cedula){
				
			
			$sql ="SELECT
					td.tipo_documento_id,
					td.tipo_documento_name,
					em.empleado_id,
					em.empleado_name,
					em.last_name,
					em.salario,
					em.fecha_creacion_empleado,  
					ca.cargo_id,
					ca.cargo_name, 
					ca.codigo_dane,
					ci.ciudad_id,
					ci.ciudad_name
						        

					FROM 	empleado em 

					INNER JOIN ciudad ci ON em.empleado_ciudad_id = ci.ciudad_id 
					INNER JOIN cargo ca ON em.empleado_cargo_id  = ca.cargo_id
					INNER JOIN tipo_documento td ON em.empleado_tipo_documento_id = td.tipo_documento_id 
					WHERE empleado_id = ".$cedula;

			
			$conexionBD = new ConexionBD();
            
		
			$res = $conexionBD->ejecutar($sql);		

			
		    while($fila = pg_fetch_array($res)){				
				$empleado = new Empleado();
				$cargo = new Cargo();
				$ciudad = new Ciudad();
				$tipoDocumento = new TipoDocumento();

				$tipoDocumento->setId($fila[0]);
				$tipoDocumento->setNombre($fila[1]);
				$empleado->setTipo_documento($tipoDocumento);
				
				
				$empleado->setCedula($fila[2]);					
				$empleado->setNombre($fila[3]);
				$empleado->setApellido($fila[4]);
				$empleado->setSalario($fila[5]);
				$empleado->setFecha_creacion_empleado($fila[6]);

				$cargo->setId($fila[7]);
				$cargo->setNombre($fila[8]);
                $cargo->setCodigo_dane($fila[9]);
				$empleado->setCargo($cargo);

				$ciudad->setId($fila[10]);	
				$ciudad->setNombre($fila[11]);	
				$empleado->setCiudad($ciudad);					
				
					
		    }

		    if (empty($empleado)) {
		    	 return null;
		    }else{

                 return $empleado;
		    }			

				
				
		}


        function consultarEmpleados(){
				
			
			$sql ="SELECT
					td.tipo_documento_id,
					td.tipo_documento_name,
					em.empleado_id,
					em.empleado_name,
					em.last_name,
					em.salario,
					em.fecha_creacion_empleado,  
					ca.cargo_id,
					ca.cargo_name, 
					ca.codigo_dane,
					ci.ciudad_id,
					ci.ciudad_name
						        

					FROM 	empleado em 

					INNER JOIN ciudad ci ON em.empleado_ciudad_id = ci.ciudad_id 
					INNER JOIN cargo ca ON em.empleado_cargo_id  = ca.cargo_id
					INNER JOIN tipo_documento td ON em.empleado_tipo_documento_id = td.tipo_documento_id 
					ORDER BY empleado_name;";

			
			$conexionBD = new ConexionBD();
            
		
			$res = $conexionBD->ejecutar($sql);

			
			$empleados = array();

			
		    while($fila = pg_fetch_array($res)){				
				$empleado = new Empleado();
				$cargo = new Cargo();
				$ciudad = new Ciudad();
				$tipoDocumento = new TipoDocumento();

				$tipoDocumento->setId($fila[0]);
				$tipoDocumento->setNombre($fila[1]);
				$empleado->setTipo_documento($tipoDocumento);
				
				
				$empleado->setCedula($fila[2]);					
				$empleado->setNombre($fila[3]);
				$empleado->setApellido($fila[4]);
				$empleado->setSalario($fila[5]);
				$empleado->setFecha_creacion_empleado($fila[6]);

				$cargo->setId($fila[7]);
				$cargo->setNombre($fila[8]);
                $cargo->setCodigo_dane($fila[9]);
				$empleado->setCargo($cargo);

				$ciudad->setId($fila[10]);	
				$ciudad->setNombre($fila[11]);			
				$empleado->setCiudad($ciudad);	

				array_push($empleados,$empleado);
					
		    }	
				
			return $empleados;
				
				
		}


		function crearEmpleado(){
					//sentencia sql para insertar usuario, se concatenan los datos del usuario.	
					$sql ="insert into empleado (empleado_id ,empleado_name ,last_name ,empleado_cargo_id,   empleado_tipo_documento_id,empleado_ciudad_id,salario, empleado_usuario_id, fecha_creacion_empleado ) 
					     values(".$this->cedula.",'".$this->nombre."','".$this->apellido."', "
					             .$this->cargo->getId().", ".$this->tipo_documento->getId().", "
					             .$this->ciudad->getId().","
					             .$this->salario.", 3 , "."current_timestamp)";
					

					//se instancia la clase conexion
					$conexionBD  = new ConexionBD();	

					//se llama al metodo ejecutar de la clase conexion si hubo exito al guardar nos retornada verdadero
					if($conexionBD->ejecutar($sql)){
					    return true;	
					}else{
					    return false;	
					}	
			}


			function actualizarEmpleado($cedula){
					//sentencia sql para insertar usuario, se concatenan los datos del usuario.	
										
                    $sql="update empleado set empleado_id =".$this->cedula.", empleado_name ='"
                                             .$this->nombre."',last_name='".$this->apellido.
                                            "',empleado_cargo_id=".$this->cargo->getId().",empleado_tipo_documento_id="
                                             .$this->tipo_documento->getId().", empleado_ciudad_id=".$this->ciudad->getId(). "
                                             ,salario=".$this->salario.
                                            " where empleado_id=".$cedula.";";

                    
					//se instancia la clase conexion
					$conexionBD  = new ConexionBD();	

					//se llama al metodo ejecutar de la clase conexion si hubo exito al guardar nos retornada verdadero
					if($conexionBD->ejecutar($sql)){
					    return true;	
					}else{
					    return false;	
					}	
			}


			function eliminarEmpleado($cedula){
					//sentencia sql para insertar usuario, se concatenan los datos del usuario.	
										
                    $sql="delete from empleado
                                where empleado_id =" .$cedula.";";

                    
					//se instancia la clase conexion
					$conexionBD  = new ConexionBD();	

					//se llama al metodo ejecutar de la clase conexion si hubo exito al guardar nos retornada verdadero
					if($conexionBD->ejecutar($sql)){
					    return true;	
					}else{
					    return false;	
					}	
			}


            function crearObjEmpleadoDatos($cedula,$nombres,$apellidos,$salario,$idCargo,$idTipoDocumento,$idCiudad){
                
				$tipoDocumento = new TipoDocumento();
				$ciudad = new Ciudad();
				$cargo = new Cargo();

			   	$this->cedula=$cedula;
				$this->nombre=$nombres;
				$this->apellido=$apellidos;
				$this->salario=$salario;

				$cargo->setId($idCargo);
				$this->cargo=$cargo;

				$tipoDocumento->setId($idTipoDocumento);
				$this->tipo_documento=$tipoDocumento;

				$ciudad->setId($idCiudad);
				$this->ciudad=$ciudad;

		   }

		
	}
		
?>