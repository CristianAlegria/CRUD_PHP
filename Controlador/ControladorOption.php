<?php 
     
     include_once("../Modelo/Empleado.php");
     class ControladorOption{

         public function __construct(){			
		}

          public function CargarCargos(){
               $cargo = new Cargo();
               $cargos = $cargo->consultarCargos();

               return $cargos;
          }

          public function CargarCiudades(){
               $ciudad = new Ciudad();
               $ciudades = $ciudad->consultarciudades();

               return $ciudades;
          }

          public function CargarTipoDocumento(){
               $tipoDocumento = new TipoDocumento();
               $tiposDocumentos = $tipoDocumento->consultarTiposDocumentos();

               return $tiposDocumentos;

          }		

          public function MostrarEmpleados(){
              $empleado = new Empleado();
              $empleados = $empleado->consultarEmpleados();

              return $empleados;

          }

          public function MostrarEmpleado($cedula){
              $empleado = new Empleado();
              $empleado = $empleado->consultarEmpleadoPorCedula($cedula);

              return $empleado;

          }
     }   


 ?>