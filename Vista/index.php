<html lang="es">
      <head>
        <meta charset="utf-8" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>Nomina Empleados</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
      </head>
      <body>

      <div class="container mt-3">
          <div class="row">
             <div class="col-md-12">               
               <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#idModalCrearEmpleado">
                Crear Empleado
              </button>
               
             <hr>

             <form method="post" class="form-inline">
                <div class="form-group mr-3">
                  <input type="text" id="idCedula" name="nameCedula" placeholder="Buscar por # cedula" class="form-control">
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Buscar
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                </svg>
                </button>
            </form>
            <a class="btn btn-primary" href="index.php" role="button">Listar Empleados</a>
            
             </div>
          </div>
       </div>

      <div class="container">
          <div class="row">
             <div class="col-md-12">
                <h2 class="mt-3">Tabla Empleados</h2>
                    <table class="table table-striped">
                      <thead class="thead-dark">
                        <tr>
                          <th scope="col">DOCUMENTO DE IDENTIDAD</th>
                          <th scope="col"># CEDULA</th>
                          <th scope="col">NOMBRE COMPLETO</th>
                          <th scope="col">CARGO</th>
                          <th scope="col">CIUDAD</th>
                          <th scope="col">SALARIO</th>
                          <th scope="col">ACCIÓN</th>
                        </tr>
                      </thead>
                      <tbody>
                        
                      <?php
                          include_once("../Controlador/ControladorConsulta.php");   
                          if(isset($_POST['nameCedula'])){
                              $cedula= $_POST['nameCedula'];
                              $controladorConsulta = new ControladorConsulta();  
                              $empleado = $controladorConsulta->MostrarEmpleado($cedula);                 
                              $empleados = array($empleado);
                              for ($i=0; $i <sizeof($empleados) ; $i++) { 
                              
                                echo "<tr>
                                        <td>".$empleados[$i]->getTipo_documento()->getNombre()."</td>
                                        <td>".$empleados[$i]->getCedula()."</td>
                                        <td>".$empleados[$i]->getNombre()." ".$empleados[$i]->getApellido()."</td>                      
                                        <td>".$empleados[$i]->getCargo()->getNombre()."</td>
                                        <td>".$empleados[$i]->getCiudad()->getNombre()."</td>
                                        <td>".$empleados[$i]->getSalario().'</td>
                                        <td>                        
                                            <a href="#idModalEditar_'.$empleados[$i]->getCedula().'" class="btn btn-success btn-sm" data-toggle="modal">✏️Editar </a>
                                            <a href="#idModalEliminar_'.$empleados[$i]->getCedula().'" class="btn btn-danger" data-toggle="modal">🗑️Borrar</a>
                                        </td>
                                    </tr>';
                                    include('editar.php');
                                    include('eliminar.php');
                              }
                                

                          }else{
                            $controladorConsulta = new ControladorConsulta(); 
                            $empleados = $controladorConsulta->MostrarEmpleados();
                            for ($i=0; $i <sizeof($empleados) ; $i++) { 
                              
                              echo "<tr>
                                      <td>".$empleados[$i]->getTipo_documento()->getNombre()."</td>
                                      <td>".$empleados[$i]->getCedula()."</td>
                                      <td>".$empleados[$i]->getNombre()." ".$empleados[$i]->getApellido()."</td>                      
                                      <td>".$empleados[$i]->getCargo()->getNombre()."</td>
                                      <td>".$empleados[$i]->getCiudad()->getNombre()."</td>
                                      <td>".$empleados[$i]->getSalario().'</td>
                                      <td>                        
                                          <a href="#idModalEditar_'.$empleados[$i]->getCedula().'" class="btn btn-success btn-sm" data-toggle="modal">✏️Editar </a>
                                          <a href="#idModalEliminar_'.$empleados[$i]->getCedula().'" class="btn btn-danger" data-toggle="modal">🗑️Borrar</a>
                                      </td>
                                  </tr>';
                                  include('editar.php');
                                  include('eliminar.php');
                            }
                          }                      

                        ?>    
                                               
                      </tbody>
                    </table>
              </div>
           </div>
      </div> 
      

      <?php include('crear_empleado.php'); ?>      
    
      <!-- jQuery -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>     
      <!-- Javascript Bootstrap -->
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>