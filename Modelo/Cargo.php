<?php
    
    class Cargo{

    	private  $id;
    	private  $nombre;
        private  $codigo_dane;

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


        public function getCodigo_dane()
        {
            return $this->codigo_dane;
        }
        public function setCodigo_dane($codigo_dane)
        {
            $this->codigo_dane = $codigo_dane;            
        }


        public function consultarCargos(){           
                
            
            $sql ="SELECT cargo_id,cargo_name,codigo_dane  FROM cargo;";
            
            $conexionBD = new ConexionBD();         
            $res = $conexionBD->ejecutar($sql);       
            $cargos = array();
        
                while($fila = pg_fetch_array($res)){
                    
                    $cargo = new Cargo();
                    

                    $cargo->setId($fila[0]);
                    $cargo->setNombre($fila[1]);
                    $cargo->setCodigo_dane($fila[2]);
                          
                
                    array_push($cargos,$cargo);                       
                }       
                return $cargos;
            }   

    }
?>