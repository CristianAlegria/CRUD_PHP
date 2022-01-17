<?php
  class Ciudad{

    private  $id;
    private  $nombre;    

    public function __construct(){}

    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;        
    }
    
    
    public function getNombre()
    {
        return $this->nombre;
    }
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;        
    }


    public function consultarCiudades(){           
                
            
            $sql ="SELECT ciudad_id,ciudad_name  FROM ciudad;";
            
            $conexionBD = new ConexionBD();         
            $res = $conexionBD->ejecutar($sql);       
            $ciudades = array();
        
                while($fila = pg_fetch_array($res)){
                    
                    $ciudad = new Ciudad();
                    

                    $ciudad->setId($fila[0]);
                    $ciudad->setNombre($fila[1]);                           
                
                    array_push($ciudades,$ciudad);                       
                }       
                return $ciudades;
    } 


  }
 
?>