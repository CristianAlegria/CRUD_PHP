<!DOCTYPE html>
<html>
   <head>
     <meta charset="utf-8" />
     <title>Actualizar Empleado</title>   	 
     	<style>
				.myDiv {				     
				  text-align: center;
				}
       </style>
     	 
   </head>      
   <body> 
   	  <?php
   	     include_once("../Controlador/ControladorOption.php");
         $cedula= $_POST['nameCedulaActualizar'];
         $controladorOption = new ControladorOption();	
         $empleado =$controladorOption->MostrarEmpleado($cedula);
   	  ?>
   <div class="myDiv">   
	    <form  name="actualizar" action="../Controlador/ControladorEmpleado.php?opcion=3" method="post" >
	       <h1>Actualizar Datos Empleado</h1>     
           <br>  
           <br> 
           <br> 
         
          <label id="idLabelTipoDocumento">Tipo de Documento:</label>
          <br>
          <select name="nameTipoDocumento" id="idTipoDocumento" placeholder="tipoDocumento">
                <?php          	
		          		          	
                   
		            $tiposDocumentos= $controladorOption->CargarTipoDocumento();
                    for($i=0; $i< sizeof($tiposDocumentos); $i++){

                    	if($tiposDocumentos[$i]->getId()==$empleado->getTipo_documento()->getId()){
                            echo '<option value="'. $empleado->getTipo_documento()->getId().'" selected>'. $empleado->getTipo_documento()->getNombre().'</option>';
                    	}else{
                             echo '<option value="'. $tiposDocumentos[$i]->getId().'">'. $tiposDocumentos[$i]->getNombre().'</option>';
                    	}
                	  

                	}								          
				?>
	          </select>
	        
          <br>
          <br>
				<input type="text" id ="idCedula" name="nameCedula" placeholder="Cedula" <?php echo 'value="'. $empleado->getCedula().'" ';?> readonly>
				<br>
				<br>
			    <input type="text" id ="idNombres" name="nameNombres" placeholder="Nombres" <?php echo 'value="'. $empleado->getNombre().'"';?> >
			    <br>
			    <br>
				  <input type="text" id ="idApellidos" name="nameApellidos" placeholder="Apellidos" <?php echo 'value="'. $empleado->getApellido().'"';?> >
          <br>
          <br>
          <label id="idCargo">Cargo:</label>
          <br>
          <?php ?>
				  <select name="nameCargo" id="idCargo">
								  <?php					          	
							            $cargos= $controladorOption->CargarCargos();
					                     for($i=0; $i< sizeof($cargos); $i++){

								            if($cargos[$i]->getId()==$empleado->getCargo()->getId()){
					                           echo '<option value="'.$empleado->getCargo()->getId().'" selected>'. $empleado->getCargo()->getNombre().'</option>';
					                    	}else{
					                             echo '<option value="'. $cargos[$i]->getId().'">'. $cargos[$i]->getNombre().'</option>';
					                    	}
					                	 
					                	}								          
							  	?>
          </select>
	        
          <br>
          <br>
          <label id="idCiudad">Ciudad:</label>
          <br>
          <select name="nameCiudad" id="idCiudad">
								  <?php
					          	
							            $ciudades= $controladorOption->CargarCiudades();
					                    for($i=0; $i< sizeof($ciudades); $i++){

					                	if($ciudades[$i]->getId()==$empleado->getCiudad()->getId()){
							                           echo '<option value="'.$empleado->getCiudad()->getId().'" selected>'. $empleado->getCiudad()->getNombre().'</option>';
				                    	}else{
				                             echo '<option value="'. $ciudades[$i]->getId().'">'. $ciudades[$i]->getNombre().'</option>';
					                	}								          
				                    }
			                	 
								?>
          </select>
          <br>
          <br>
				  <input type="text" id ="idSalario" name="nameSalario" placeholder="Salario $" <?php echo 'value="'. $empleado->getSalario().'"';?> >
          <br>	
          <br>  
				  
				  <button type="submit" >Aceptar</button>		
				  <button type="button" id="idInicio" onclick = "location.href='index.php'">Inicio</button>	  
	    </form>	
	  </div>
   </body>
</html>


