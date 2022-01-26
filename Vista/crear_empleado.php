
<div class="modal fade" id="idModalCrearEmpleado" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Crear Empleado</h5>
              
              <form  method="POST" action="../Controlador/ControladorEmpleado.php?opcion=1">
              <br>
              <br>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Tipo Documento</label>
                    <select class="form-control" name="nameTipoDocumento" id="idTipoDocumento" >
                        <option selected>SELECCIONE</option>
                        <?php
                          include_once("../Controlador/ControladorConsulta.php");
                          $controladorConsulta = new ControladorConsulta();

                          $tiposDocumentos= $controladorConsulta->CargarTipoDocumento();
                          for($i=0; $i< sizeof($tiposDocumentos); $i++){
                              echo '<option value="'. $tiposDocumentos[$i]->getId().'">'. $tiposDocumentos[$i]->getNombre().'</option>';
                          }								          
                       ?>
                    </select>
                </div> 

                <div class="row form-group">                  
                    <label class="control-label" >Numero Cedula:</label>                
                    <input type="text" class="form-control" id="idCedula" name="nameCedula">                  
                </div>
                                      
                <div class="row form-group">                  
                    <label class="control-label" >Nombres:</label>                
                    <input type="text" class="form-control" id="idNombres" name="nameNombres">                  
                </div>

                <div class="row form-group">                  
                    <label class="control-label" >Apellidos:</label>                
                    <input type="text" class="form-control" id="idApellidos" name="nameApellidos">                  
                </div>

                <div class="form-group">
                  <label for="exampleFormControlSelect1">Cargo</label>
                  <?php ?>
                  <select class="form-control" name="nameCargo" id="idCargo">
                      <option selected>SELECCIONE</option>
                      <?php					          	
                          $cargos= $controladorConsulta->CargarCargos();
                          for($i=0; $i< sizeof($cargos); $i++){
                             echo '<option value="'. $cargos[$i]->getId().'">'. $cargos[$i]->getNombre().'</option>';
                          }								          
                      ?>
                  </select>
                </div>    
                <div class="form-group">
                  <label for="exampleFormControlSelect1">Ciudad</label>
                  <select class="form-control" name="nameCiudad" id="idCiudad">
                      <option selected>SELECCIONE</option>
                      <?php
                          
                          $ciudades= $controladorConsulta->CargarCiudades();
                          for($i=0; $i< sizeof($ciudades); $i++){
                            echo '<option value="'. $ciudades[$i]->getId().'">'. $ciudades[$i]->getNombre().'</option>';
                          }								          
                     ?>
                  </select>
                </div>          

                <div class="row form-group">                  
                    <label class="control-label" >Salario $</label>                
                    <input type="text" class="form-control" id="idSalario" name="nameSalario">                  
                </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                            <button type="submit" name="agregar" class="btn btn-primary"><span class="glyphicon glyphicon-check"></span>Aceptar</button>			
                        </div>

              </form>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              modal-body
            </div>
            <div class="modal-footer">
            modal-footer
            </div>
          </div>
        </div>
      </div>  
      