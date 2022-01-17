//function eventosBotones() {	

   var formulario = document.getElementById('idFormulario');     
   var respuesta = document.getElementById('valueInput');
   var btnEliminar = document.getElementById('idBtnEliminar');
   var btnActualizar = document.getElementById('idBtnActualizar');
   var btnBuscar= document.getElementById('idBtnBuscar');


    btnEliminar.addEventListener('click', function(e){
        
    	e.preventDefault();
       // respuesta.innerHTML  = "data";
                
       var datos = new FormData(formulario);
        fetch("../Controlador/ControladorEmpleado.php?opcion=2",{method:"POST",body:datos}
           ).then(res=>res.json())
            .then(data=>{
                 respuesta.innerHTML  = "Eliminar"; 

        })
    },false);

    btnActualizar.addEventListener('click', function(e){
        
        e.preventDefault();
       // respuesta.innerHTML  = "data";
                
       var datos = new FormData(formulario);
        fetch("../Controlador/ControladorEmpleado.php?opcion=2",{method:"POST",body:datos}
           ).then(res=>res.json())
            .then(data=>{
                 respuesta.innerHTML  = "Actualizar"; 

        })

      
    	
     },false);

    btnBuscar.addEventListener('click', function(e){
        
        e.preventDefault();
       // respuesta.innerHTML  = "data";
                
       var datos = new FormData(formulario);
        fetch("../Controlador/ControladorEmpleado.php?opcion=2",{method:"POST",body:datos}
           ).then(res=>res.json())
            .then(data=>{
                 respuesta.innerHTML  = "Buscar"; 

        })

      
        
     },false);


