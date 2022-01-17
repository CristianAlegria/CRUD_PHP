<!DOCTYPE html>
<html>
   <head>
     <meta charset="utf-8" />
     <title>Registro Empleado</title>   	 
     	<style>
				.myDiv {				     
				  text-align: center;
				}
       </style>
     	 
   </head>      
   <body> 
   <div class="myDiv">   
	   <form  name="Registro"action="../Controlador/ControladorEmpleado.php?opcion=1" method="post" >
		<h1>Formulario De Registro</h1>	

          <label id="idLabelTipoDocumento">Tipo de Documento:</label>
          <br>
          <select name="nameTipoDocumento" id="idTipoDocumento" placeholder="tipoDocumento">
                <?php
					          	include_once("../Controlador/ControladorOption.php");
					          	$controladorOption = new ControladorOption();

					            $tiposDocumentos= $controladorOption->CargarTipoDocumento();
			                for($i=0; $i< sizeof($tiposDocumentos); $i++){
			                	 echo '<option value="'. $tiposDocumentos[$i]->getId().'">'. $tiposDocumentos[$i]->getNombre().'</option>';
			                	}								          
								?>
	          </select>
	        
          <br>
          <br>
				  <input type="text" id ="idCedula" name="nameCedula" placeholder="Cedula">
				  <br>
				  <br>
			    <input type="text" id ="idNombres" name="nameNombres" placeholder="Nombres">
			    <br>
			    <br>
				  <input type="text" id ="idApellidos" name="nameApellidos" placeholder="Apellidos">
          <br>
          <br>
          <label id="idCargo">Cargo:</label>
          <br>
          <?php ?>
				  <select name="nameCargo" id="idCargo">
								  <?php					          	
					            $cargos= $controladorOption->CargarCargos();
			                for($i=0; $i< sizeof($cargos); $i++){
			                	 echo '<option value="'. $cargos[$i]->getId().'">'. $cargos[$i]->getNombre().'</option>';
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
			                	 echo '<option value="'. $ciudades[$i]->getId().'">'. $ciudades[$i]->getNombre().'</option>';
			                	}								          
								?>
          </select>
          <br>
          <br>
				  <input type="text" id ="idSalario" name="nameSalario" placeholder="Salario $">
          <br>	
          <br>  
				  
				  <button type="submit" >Registrar</button>		
				  <button type="button" id="idInicio" onclick = "location.href='index.php'">Inicio</button>	  
	    </form>	
	  </div>
   </body>
</html>


