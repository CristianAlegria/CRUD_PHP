
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Crear Empleado</h5>
              
              <form  method="POST" action="../Controlador/ControladorEmpleado.php">
              <br>
              <br>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Tipo Documento</label>
                    <select class="form-control" id="selectTipoDocumento">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
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
                  <select class="form-control" id="selectCargo">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>    
                <div class="form-group">
                  <label for="exampleFormControlSelect1">Ciudad</label>
                  <select class="form-control" id="selectCiudad">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>          

                <div class="row form-group">                  
                    <label class="control-label" >Salario $</label>                
                    <input type="text" class="form-control" id="idSalario" name="nameSalario">                  
                </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                            <button type="submit" name="agregar" class="btn btn-primary"><span class="glyphicon glyphicon-check"></span>Actualizar Ahora</button>			
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
      