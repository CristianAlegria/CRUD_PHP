<?php 
     
           include_once("../Modelo/Empleado.php");

     

         
	        $cedula= $_POST['nameCed'];
	     	$opcion=$_GET["opcion"];
            
          
			$empleado = new Empleado();	

			$nombres = "";
	     	$apellidos = "";
			$salario = "";	
			$idTipoDocumento = "";	  
			$idCargo = "";
			$idCiudad = "";
                    
            
			
			switch ($opcion) {
			    case 1:
			       	guardarDatos();				
			        $empleado->crearObjEmpleadoDatos($cedula,$nombres,$apellidos,$salario,$idCargo,$idTipoDocumento,$idCiudad);
			        $empleado->crearEmpleado();			        
			        break;
			    case 2:
			       // $empleado-> eliminarEmpleado($cedula);
			            echo json_encode($opcion);	
			        break;
		        case 3:
		              guardarDatos();
		              $empleado->crearObjEmpleadoDatos($cedula,$nombres,$apellidos,$salario,$idCargo,$idTipoDocumento,$idCiudad);
		              $empleado->actualizarEmpleado($cedula);
		              break;
			    
           } 
            
		   
		   function guardarDatos(){
		   	global $nombres,$apellidos,$salario,$idTipoDocumento,$idCargo,$idCiudad ;

		   	$nombres = $_POST['nameNombres'];
	     	$apellidos = $_POST['nameApellidos'];
			$salario = $_POST['nameSalario'];	
			$idTipoDocumento = $_POST['nameTipoDocumento'];	  
			$idCargo = $_POST['nameCargo'];
			$idCiudad = $_POST['nameCiudad']; 
		   }
		    
			//header('Location: ../Vista/index.php');//ir a la pagina que estaba*/
	              		

      
      


 ?>