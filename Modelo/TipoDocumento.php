<?php

   class TipoDocumento{
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


       public function consultarTiposDocumentos(){           
                
            
            $sql ="SELECT tipo_documento_id,tipo_documento_name  FROM tipo_documento;";
            
            $conexionBD = new ConexionBD();         
            $res = $conexionBD->ejecutar($sql);       
            $tiposDocumentos = array();
        
                while($fila = pg_fetch_array($res)){
                    
                    $tipoDocumento = new TipoDocumento();
                    

                    $tipoDocumento->setId($fila[0]);
                    $tipoDocumento->setNombre($fila[1]);                           
                
                    array_push($tiposDocumentos,$tipoDocumento);                       
                }       
                return $tiposDocumentos;
       } 

   }
?>