<?php


    include_once("Modelo/Empleado.php");

    //Consultar empleados
	$empleado = new Empleado();
	$empleados=$empleado->consultarEmpleados();
	echo $empleados[0]->getNombre();
	echo "<br>";
	echo $empleados[0]->getCargo()->getNombre();

    
    
  //Crear empleado
   /*$empleado2 = new Empleado();
  
   $cargo = new Cargo();
   $cargos = $cargo->consultarCargos();
   echo $cargos[0]->getNombre();

   echo "<br>";
   $ciudad = new Ciudad();
   $Ciudades = $ciudad->consultarCiudades();
   echo $Ciudades[0]->getNombre();

   echo "<br>";
   $tipoDocumento = new TipoDocumento();
   $tiposDocumentos = $tipoDocumento->consultarTiposDocumentos();
   echo $tiposDocumentos[0]->getNombre();

   $empleado2->setTipo_documento($tiposDocumentos[0]);
   $empleado2->setCedula(12333);
   $empleado2->setNombre("Marcelo");
   $empleado2->setApellido("Castañeda");
   $empleado2->setCargo($Ciudades[0]);
   $empleado2->setCiudad($Ciudades[0]);
   $empleado2->setSalario(3000000);

   $empleado2->crearEmpleado();*/

   //Consultar Empleado
   
   $empleado3 = new Empleado();  
   $empleado3=$empleado3->consultarEmpleadoPorCedula(1143834552);

   echo "<br>";
   echo $empleado3->getNombre();
   echo "<br>";
   echo $empleado3->getSalario();
   echo "<br>";
   echo $empleado3->getCargo()->getNombre();
    echo "<br>";
   echo $empleado3->getCiudad()->getNombre();

   //Actualizar Empleado
   /*$empleado4 = new Empleado();  
   $empleado4=$empleado4->consultarEmpleadoPorCedula(1143830638); 

   $cedula = $empleado4->getCedula();
   $empleado4->setCedula(114383063);
   $empleado4->setNombre("Cristian");
   $empleado4->setApellido("Alegria");
   $empleado4->setSalario(5000000);
   echo "<br>";
   echo $empleado4->actualizarEmpleado($cedula);*/


   //Eliminar Empleado
   /*$empleado5 = new Empleado(); 
   $empleado5->eliminarEmpleado(114383063);*/

  /* $empleado4 = new Empleado();  
   $empleado4=$empleado4->consultarEmpleadoPorCedula(12333); 
   if(empty($empleado4)){
       echo("The array is empty.");

   }else{

   	   echo($empleado4->getNombre());
   }*/
    
    
?>
