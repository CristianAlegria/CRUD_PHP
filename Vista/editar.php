<!-- Ventana Editar Registros CRUD -->

<div class="modal fade"  id="idModalEditar_<?php echo $empleados[$i]->getCedula(); ?>" tabindex="-1" role="dialog" aria-labelledby="modalEditar" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Editar Empleado </h4></center>
            </div>
            <?php
                include_once("../Controlador/ControladorConsulta.php");
                $cedula= $empleados[$i]->getCedula();
                $controladorConsulta = new ControladorConsulta();	
                $empleado =$controladorConsulta->MostrarEmpleado($cedula);
            ?>
            <div class="modal-body">
			<div class="container-fluid">
                <form  method="POST" action="../Controlador/ControladorEmpleado.php?opcion=3">
                <br>
                <br>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Tipo Documento</label>
                        <select class="form-control" id="selectTipoDocumento" name="nameTipoDocumento">
                            <?php
                                  
                                $tiposDocumentos= $controladorConsulta->CargarTipoDocumento();
                                for($j=0; $j< sizeof($tiposDocumentos); $j++){

                                    if($tiposDocumentos[$j]->getId()==$empleados[$i]->getTipo_documento()->getId()){
                                        echo '<option value="'. $empleados[$i]->getTipo_documento()->getId().'" selected>'. $empleados[$i]->getTipo_documento()->getNombre().'</option>';
                                    }else{
                                        echo '<option value="'. $tiposDocumentos[$j]->getId().'">'. $tiposDocumentos[$j]->getNombre().'</option>';
                                    }
                                

                                }	
                            ?>
                        </select>
                    </div> 

                    <div class="row form-group">                  
                        <label class="control-label" >Numero Cedula:</label>                
                        <input type="text" class="form-control" id="idCedula" name="nameCedula" value="<?php echo $empleados[$i]->getCedula(); ?>" readonly>                  
                    </div>
                                        
                    <div class="row form-group">                  
                        <label class="control-label" >Nombres:</label>                
                        <input type="text" class="form-control" id="idNombres" name="nameNombres" value="<?php echo $empleados[$i]->getNombre(); ?>">                  
                    </div>

                    <div class="row form-group">                  
                        <label class="control-label" >Apellidos:</label>                
                        <input type="text" class="form-control" id="idApellidos" name="nameApellidos" value="<?php echo $empleados[$i]->getApellido(); ?>">                  
                    </div>

                    <div class="form-group">
                    <label for="exampleFormControlSelect1">Cargo</label>
                    <select class="form-control" id="selectCargo" name="nameCargo">
                        <?php
                            
                            $cargos= $controladorConsulta->CargarCargos();
                            for($j=0; $j< sizeof($cargos); $j++){

                                if($cargos[$j]->getId()==$empleados[$i]->getCargo()->getId()){
                                    echo '<option value="'. $empleados[$i]->getCargo()->getId().'" selected>'. $empleados[$i]->getCargo()->getNombre().'</option>';
                                }else{
                                    echo '<option value="'. $cargos[$j]->getId().'">'. $cargos[$j]->getNombre().'</option>';
                                }
                            

                            }	
                            
                        ?>
                    </select>
                    </div>    
                    <div class="form-group">
                    <label for="exampleFormControlSelect1">Ciudad</label>
                    <select class="form-control" id="selectCiudad" name="nameCiudad">
                    
                        <?php
                             $ciudades= $controladorConsulta->CargarCiudades();
                             for($j=0; $j< sizeof($ciudades); $j++){
 
                                 if($ciudades[$j]->getId()==$empleados[$i]->getCiudad()->getId()){
                                     echo '<option value="'. $empleados[$i]->getCiudad()->getId().'" selected>'. $empleados[$i]->getCiudad()->getNombre().'</option>';
                                 }else{
                                     echo '<option value="'. $ciudades[$j]->getId().'">'. $ciudades[$j]->getNombre().'</option>';
                                 }
                             
 
                             }	       
                            
                        ?>
                    </select>
                    </div>          

                    <div class="row form-group">                  
                        <label class="control-label" >Salario $</label>                
                        <input type="text" class="form-control" id="idSalario" name="nameSalario" value="<?php echo $empleados[$i]->getSAlario(); ?>">                  
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