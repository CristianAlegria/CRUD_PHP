<!-- Ventana Editar Registros CRUD -->
<div class="modal fade"  id="idModalEditar_<?php echo $empleados[$i]->getCedula(); ?>" tabindex="-1" role="dialog" aria-labelledby="modalEditar" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Editar Empleado <?php echo $empleados[$i]->getCedula(); ?></h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
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
                        <label class="control-label" >Numero Cedula 777:</label>                
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
                </div> 
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" name="editar" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Actualizar Ahora</a>			
                </div>
                </form>

        </div>
    </div>
</div>