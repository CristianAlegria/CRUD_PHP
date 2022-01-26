<!-- Delete -->
<div class="modal fade" id="idModalEliminar_<?php echo $empleados[$i]->getCedula(); ?>" tabindex="-1" role="dialog" aria-labelledby="modalEliminar" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Borrar Empleado: <?php echo $empleados[$i]->getNombre()." ".$empleados[$i]->getApellido()." - ".$empleados[$i]->getCedula(); ?></h4></center>
            </div>
            <div class="modal-body">	
            	<p class="text-center">¿Esta seguro de Borrar el registro?</p>
				<h2 class="text-center"></h2>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                <a href="../Controlador/ControladorEmpleado.php?opcion=2&id=<?php echo $empleados[$i]->getCedula();?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Si</a>
            </div>

        </div>
    </div>
</div>