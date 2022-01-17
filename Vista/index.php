<!DOCTYPE html>
<html>
  <head>

      <style>
          table {
            
            width: 100%;
          }

          td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
          }    
      </style>

    </head>
  <body>

      <h2>Tabla Nomina</h2>
      <div align="left">
          <a href="registro.php">Nuevo Empleado.</a>
          <br>
          <a href="../Vista/index.php">Listar Empleados.</a>
          <br>         
          
          
      </div> 
      <br>  
      <form  name="buscar"action="../Vista/index.php" method="post" >
          <input type="text" id ="idCedula" name="nameCedula" placeholder="Cedula">
          <button type="submit" >Buscar Empleado</button>


      </form>       

       <form  id="idFormulario">
          <input type="text" id ="idCed" name="nameCed" placeholder="Cedula">
          <button type="submit" id="idBtnBuscar" >Buscar Empleado</button>
          <button type="submit" id="idBtnEliminar"   >Eliminar Empleado</button> 
          <button type="submit" id="idBtnActualizar">Actualizar Datos Empleado</button> 
        </form>       

       <p id="valueInput"></p> 
      <br>
      <br>
      
      <table>
        <tr>
          <th>Tipo Documento</th>
          <th>Cedula</th>
          <th>Nombre Completo</th>         
          <th>Cargo</th>
          <th>Ciudad</th>
          <th>Salario</th>          
          
          
        </tr>        

          <?php
             include_once("../Controlador/ControladorOption.php");   
             if(isset($_POST['nameCedula'])){
                $cedula= $_POST['nameCedula'];
                $controladorOption = new ControladorOption(); 
                $empleado = $controladorOption->MostrarEmpleado($cedula);                 
                      
                echo '<tr>
                         <td>'.$empleado->getTipo_documento()->getNombre().'</td>
                         <td>'.$empleado->getCedula().'</td>
                         <td>'.$empleado->getNombre().' '.$empleado->getApellido().'</td>                      
                         <td>'.$empleado->getCargo()->getNombre().'</td>
                         <td>'.$empleado->getCiudad()->getNombre().'</td>
                         <td>'.$empleado->getSalario().'</td>              
                    </tr>';
                   echo $empleado->getCedula();

             }else{
                  $controladorOption = new ControladorOption(); 
                  $empleados = $controladorOption->MostrarEmpleados();
                  for ($i=0; $i <sizeof($empleados) ; $i++) { 
                    
                    echo "<tr>
                             <td>".$empleados[$i]->getTipo_documento()->getNombre()."</td>
                             <td>".$empleados[$i]->getCedula()."</td>
                             <td>".$empleados[$i]->getNombre()." ".$empleados[$i]->getApellido()."</td>                      
                             <td>".$empleados[$i]->getCargo()->getNombre()."</td>
                             <td>".$empleados[$i]->getCiudad()->getNombre()."</td>
                             <td>".$empleados[$i]->getSalario()."</td>
                          
                        </tr>";
                  }
             }                      

          ?>     
        
      </table>
      <br>
      <br>
      <form  name="eliminar"action="../Controlador/ControladorEmpleado.php?opcion=2" method="post" >
          <input type="text" id ="idCedula" name="nameCedula" placeholder="Cedula">          
          <button type="submit" >Eliminar Empleado</button>   
      </form>
      <form  name="nameActualizar"action="actualizar.php" method="post" >
          <input type="text" id ="idCedulaActualizar" name="nameCedulaActualizar" placeholder="Cedula">          
          <button type="submit" >Actualizar Datos Empleado</button>   
      </form> 
       <script type="text/javascript" src="eventos.js"></script>
 </body>
</html>